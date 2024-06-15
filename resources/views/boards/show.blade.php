<x-app-layout>
    <x-slot name="header">
        BOARD
    </x-slot>
    <h1>Board Test</h1>
    <h1 class="title">
        {{ $board->title }}
    </h1>
    <h2 class='boardtype'>
        <a href="/boards/type/{{ $board->boardtype->id }}">{{ $board->boardtype->name }}</a>
    </h2>
    
    @foreach ($board->categories as $boardCategory)
        <a href="/categories/board/{{ $boardCategory->id }}">{{ $boardCategory->name }}</a>
    @endforeach
    <div class="content">
        <div class="content__board">
            <h3>本文</h3>
            <p>{{ $board->body }}</p>    
        </div>
    </div>
    @if (Auth::user()->id == $board->user_id)
        <div class="edit">
            <div class="edit"><a href="/boards/{{ $board->id }}/edit">edit</a></div>
        </div>
    @endif
    <div class="footer">
        <a href="/boards">戻る</a>
    </div>
</x-app-layout>