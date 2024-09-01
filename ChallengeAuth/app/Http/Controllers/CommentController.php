<?php

namespace App\Http\Controllers;

use App\Models\Discussion;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * 
     *
     * @param  int  $discussion_id
     * @return \Illuminate\View\View
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create($discussion_id)
    {
        $discussion = Discussion::findOrFail($discussion_id);
        return view('comments.create', compact('discussion'));
    }
    public function store(Request $request)
    {

        $request->validate([
            'content' => 'required|string',
            'discussion_id' => 'required|exists:discussions,id',
        ]);

        $request->user()->comments()->create([
            'content' => $request->content,
            'discussion_id' => $request->discussion_id,
        ]);

        return redirect()->route('discussions.show', $request->discussion_id)
            ->with('success', 'Comment added successfully.');
    }
    public function edit($id)
    {
        $comment = Comment::findOrFail($id);

        if (Auth::user()->id !== $comment->user_id) {
            abort(403, 'Unauthorized action.');
        }

        return view('comments.edit', compact('comment'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'content' => 'required|string',
        ]);


        $comment = Comment::findOrFail($id);

        if (Auth::user()->id !== $comment->user_id && Auth::user()->role->name !== 'admin') {
            return redirect()->back()->with('error', 'Unauthorized access.');
        }

        $comment->update([
            'content' => $request->content,
        ]);

        return redirect()->route('discussions.show', $comment->discussion_id)
            ->with('success', 'Comment updated successfully.');
    }
    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);

        if (Auth::user()->id !== $comment->user_id) {
            abort(403, 'Unauthorized action.');
        }

        $comment->delete();
        return redirect()->back()->with('success', 'Comment deleted successfully.');
    }
}
