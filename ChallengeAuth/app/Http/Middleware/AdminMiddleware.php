<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * 
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function handle(Request $request, Closure $next)
    {
        $user = $request->user();

        if ($user && $user->role_id === 1) {
            return $next($request);
        }

        return redirect('/discussions');
    }
}
