<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\Blog;
use App\Models\Board;

class HomeController extends Controller
{
    public function home()
    {
        return view('home.index');
    }
    
    public function chat()
    {
        return view('chat.index');
    }
    
    public function blog()
    {
        return view('blog.index');
    }
    
    public function board()
    {
        return view('board.index');
    }
    
    public function finduser()
    {
        return view('finduser.index');
    }
    
    public function mypage()
    {
        return view('mypage.index');
    }
}
