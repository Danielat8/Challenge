<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\FootballMatch;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class AdminMatchController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        $isAdmin = $user && $user->is_admin;
        $matches = FootballMatch::with('homeTeam', 'awayTeam')->get();

        return view('admin.matches.index', [
            'matches' => $matches,
            'isAdmin' => $isAdmin
        ]);
    }

    public function create()
    {
        $teams = Team::all();
        return view('admin.matches.create', compact('teams'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'home_team_id' => 'required',
            'away_team_id' => 'required',
            'date' => 'required|date',
            'result' => 'nullable|string',
        ]);

        FootballMatch::create($request->all());

        Log::info('Football match created', [
            'user_id' => Auth::id(),
            'match_data' => $request->all(),
        ]);

        return redirect()->route('admin.matches.index')->with('success', 'Match created successfully.');
    }

    public function edit($id)
    {
        $match = FootballMatch::findOrFail($id);
        $teams = Team::all();

        Log::info('Editing football match', [
            'user_id' => Auth::id(),
            'match_id' => $id,
        ]);

        return view('admin.matches.edit', compact('match', 'teams'));
    }

    public function update(Request $request, $id)
    {
        $match = FootballMatch::findOrFail($id);
        $match->update($request->all());

        Log::info('Football match updated', [
            'user_id' => Auth::id(),
            'match_id' => $id,
            'updated_data' => $request->all(),
        ]);

        return redirect()->route('admin.matches.index')->with('success', 'Match updated successfully.');
    }

    public function destroy($id)
    {
        $match = FootballMatch::findOrFail($id);
        $match->delete();

        Log::info('Football match deleted', [
            'user_id' => Auth::id(),
            'match_id' => $id,
        ]);

        return redirect()->route('admin.matches.index')->with('success', 'Match deleted successfully.');
    }
}
