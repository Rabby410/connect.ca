<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserType
{
    public function handle(Request $request, Closure $next)
    {
        // die(Auth::user());
        // Check if the user is authenticated and has type 1
        if (auth()->check() && auth()->user()->type ===1) {
            return $next($request);
        }

        // Redirect to unauthorized page or show an error
        abort(403, 'Unauthorized');

        // You can customize this part based on your application's requirements
    }
}
