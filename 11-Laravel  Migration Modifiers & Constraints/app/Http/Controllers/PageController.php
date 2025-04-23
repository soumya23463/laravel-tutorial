<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function __invoke()
    {
        // Middleware can be applied here if needed
         return view('welcome');
    }
    public function index(string $id)
    {
        // return view('pages.index', ['id' => $id]);
        return view('pages.index', compact('id'));
    }

    // public function index(string $id)
    // {
    //     return "this is controller page" . $id;
    // }
    // public function home()
    // {
    //     return view('welcome');
    // }
}