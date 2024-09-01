<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class CustomLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }


    public function login(Request $request)
    {
        $user = Auth::user();

        if ($user->role->name === 'admin') {
            return redirect()->route('admin.discussions.index');
        }
        return redirect()->route('discussions.index');
    }
}
