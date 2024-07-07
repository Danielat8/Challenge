<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UsersController extends Controller
{
    public function index()
    {
        $name = Session::get('name', 'YOU');
        $lastname = Session::get('lastname', '');
        return view('index', compact('name', 'lastname'));
    }

    public function showLoginForm()
    {
        return view('login');
    }

    public function storeInfo(Request $request)
    {
        $request->validate([
            'name' => 'required|alpha|max:15',
            'lastname' => 'required|alpha|max:25',
            'email' => 'nullable|email',
        ], [
            'name.required' => 'The name field is required.',
            'name.alpha' => 'The name field must only contain alphabetic characters.',
            'name.max' => 'The name field must not be longer than 15 characters.',
            'lastname.required' => 'The last name field is required.',
            'lastname.alpha' => 'The last name field must only contain alphabetic characters.',
            'lastname.max' => 'The last name field must not be longer than 25 characters.',
            'email.email' => 'The email must be a valid email address.',
        ]);

        Session::put('name', $request->name);
        Session::put('lastname', $request->lastname);
        Session::put('email', $request->email ?? 'Not provided');

        return redirect()->route('info');
    }

    public function showInfo()
    {
        if (!Session::has('name') || !Session::has('lastname')) {
            return redirect()->route('home');
        }

        $name = Session::get('name');
        $lastname = Session::get('lastname');
        $email = Session::get('email', 'Not provided');

        return view('info', compact('name', 'lastname', 'email'));
    }

    public function logout()
    {
        Session::flush();
        return redirect()->route('home');
    }
}
