<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        Log::info('Checking user admin status', [
            'user_id' => Auth::id(),
            'is_admin' => Auth::check() ? Auth::user()->is_admin : null
        ]);

        if (Auth::check() && Auth::user()->is_admin) {
            return $next($request);
        }

        return redirect('/');
    }
}
