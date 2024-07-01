<x-app-layout>
    <x-slot name="title">
        CHAT
    </x-slot>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            CHAT
        </h2>
    </x-slot>
    
    <h1 class="font-semibold text-lg text-white bg-orange-900">{{ $chatroom->name }}への参加申請を承認しました</h1>
    <div class="footer">
        <a href="/chats/{{ $chatroom->id }}" class="hover:text-blue-500">戻る</a>
    </div>
</x-app-layout>