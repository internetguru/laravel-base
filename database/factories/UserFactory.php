<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use InternetGuru\LaravelUser\Enums\Role;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'email' => Str::random(10) . '@gmail.com',
            'remember_token' => Str::random(10),
            'lang' => 'cs',
            'role' => User::roles()::CUSTOMER,
        ];
    }

    public function withRole(Role $role)
    {
        return $this->afterCreating(function ($user) use ($role) {
            $user->role = $role;
            $user->save();
        });
    }

    public function withSocialite($provider, $providerId, $name, $email)
    {
        return $this->afterCreating(function ($user) use ($provider, $providerId, $name, $email) {
            $user->socialites()->create([
                'provider' => $provider,
                'provider_id' => $providerId,
                'name' => $name,
                'email' => $email,
            ]);
        });
    }
}
