<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BoardComment;

class BoardCommentController extends Controller
{
    public function store(Request $request, BoardComment $boardComment)
    {
        $inputs = request()->validate([
            'body' => 'required|max:300'
        ]);

        $input_comment = BoardComment::create([
            'body' => $inputs['body'],
            'user_id' => \Auth::id(),
            'board_id' => $request->board_id,
        ]);

        return redirect('/boards/' . $request->board_id);
    }
}
