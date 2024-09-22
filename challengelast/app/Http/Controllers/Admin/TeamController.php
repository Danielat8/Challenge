<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Team;


class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::all();
        return view('admin.teams.index', compact('teams'));
    }


    public function create()
    {
        return view('admin.teams.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'foundation_year' => 'required|integer|between:1901,' . date('Y'),
        ]);


        Team::create($request->all());

        return redirect()->route('admin.teams.index')->with('success', 'Team created successfully.');
    }

    public function edit(Team $team)
    {
        return view('admin.teams.edit', compact('team'));
    }

    public function update(Request $request, Team $team)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'foundation_year' => 'required|integer|between:1901,' . date('Y'),
        ]);


        $team->update($request->all());

        return redirect()->route('admin.teams.index')->with('success', 'Team updated successfully.');
    }

    public function destroy(Team $team)
    {
        $team->delete();

        return redirect()->route('admin.teams.index')->with('success', 'Team deleted successfully.');
    }
}
