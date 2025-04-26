<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create roles if not exists
        $roleNames = ['Admin', 'Editor', 'User'];

        foreach ($roleNames as $name) {
            Role::firstOrCreate(['role_name' => $name]);
        }

        // Fetch the actual Role models as a collection
        $roles = Role::all();

        for ($i = 0; $i < 4; $i++) {
            $user = User::create([
                'name' => fake()->name(),
                'email' => fake()->unique()->safeEmail(),
            ]);

            // Attach 1 or 2 random roles
            $user->roles()->attach(
                $roles->random(rand(1, 2))->pluck('id')->toArray()
            );
        }
    }
}
