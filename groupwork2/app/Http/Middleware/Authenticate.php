<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        return $request->expectsJson() ? null : route('login');
    }

    public function handle($request, Closure $next, ...$guards) // Auth::gurad('web')
    {
        if (Auth::guard('web')->user())
        {
            if (Auth::guard('web')->user()->role == 'admin' || Auth::guard('web')->user()->role == 'student') 
            {
                // return $next($request);
                return redirect()->route('homepage');
            }
        }
        return redirect()->route('login');
    }
}
