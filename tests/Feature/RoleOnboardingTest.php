<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RoleOnboardingTest extends TestCase
{
    use RefreshDatabase;

    public function test_guests_are_redirected_to_login(): void
    {
        $this->get(route('onboarding.role'))->assertRedirect(route('login'));
    }

    public function test_new_social_user_without_role_sees_selection_page(): void
    {
        $user = User::factory()->create([
            'solar_role' => null,
            'provider' => 'google',
            'provider_id' => 'g-1',
        ]);

        $this->actingAs($user)
            ->get(route('onboarding.role'))
            ->assertOk()
            ->assertSee('How will you use SolarShare?')
            ->assertSee('Rent gear')
            ->assertSee($user->name);
    }

    public function test_user_with_existing_role_skips_onboarding(): void
    {
        $user = User::factory()->create(['solar_role' => 'rent']);

        $this->actingAs($user)
            ->get(route('onboarding.role'))
            ->assertRedirect(route('home'));
    }

    public function test_valid_role_is_saved_and_redirects_home(): void
    {
        $user = User::factory()->create(['solar_role' => null]);

        $this->actingAs($user)
            ->post(route('onboarding.role.store'), ['solar_role' => 'both'])
            ->assertRedirect(route('home'))
            ->assertSessionHas('success');

        $this->assertSame('both', $user->fresh()->solar_role);
    }

    public function test_invalid_role_is_rejected(): void
    {
        $user = User::factory()->create(['solar_role' => null]);

        $this->actingAs($user)
            ->post(route('onboarding.role.store'), ['solar_role' => 'admin'])
            ->assertSessionHasErrors('solar_role');

        $this->assertNull($user->fresh()->solar_role);
    }

    public function test_unonboarded_user_is_locked_out_of_other_pages(): void
    {
        $user = User::factory()->create(['solar_role' => null]);

        $this->actingAs($user)
            ->get(route('home'))
            ->assertRedirect(route('onboarding.role'));

        $this->actingAs($user)
            ->get(route('login'))
            ->assertRedirect(route('onboarding.role'));

        // Escape hatches stay reachable.
        $this->actingAs($user)
            ->post(route('logout'))
            ->assertRedirect('/');
    }

    public function test_onboarded_user_can_browse_freely(): void
    {
        $user = User::factory()->create(['solar_role' => 'lend']);

        $this->actingAs($user)
            ->get(route('home'))
            ->assertOk();
    }
}
