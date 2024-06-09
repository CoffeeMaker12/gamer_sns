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
    
    public function chats()
    {
        return view('chats.index');
    }
    
    public function blogs()
    {
        return view('blogs.index');
    }
    
    public function boards()
    {
        return view('boards.index');
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
