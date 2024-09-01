<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Discussion;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $isAdmin = $user && $user->role->name === 'admin';
        $pendingDiscussions = Discussion::where('is_approved', false)->get();

        return view('admin.discussions.index', [
            'pendingDiscussions' => $pendingDiscussions,
            'isAdmin' => $isAdmin
        ]);
    }
    public function approve($id)
    {
        $discussion = Discussion::findOrFail($id);
        $discussion->is_approved = true;
        $discussion->save();

        return redirect()->route('admin.discussions.index')->with('status', 'Discussion approved.');
    }

    public function reject($id)
    {
        $discussion = Discussion::findOrFail($id);
        $discussion->is_approved = false;
        $discussion->save();

        return redirect()->route('admin.discussions.index')->with('status', 'Discussion rejected.');
    }

    public function edit($id)
    {
        $discussion = Discussion::findOrFail($id);
        $categories = Category::all();
        $user = Auth::user();
        $isAdmin = $user && $user->role->name === 'admin';

        return view('admin.discussions.edit', [
            'discussion' => $discussion,
            'categories' => $categories,
            'isAdmin' => $isAdmin,
        ]);
    }


    public function destroy($id)
    {
        $discussion = Discussion::findOrFail($id);
        $discussion->delete();

        return redirect()->route('admin.discussions.index')->with('status', 'Discussion deleted.');
    }
    public function update(Request $request, $id)
    {
        $discussion = Discussion::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $discussion->title = $request->input('title');
        $discussion->description = $request->input('description');
        $discussion->category_id = $request->input('category_id');

        if ($request->hasFile('image')) {

            if ($request->hasFile('image')) {

                if ($discussion->image && Storage::exists($discussion->image)) {
                    Storage::delete($discussion->image);
                }


                $imagePath = $request->file('image')->store('images', 'public');
                $discussion->image = $imagePath;
            }

            $discussion->save();
            return redirect()->route('admin.discussions.index')->with('status', 'Discussion updated.');
        }
    }
}
