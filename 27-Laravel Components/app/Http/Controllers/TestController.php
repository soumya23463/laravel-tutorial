<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class TestController extends Controller
{

    public function index()
    {
        return view('index');
    }

    public function register()
    {
        return view('register');
    }

    public function registerSave(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed',
        ]);

        $user = User::create($data);

        return redirect()->route('login')->with('success', 'User login successfully.');
    }

    public function login(Request $request)
    {

        $data = $request->validate([
            'email' => 'required|string|email|max:255|exists:users',
            'password' => 'required|string|min:1',
        ]);
        if (Auth::attempt($data)) {
            return redirect()->route('dashboard')->with('success', 'Login successful.');
        } else {
            return redirect()->route('login')->with('error', 'Invalid credentials.');
        }
    }
    public function dashboardPage()
    {
        if (Auth::check()) {
            return view('dashboard');
        } else {
            return redirect()->route('login')->with('error', 'Please login to access the dashboard.');
        }

        // if (Gate::allows('isAdmin')) {
        //     return view('dashboard');
        // } else {
        //     return redirect()->route('login')->with('error', 'You are not authorized to access this page.');
        // }

        // Gate::authorize('isAdmin');
        // return view('dashboard');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Logout successful.');
    }

    public function profile(int $id)
    {
        // $user = User::find($id);

        // if (!$user) {
        //     return redirect()->route('login')->with('error', 'User not found.');
        // }

        // if (Auth::check() && $user->id == Auth::id()) {
        // return view('profile', compact('user'));
        // } else {
        //     return redirect()->route('login')->with('error', 'Please login to access the profile.');
        // }


        // if (Gate::allows('view-profile', $id)) {
        //     $user = User::find($id);
        //     return view('profile', compact('user'));
        // } else {
        //     return redirect()->route('login')->with('error', 'You are not authorized to access this profile.');
        // }

        Gate::authorize('view-profile', $id);
        $user = User::find($id);
        return view('profile', compact('user'));
    }


    public function post(int $userid)
    {
        if (Auth::check() && $userid == Auth::id()) {
            $posts = Post::where('user_id', Auth::id())->get();
            return view('post', compact('posts'));
        } else {
            return redirect()->route('login')->with('error', 'Please login to access the profile.');
        }
    }
    public function updatePost(int $id)
    {
        $post = Post::find($id);
        $targetPost = Post::where('id', $post->user_id)->first();
        Gate::authorize('view-profile', $targetPost->user_id);
        if (Auth::check() && $targetPost->user_id == Auth::id()) {
            // return view('updatePost', compact('post'));
        } else {
            return redirect()->route('login')->with('error', 'Please login to access the profile.');
        }

        if (Gate::any(['view-profile', 'update-post'], $targetPost->user_id)) {
            return view('updatePost', compact('post'));
        } else {
            return redirect()->route('login')->with('error', 'You are not authorized to access this profile.');
        }


        if (Gate::none(['view-profile', 'update-post'], $targetPost->user_id)) {
            return view('updatePost', compact('post'));
        } else {
            return redirect()->route('login')->with('error', 'You are not authorized to access this profile.');
        }
    }
}
