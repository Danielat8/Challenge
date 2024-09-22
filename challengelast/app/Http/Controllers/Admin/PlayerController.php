<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Player;
use App\Models\Team;
use Illuminate\Http\Request;


class PlayerController extends Controller
{
    public function index()
    {
        $players = Player::with('team')->get();
        return view('admin.players.index', compact('players'));
    }

    public function create()
    {
        $teams = Team::all();
        return view('admin.players.create', compact('teams'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'team_id' => 'required|exists:teams,id',
        ]);

        Player::create($request->all());

        return redirect()->route('admin.players.index')->with('success', 'Player created successfully.');
    }

    public function edit(Player $player)
    {
        $teams = Team::all();
        return view('admin.players.edit', compact('player', 'teams'));
    }

    public function update(Request $request, Player $player)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'team_id' => 'required|exists:teams,id',
        ]);

        $player->update($request->all());

        return redirect()->route('admin.players.index')->with('success', 'Player updated successfully.');
    }

    public function destroy(Player $player)
    {
        $player->delete();

        return redirect()->route('admin.players.index')->with('success', 'Player deleted successfully.');
    }
}
