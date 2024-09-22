<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;


class Authenticate
{
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->guest()) {
            return redirect()->route('login');
        }


        if (Auth::user()->is_admin) {
            return redirect()->route('admin.matches.index');
        } else {
            return redirect()->route('matches.index');
        }

        return $next($request);
    }
}
