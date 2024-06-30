<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            CATEGORY
        </h2>
    </x-slot>
    
    <h1 class="font-semibold text-lg text-white bg-orange-900">チャットルーム一覧</h1>
    
    <div class="py-6">
        <button type=“button” onclick="location.href='/chats/create'" class="font-semibold bg-indigo-700 text-white hover:bg-indigo-900"> 新規作成 </button>
    </div>
    
    
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class='chatrooms'>
            @foreach ($chatrooms as $chatroom)
                <div class='chatroom'>
                    <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg space-y-6">
                        <div class="max-w-xl">
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
                                <a href="/chats/{{ $chatroom->id }}" class="hover:text-blue-500">{{ $chatroom->name }}を開く</a>
                            </h2>
                        @else
                            <h2 class='notJoined'>
                                <a href="/chats/{{ $chatroom->id }}/offer" class="hover:text-blue-500">{{ $chatroom->name }}に参加を申請</a>
                            </h2>
                        @endif
                        
                        <div class="py-2"></div>
                        
                        @foreach ($chatroom->categories as $chatroomCategory)
                            <a href="/categories/chat/{{ $chatroomCategory->id }}" class="hover:text-blue-500">{{ $chatroomCategory->name }}</a>
                        @endforeach
                        <p class='body'>{{ $chatroom->body }}</p>
                        </div>
                    </div>
                    <div class="py-1"></div>
                </div>
            @endforeach
        </div>
    </div>
    <div class='paginate'>
        {{ $chatrooms->links() }}
    </div>
    <div class="footer">
        <a href="/chats" class="hover:text-blue-500">全体一覧に戻る</a>
    </div>
</x-app-layout>