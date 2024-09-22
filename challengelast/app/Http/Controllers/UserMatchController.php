<?php

namespace App\Http\Controllers;

use App\Models\FootballMatch;
use Illuminate\Http\Request;
use App\Models\Match;

class UserMatchController extends Controller
{
    public function __construct() {}

    public function index()
    {
        $matches = FootballMatch::all();
        return view('user.matches.index', compact('matches'));
    }
}
