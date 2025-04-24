<?php

namespace App\Http\Controllers;

use App\Models\student;
use App\Models\Contact;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $students = student::
        // with('posts')->get();

        // $students = student::
        // with('posts')->find(2);

        // $students = student::
        // doesntHave('posts')->get();

        // $students=student::has('posts')->get();

        //  $students=student::has('posts','=',2)->with('posts')->get();

        // $students=student::withCount('posts')->with('posts')->get();

        $students=student::
        select('id','name')
        ->withCount('posts')->with('posts')->get();

          return $students;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $student=Student::create([
        //     'name' => fake()->name(),
        //     'age' => fake()->numberBetween(18, 30),
        //     'gender'=> 'Female'
        //     ]);
        // $student->posts()->create([
        //     'title' => fake()->sentence(3),
        //     'description' => fake()->paragraph(3),
        // ]);
        // return $student;

        // $student=Student::find(2);
        // $student->posts()->create([
        //     'title' => fake()->sentence(3),
        //     'description' => fake()->paragraph(3),
        // ]);
        $student=Student::find(2);
        $student->posts()->createMany([
            [
            'title' => fake()->sentence(3),
            'description' => fake()->paragraph(3),
            ],
        [
            'title' => fake()->sentence(3),
            'description' => fake()->paragraph(3),
        ]
        ]
    );
        return $student;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(student $student)
    {
        //
    }
}