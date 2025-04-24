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
        // with('contacts')->get();

        // $students = student::
        // with('contacts')->find(2);

        // $students = student::with('contacts')
        // ->where('age','=',29)
        // ->find(2);

        //  echo $students->contacts->phone;


        // $students=Student::where('age','=',29)
        // ->withWhereHas('contacts', function ($query) {
        //     $query->where('phone', '=', '909-265-3248');
        // })->get();

        $students=Student::where('age','=',29)
        ->WhereHas('contacts', function ($query) {
            $query->where('phone', '=', '909-265-3248');
        })->get();

          return $students;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $student=Student::create([
            'name' => fake()->name(),
            'age' => fake()->numberBetween(18, 30),
            'gender'=> 'Female'
            ]);
        $student->contacts()->create([
            'phone' => fake()->phoneNumber(),
            'email' => fake()->unique()->safeEmail()
        ]); 
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