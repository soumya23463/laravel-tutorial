<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\Student;
use App\Models\Post;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            // Create a student
            $student = Student::create([
                'name' => fake()->name(),
                'age' => fake()->numberBetween(18, 30),
                'gender' => fake()->randomElement(['Male', 'Female'])
            ]);

            // Give each student 2 contacts
            for ($j = 0; $j < 2; $j++) {
                Post::create([
                    'student_id' => $student->id,
                    'title' => fake()->phoneNumber(),
                    'description' => fake()->unique()->safeEmail()
                ]);
            }
        }
    }
}
