<x-app-layout>
    <x-slot name="header">
        CHAT
    </x-slot>
    <h1>Chat Test</h1>
        <!-- 招待制 自分のidを書いて入るみたいな -->
        <a href="/chats/{{ $post->user->id }}">{{ $post->user->name }}とチャットする</a>
</x-app-layout>