<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{

    public function index()
    {
        $value=session('name');
        return view('welcome',compact('value'));
    }
    // public function setSession()
    // {
    //     session(['name' => 'John Doe']);
    //     // session()->put('name', 'John Doe');
    //     return redirect('/get');

    // }

    // public function getSession()
    // {
    //     $value = session()->get('name');
    //     return $value;
    // }
    // public function destroySession()
    // {
    //     session()->forget('name');
    //     return 'Session value destroyed';
    // }

    public function setSession(Request $request)
    {
        // $request->session()->put([
        //     'name' => 'John Doe',
        //     'email' => 'email@gmail.com'
        // ]);
        // $request->session()->put([
        //     'name' => NULL,
        //     'email' => 'email@gmail.com'
        // ]);
        // $request->session()->increment('count', 3);
        // $request->session()->decrement('countt', 3);
        // $request->session()->regenerate();
        $request->session()->flash('name', 'John Doe');
         return redirect('/get');
    }

    public function getSession(Request $request)
    {
        // $data = $request->session()->only(['name', 'email']);
        // $data = $request->session()->except(['email','_previous']);

        // if(session()->has('name')){
        //     $data['name'] = session('name');
        // }else{
        //     $data['name'] = 'Session value not found';
        // }
        // if(session()->exists('name')){
        //     $data['name'] = session('name');
        // }else{
        //     $data['name'] = 'Session value not found';
        // }
        //  $data = $request->session()->all();


        // return $data;

    }

    public function destroySession(Request $request)
    {
        // $request->session()->forget('name');
        // $request->session()->flush();
        $request->session()->invalidate();
        return 'Session value destroyed';
    }


}
