<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Container\Attributes\Auth as AttributesAuth;

class RedirectIfAuthenticated
{
    public function handle($request, Closure $next, ...$guards)
    {
        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                $user = Auth::user();


                if ($user->role->name === 'admin') {
                    return redirect('/admin/discussions');
                } else {
                    return redirect('/discussions');
                }
            }
        }

        return $next($request);
    }
}
