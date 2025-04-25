<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class ValidUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {

            // if (Auth::check() && Auth::user()->role == $role) {
            //     return $next($request);
            // } else {
            //     return redirect()->route('login')->with('error', 'Please login to access the dashboard.');
            // }

            if (Auth::user()->role == $role) {
                return $next($request);
            }if (Auth::user()->role == "user") {
                return redirect()->route('user')->with('error', 'Please login to access the dashboard.');
            }

            else {
                return redirect()->route('login')->with('error', 'Please login to access the dashboard.');
            }
    }

    public function terminate(Request $request, Response $response): void
    {
        echo "terminate middleware is running<br>";

    }

}
