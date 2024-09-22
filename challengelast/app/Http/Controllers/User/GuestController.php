<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\FootballMatch;
use Illuminate\Http\Request;

class GuestController extends Controller
{

    public function index()
    {
        $upcomingMatches = FootballMatch::where('date', '>', now())->get();
        $playedMatches = FootballMatch::where('date', '<=', now())->whereNotNull('result')->get();

        return view('user.guest.index', compact('upcomingMatches', 'playedMatches'));
    }
}
