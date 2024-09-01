<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Discussion;

class WelcomeController extends Controller
{
    public function index()
    {

        $discussions = Discussion::where('is_approved', true)->get();

        return view('welcome', ['discussions' => $discussions]);
    }
}
