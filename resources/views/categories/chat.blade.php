<x-app-layout>
    <x-slot name="header">
        CATEGORY
    </x-slot>
    <h1>Chat Category Test</h1>
    <a href='/chats/create'>create</a>
    <div class='chatrooms'>
        @foreach ($chatrooms as $chatroom)
            <div class='chatroom'>
                <h2 class='name'>
                    <a href="/chats/{{ $chatroom->id }}">{{ $chatroom->name }}</a>
                </h2>
                
                @foreach ($chatroom->categories as $chatroomCategory)
                    <a href="/categories/chat/{{ $chatroomCategory->id }}">{{ $chatroomCategory->name }}</a>
                @endforeach
                <p class='body'>{{ $chatroom->body }}</p>
            </div>
        @endforeach
    </div>
    <div class="footer">
        <a href="/chats">全体一覧に戻る</a>
    </div>
    <div class='paginate'>
        {{ $chatrooms->links() }}
    </div>
</x-app-layout>