<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // $users= User::find(2);
        $users = User::with('roles')->get(); // eager load roles

        // foreach ($users as $user) {
        //     echo "User: {$user->name}<br>";
        //     foreach ($user->roles as $role) {
        //         echo "- Role: {$role->role_name}<br>";
        //     }
        //     echo "<br>";
        // }

    //    return $users->roles;

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user= User::find(2);
        // $user->roles()->attach(1);
        // $user->roles()->detach(1); // Detach the role with ID 1
        $user->roles()->sync(1) ;// Detach the role with ID 1

        return $user->roles; // Return the roles associated with that user
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
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}