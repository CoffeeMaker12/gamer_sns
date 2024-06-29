<x-app-layout>
    <x-slot name="header">
        CHAT
    </x-slot>
    <h1>Chat Test</h1>
        <!-- 招待制 自分のidを書いて入るみたいな -->
    <a href='/chats/create'>create</a>
    <div class='chatrooms'>
        @foreach ($chatrooms as $chatroom)
            <div class='chatroom'>
                <?php
                    $exists = false;
            	    foreach($chatroom->users as $chatroomUser){
            	        if($chatroomUser->id == \Auth::id()){
            	            $exists = true;
            	        }
            	    }
                ?>
                @if ($exists)
                    <h2 class='joinedChatroom'>
                        <a href="/chats/{{ $chatroom->id }}">{{ $chatroom->name }}を開く</a>
                    </h2>
                @else
                    <h2 class='notJoined'>
                        <a href="/chats/{{ $chatroom->id }}/offer">{{ $chatroom->name }}に参加を申請</a>
                    </h2>
                @endif
                
                @foreach ($chatroom->categories as $chatroomCategory)
                    <a href="/categories/chat/{{ $chatroomCategory->id }}">{{ $chatroomCategory->name }}</a>
                @endforeach
                <p class='body'>{{ $chatroom->body }}</p>
            </div>
        @endforeach
    </div>
    <div class='paginate'>
        {{ $chatrooms->links() }}
    </div>
</x-app-layout>