<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Boardtype;

class BoardtypeController extends Controller
{
    public function index(Boardtype $boardtype)
    {
        return view('boards.boardtype')->with(['boards' => $boardtype->getByBoardtype()]);
    }
    
}
