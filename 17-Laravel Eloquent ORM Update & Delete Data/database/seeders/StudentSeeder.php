<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
use Illuminate\Support\Facades\File;


class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // $students = [
        //     [
        //         'name' => 'Yahoo Baba',
        //         'email' => 'yahosdobaba@gmail.com'
        //     ],
        //     [
        //         'name' => 'Yahoo Baba',
        //         'email' => 'yahooasbaba@gmail.com'
        //     ],
        //     [
        //         'name' => 'Yahoo Baba',
        //         'email' => 'yahooababa@gmail.com'
        //     ]
        // ];

        // foreach ($students as $student) {
        //     Student::create($student);
        // }
        // Student::create([
        //     'name' => 'John Doe',
        //     'email' => 'John@gmail.com'
        // ]);

        // $students = collect([
        //     [
        //         'name' => 'Yahoo Baba',
        //         'email' => 'yahoobaba1@gmail.com'
        //     ],
        //     [
        //         'name' => 'Yahoo Baba',
        //         'email' => 'yahoobaba2@gmail.com'
        //     ],
        //     [
        //         'name' => 'Yahoo Baba',
        //         'email' => 'yahoobaba3@gmail.com'
        //     ]
        // ]);
        // $students->each(function ($student) {
        //     Student::create($student);
        // });

        // $json = File::get(database_path('json/students.json'));

        // $students = collect(json_decode($json, true));
        // $students->each(function ($student) {
        //     Student::create(
        //         [
        //             'name' => $student['name'],
        //             'email' => $student['email']
        //         ]
        //     );
        // });

        for ($i = 0; $i < 10; $i++) {
            Student::create([
                'name' => fake()->name(),
                'email' => fake()->unique()->safeEmail()
            ]);
        }
    }
}
