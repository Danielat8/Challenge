<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Requests\ProjectRequest;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }
    public function store(ProjectRequest $request)
    {

        $data = [
            'name' => $request->name,
            'subtitle' => $request->subtitle,
            'image' => $request->image,
            'url' => $request->url,
            'description' => $request->description
        ];
        Project::create($data);

        return redirect()->route('admin.dashboard')->with('success', 'Project added successfully.');
    }

    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    public function update(ProjectRequest $request, Project $project)
    {
        $data = [
            'name' => $request->name,
            'subtitle' => $request->subtitle,
            'image' => $request->image,
            'url' => $request->url,
            'description' => $request->description
        ];


        $project->update($data);

        return redirect()->route('admin.dashboard')->with('success', 'Project updated successfully.');
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('admin.dashboard');
    }
}
