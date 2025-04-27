<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $role = Role::find(3); // Find the role by ID (e.g., 4)
        if ($role) {
            return $role->users; // Return the users associated with that role
        } else {
            return response()->json(['error' => 'Role not found'], 404);
        }
            // $roles = Role::with('users')->get(); // eager load users
            // foreach ($roles as $role) {
            //     echo "Role: {$role->role_name}<br>";
            //     foreach ($role->users as $user) {
            //         echo "- User: {$user->name}<br>";
            //     }
            //     echo "<br>";
            // }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

//         $user = User::find(3);
// dd($user); // confirm the user exists

        $role = Role::find(3); // Find the role by ID (e.g., 4)
        // $role->users()->attach(1); // Attach the user with ID 1 to the role
        // $role->users()->detach(1); // Detach the user with ID 1 from the role
         $role->users()->sync(1); // Sync the user with ID 1 to the role
        return $role->users; // Return the users associated with that role
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
    public function show(Roles $roles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Roles $roles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Roles $roles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Roles $roles)
    {
        //
    }
}
