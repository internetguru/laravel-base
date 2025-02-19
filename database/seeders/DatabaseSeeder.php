<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use InternetGuru\LaravelUser\Enums\Provider;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        if (config('app.demo')) {
            User::factory()->withRole(User::roles()::PENDING)->create();
            User::factory()->withRole(User::roles()::SPECTATOR)->create();
            User::factory()->withRole(User::roles()::MANAGER)->create();
            User::factory()->withRole(User::roles()::OPERATOR)->create();
            User::factory()->withRole(User::roles()::ADMIN)->create();
        } else {
            User::factory()->withSocialite(
                Provider::GOOGLE,
                '106988997789517413087',
                'George Pavelka',
                'pavelka.iix@gmail.com',
            )->create([
                'name' => 'George',
                'email' => 'george@giftcarder.io',
                'role' => User::roles()::ADMIN,
            ]);

            User::factory()->withSocialite(
                Provider::SEZNAM,
                'e273eac080e7aa2ea6158e56620ed3df7ca1c8d1',
                'Pavel Petržela',
                'poulikpetrzela@seznam.cz',
            )->withSocialite(
                Provider::GOOGLE,
                '108829846781865836650',
                'Pavel Petržela',
                'poulikpetrzela@gmail.com',
            )->create([
                'name' => 'Pavel',
                'email' => 'pavel@giftcarder.io',
                'role' => User::roles()::ADMIN,
            ]);

        }
    }
}
