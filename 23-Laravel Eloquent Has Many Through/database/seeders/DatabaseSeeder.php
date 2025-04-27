<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Company;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Phone_number;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // // If you have other Seeder classes, you can call them here
        // $this->call([
        //     // ExampleSeeder::class,
        // ]);

        // Create Users with Companies and Phone Numbers
        Customer::factory()
            ->has(
                Order::factory()->count(5), // each customer has 5 orders
            )
            ->count(5) // create 10 users
            ->create();
    }
}