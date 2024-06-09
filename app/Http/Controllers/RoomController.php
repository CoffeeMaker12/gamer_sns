<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /*
    public function index(Room $room)
    {
        return view('chats.index')->with(['rooms' => $room->get()]);  
    }
    */
    
    public function matchUser(User $user)
    {
        return view('chats.index')->with(['users' => $user->get()]);  
    }
}
