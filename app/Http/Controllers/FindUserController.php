<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class FindUserController extends Controller
{
    public function index(Request $request)
    {
        
        $users = User::paginate(10);  //全ユーザーを1ページ10人単位で表示
        
        return view('finduser.index')->with('users', $users);
    }
    
    public function search(Request $request)
    {
        $word = $request->input('word');
        
        if (empty($word)) {
            $users = User::paginate(10);
        } else {
        
            $query = User::query();
            $query->where(function($q) use($word){
                $q->where('name', 'LIKE', '%'.$word.'%')
                       ->orwhere('pr_body', 'LIKE', '%'.$word.'%');
            });
            $users = $query->paginate(10); //検索結果のユーザーを1ページ10人単位で表示
        }
        
        return view('finduser.search')->with('users', $users);
    }
    
    public function userInfo(User $user)
	{
	    return view('finduser.userinfo')->with(['user' => $user]);
	}
}
