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
        // $users = User::all();
        // // return $users;
        // // foreach($users as $user) {
        // //     echo $user->name . "<br>";
        // //     echo $user->email . "<br>";
        // // }

        // return view('users.index', compact('users'));

        // $users=User::find([2,4],['name','email']);
        //    $users= User::count();
        // $users= User::min('id');
        // $users= User::max('id');
        //$users= User::sum('id');
        // $users= User::avg('id');
        //  $users= User::where('name', 'Mr. King Macejkovic')->get();
        //  $users= User::where([['name', 'Mr. King Macejkovic'],['id',1]])->first();
        // $users= User::where([['name', 'Mr. King Macejkovic'],['id',1]])->first();
        // $users= User::whereName('Mr. King Macejkovic')->first();
        // $users= User::where('name', 'Mr. King Macejkovic')
        // ->select('id','name','email')
        // ->toRawSql();
        // $users= User::where('name', 'Mr. King Macejkovic')
        // ->select('id','name','email')
        // ->toSql();
        // $users= User::where('name', 'Mr. King Macejkovic')
        // ->select('id','name','email')
        // ->get();
        // $users= User::where('name', 'Mr. King Macejkovic')
        // ->select('id','name','email')
        // ->dd();
        // $users= User::where('name', 'Mr. King Macejkovic')
        // ->select('id','name','email')
        // ->ddRawSql();
        // $users= User::where('id','>', '0')
        // ->select('id','name','email')
        // ->get();
        $users= User::whereBetween('id',[2,8])
        ->select('id','name','email')
        ->get();
        return $users;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
