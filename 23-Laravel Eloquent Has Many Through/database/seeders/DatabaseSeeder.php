<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Company;
use App\Models\Country;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create Countries with Users and Posts
        Country::factory()
            ->has(
                User::factory()
                    ->has(Post::factory()->count(5)) // each user has 5 posts

            )
            ->count(5) // create 5 countries
            ->create();
    }
}