<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;


class CountryController extends Controller
{
    public function index()
    {
        // $countries = Country::with('users')->with('posts')->get();
        $countries = Country::with('users')->with('posts')->find(1);
        // $countries = Country::with(['users', 'posts' => function ($query) {
        //     $query->where('title', 'Reprehenderit vel necessitatibus pariatur tempora assumenda.'); // Example condition for posts
        // }])
        //     ->find(1);
        // $countries = Country::with(['posts', 'users' => function ($query) {
        //     $query->where('name', 'Saige Kihn'); // Example condition for posts
        // }])
        //     ->find(1);
        return $countries;
    }
}