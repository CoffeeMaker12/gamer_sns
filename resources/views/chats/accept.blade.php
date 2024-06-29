<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            CHAT
        </h2>
    </x-slot>
    
    <h1>{{ $chatroom->name }}への参加申請を承認しました</h1>
    <div class="footer">
        <a href="/chats/{{ $chatroom->id }}">戻る</a>
    </div>
</x-app-layout>