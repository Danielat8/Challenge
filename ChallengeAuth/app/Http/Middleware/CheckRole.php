<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class CheckRole
{
    /**
     * Handle an incoming request.
     * * @param  mixed 
     * @return \Symfony\Component\HttpFoundation\Response
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        if (Auth::check() && !in_array(Auth::user()->role, $roles)) {
            return redirect()->route('discussions.index')
                ->with('error', 'You are not authorized to access this page.');
        }

        return $next($request);
    }
}
