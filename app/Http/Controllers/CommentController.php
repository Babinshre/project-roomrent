<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Room;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, $id)
    {
        $data = Room::find($id);
        $comment = new Comment();
        $comment->comment = $request->comment;
        $comment->user_id = $request->user()->id;
        $comment->post_id = $id;
        $comment->save();
        return redirect()->back();
    }
}
