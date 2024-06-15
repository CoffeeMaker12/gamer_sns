<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Board;
use App\Models\Category;
use App\Models\BoardCategory;
use App\Models\Boardtype;

class BoardController extends Controller
{
    public function index(Board $board)
	{
	    return view('boards.index')->with(['boards' => $board->getPaginateByLimit()]);
	    //getPaginateByLimit()はBoard.phpで定義したメソッド
	} 
	
	public function show(Board $board)
	{
	    return view('boards.show')->with(['board' => $board]);
	}
	
	public function create(Category $category)
	{
	    return view('boards.create')->with(['categories' => $category->get()]);
	}
	
	public function store(BoardRequest $request, Board $board, BoardCategory $boardCategory)
	{
	    $input = $request['board'];
	    $input2 = $request['board_category'];
	    $board->user_id = \Auth::id();
	    $board->fill($input)->save();
	    $boardCategory->board_id = $board->id;
	    $boardCategory->fill($input2)->save();
	    return redirect('/boards/' . $board->id);
	}
	
	public function edit(Board $board)
	{
	    return view('boards.edit')->with(['board' => $board]);
	}
	
	public function update(BoardRequest $request, Board $board)
	{
	    $input_board = $request['board'];
	    $board->fill($input_board)->save();
	
	    return redirect('/boards/' . $board->id);
	}
	
	public function delete(Board $board)
	{
	    $board->delete();
	    return redirect('/boards');
	}
}
