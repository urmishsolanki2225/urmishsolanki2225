<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckSessionTimeout
{
    public function handle($request, Closure $next)
    {
        // Check if the user is authenticated
        if (Auth::check()) {
            // Check if the session has expired
            if (time() - session('last_activity') > config('session.lifetime') * 60) {
                // Log out the user and redirect to login page
                Auth::logout();
                return redirect()->route('login')->with('session_expired', true);
            }
        }

        // Update last activity time in session
        session(['last_activity' => time()]);

        return $next($request);
    }
}
