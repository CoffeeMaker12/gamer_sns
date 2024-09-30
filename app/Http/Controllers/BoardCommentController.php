<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Board;
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
    
    public function comment(Request $request, Board $board, BoardComment $boardComment)
    {
        return view('boards.comment')->with(['board' => $board, 'comment' => $boardComment]);
    }
    
    public function reply(Request $request, Board $board, BoardComment $boardComment)
    {
        return view('boards.reply')->with(['board' => $board, 'comment' => $boardComment]);
    }
    
    public function upreply(Request $request, Board $board, BoardComment $boardComment)
    {
        $inputs = request()->validate([
            'body' => 'required|max:300'
        ]);

        $input_reply = BoardComment::create([
            'body' => $inputs['body'],
            'user_id' => \Auth::id(),
            'board_id' => $request->board_id,
            'board_comment_id' => $request->board_comment_id,
        ]);

        return redirect('/boards/' . $request->board_id . '/' . $request->board_comment_id);
    }
}
