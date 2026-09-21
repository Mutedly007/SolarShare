<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class RegistrationValidationTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Passwords missing ANY of the checklist requirements must be rejected
     * by the server — even if a crafted request bypasses the client-side JS.
     */
    public function test_weak_passwords_are_rejected(): void
    {
        $weakPasswords = [
            'Aa1!'        => 'too short (under 8 chars)',
            'aaaaaaaa1!'  => 'missing uppercase letter',
            'AAAAAAAA1!'  => 'missing lowercase letter',
            'Aaaa1234'    => 'missing symbol',           // the exact case that used to slip through
            'Aaaaaaaa!!'  => 'missing number',
            'AAAAAAAAA!'  => 'missing number (only letters + symbol)',
        ];

        foreach ($weakPasswords as $password => $reason) {
            $email = 'weak-' . md5($password) . '@example.com';

            $response = $this->post(route('register.store'), [
                'name'                  => 'Weak Pass Tester',
                'email'                 => $email,
                'solar_role'            => 'rent',
                'password'              => $password,
                'password_confirmation' => $password,
            ]);

            $response->assertSessionHasErrors('password', null, 'default');
            // NOTE: assertDatabaseMissing() has no message parameter (its 3rd arg
            // is a connection name), so $reason is documented in the array above.
            $this->assertDatabaseMissing(User::class, ['email' => $email]);
        }
    }

    public function test_strong_password_creates_the_account(): void
    {
        $response = $this->post(route('register.store'), [
            'name'                  => 'Strong Pass Tester',
            'email'                 => 'strong@example.com',
            'solar_role'            => 'both',
            'password'              => 'SunnyDay1!',
            'password_confirmation' => 'SunnyDay1!',
        ]);

        $response->assertRedirect();
        $this->assertDatabaseHas(User::class, [
            'email'      => 'strong@example.com',
            'solar_role' => 'both',
        ]);
        $this->assertTrue(
            Hash::check('SunnyDay1!', User::where('email', 'strong@example.com')->first()->password)
        );
    }

    public function test_mismatched_confirmation_is_rejected(): void
    {
        $response = $this->post(route('register.store'), [
            'name'                  => 'Mismatch Tester',
            'email'                 => 'mismatch@example.com',
            'password'              => 'SunnyDay1!',
            'password_confirmation' => 'SunnyDay2!',
        ]);

        $response->assertSessionHasErrors('password');
        $this->assertDatabaseMissing(User::class, ['email' => 'mismatch@example.com']);
    }

    public function test_duplicate_email_is_rejected(): void
    {
        User::create([
            'name'     => 'Existing User',
            'email'    => 'taken@example.com',
            'password' => Hash::make('SunnyDay1!'),
        ]);

        $response = $this->post(route('register.store'), [
            'name'                  => 'Second User',
            'email'                 => 'taken@example.com',
            'password'              => 'SunnyDay1!',
            'password_confirmation' => 'SunnyDay1!',
        ]);

        $response->assertSessionHasErrors('email');
        $this->assertSame(1, User::where('email', 'taken@example.com')->count());
    }
}
