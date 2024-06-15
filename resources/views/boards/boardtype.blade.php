<x-app-layout>
    <x-slot name="header">
        BOARD
    </x-slot>
    <h1>Board Test</h1>
    <a href='/boards/create'>create</a>
    <div class='boards'>
        @foreach ($boards as $board)
            <div class='board'>
                <h2 class='boardtype'>
                    <a href="/boards/type/{{ $board->boardtype->id }}">{{ $board->boardtype->name }}</a>
                </h2>
                
                <h2 class='title'>
                    <a href="/boards/{{ $board->id }}">{{ $board->title }}</a>
                </h2>
                
                @foreach ($board->categories as $boardCategory)
                    <a href="/categories/board/{{ $boardCategory->id }}">{{ $boardCategory->name }}</a>
                @endforeach
                <p class='body'>{{ $board->body }}</p>
            </div>
            @if (Auth::user()->id == $board->user_id)
                <form action="/boards/{{ $board->id }}" id="form_{{ $board->id }}" method="post">
                @csrf
                @method('DELETE')
                <button type="button" onclick="deletePost({{ $board->id }})">delete</button> 
                </form>
            @endif
        @endforeach
    </div>
    <div class='paginate'>
        {{ $boards->links() }}
    </div>
    <script>
        function deletePost(id) {
            'use strict'
    
            if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                document.getElementById(`form_${id}`).submit();
            }
        }
    </script>
    <div class='authinfo'>
        {{ Auth::user()->name }}
    </div>
</x-app-layout>