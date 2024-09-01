<?php

namespace App\Http\Controllers;

use App\Models\Discussion;
use App\Models\Category;
use Illuminate\Container\Attributes\Auth as AttributesAuth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;


class DiscussionController extends Controller
{
    public function index()
    {

        $user = Auth::user();
        $isAdmin = $user && $user->role->name === 'admin';

        if ($isAdmin) {

            $discussions = Discussion::all();
        } else {

            $discussions = Discussion::where('user_id', $user->id)
                ->where('is_approved', true)
                ->get();
        }

        return view('discussions.index', [
            'discussions' => $discussions,
            'isAdmin' => $isAdmin,
        ]);
    }

    public function create()
    {

        if (!Auth::check()) {

            return redirect()->route('welcome')->with('error', 'You need to be logged in to create a discussion.');
        }

        $userRole = Auth::user()->role_id;



        return view('discussions.create', [

            'categories' => Category::all(),
            'userRole' => $userRole,
        ]);
    }

    public function store(Request $request)
    {

        if (Auth::user()->role === 'admin' || Auth::user()->role === 'guest') {
            return redirect()->route('discussions.index')
                ->with('error', 'You are not authorized to create discussions.');
        }


        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|max:2048',
        ]);


        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }

        $discussion = Discussion::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'category_id' => $validated['category_id'],
            'user_id' => Auth::id(),
            'image' => $imagePath,
            'is_approved' => false,
        ]);

        return redirect()->route('discussions.index')
            ->with('success', 'Your discussion has been successfully created! It needs to be approved before you dig into it through! :D');
    }
    public function show($id)
    {
        $discussion = Discussion::with(['user', 'category', 'comments.user'])->findOrFail($id);
        Log::info('Discussion:', ['discussion' => $discussion]);

        if (!$discussion) {
            return abort(404, 'Discussion not found');
        }
        return view('discussions.show', [
            'discussion' => $discussion
        ]);
    }


    public function edit(Discussion $discussion)
    {
        $categories = Category::all();
        return view('discussions.edit', compact('discussion', 'categories'));
    }

    public function update(Request $request, Discussion $discussion)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image',
            'category_id' => 'required|exists:categories,id',
        ]);

        $discussion->title = $request->input('title');
        $discussion->description = $request->input('description');
        $discussion->category_id = $request->input('category_id');

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $discussion->image = $imagePath;
        }

        $discussion->save();

        return redirect()->route('discussions.index');
    }


    public function destroy(Discussion $discussion)
    {
        $discussion->delete();

        return redirect()->route('discussions.index');
    }
}
