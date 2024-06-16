<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ChatroomRequest;
use App\Library\Chat;
use App\Models\Chatroom;
use App\Models\CategoryChatroom;
use App\Models\Message;
use App\Models\User;
use App\Events\MessageSent;

class ChatroomController extends Controller
{
    public function index(Chatroom $chatroom)
	{
	    return view('chats.index')->with(['chatrooms' => $chatroom->getPaginateByLimit()]);
	    //getPaginateByLimit()はChatroom.phpで定義したメソッド
	}
	
	public function show(Chatroom $chatroom)
	{
	    return view('chats.chat')->with(['chatroom' => $chatroom]);
	}
	
	public function create(Category $category)
	{
	    return view('chats.create')->with(['categories' => $category->get()]);
	}
	
	public function store(ChatroomRequest $request, Chatroom $chatroom, CategoryChatroom $categoryChatroom)
	{
	    $input = $request['chatroom'];
	    $input2 = $request['category_chatroom'];
	    $chatroom->owner_id = \Auth::id();
	    $chatroom->fill($input)->save();
	    $categoryChatroom->chatroom_id = $chatroom->id;
	    $categoryChatroom->fill($input2)->save();
	    return redirect('/chats/' . $chatroom->id);
	}
	
	public function sendMessage(Message $message, Request $request,)
    {
        // auth()->user() : 現在認証しているユーザーを取得
        $user = auth()->user();
        $strUserId = $user->id;
        $strUsername = $user->name;

        // リクエストからデータの取り出し
        $strMessage = $request->input('message');

        // メッセージオブジェクトの作成
        $chat = new Chat;
        $chat->body = $strMessage;
        $chat->chat_id = $request->input('chat_id');

        $chat->userName = $strUsername;
        MessageSent::dispatch($chat);    

        //データベースへの保存処理
        $message->user_id = $strUserId;
        $message->body = $strMessage;
        $message->id = $request->input('chat_id');
        $message->save();

        return response()->json(['message' => 'Message sent successfully']);
    }
}
