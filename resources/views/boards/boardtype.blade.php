<x-app-layout>
    <x-slot name="title">
        BOARD
    </x-slot>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            BOARD
        </h2>
    </x-slot>
    
    <h1 class="font-semibold text-lg text-white bg-orange-900">掲示板一覧</h1>
    
    <div class="py-6">
        <button type=“button” onclick="location.href='/boards/create'" class="font-semibold bg-indigo-700 text-white hover:bg-indigo-900">
             新規作成 
        </button>
    </div>
    
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class='boards'>
            @foreach ($boards as $board)
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg space-y-6">
                    <div class="max-w-xl">
                        <div class='board'>
                            <h2 class='boardtype'>
                                <a href="/boards/type/{{ $board->boardtype->id }}" class="hover:text-blue-500">
                                    {{ $board->boardtype->name }}
                                </a>
                            </h2>
                            
                            <div class="py-2"></div>
                            
                            <h2 class='title'>
                                <a href="/boards/{{ $board->id }}" class="hover:text-blue-500">
                                    {{ $board->title }}を開く
                                </a>
                            </h2>
                            
                            <div class="py-2"></div>
                            
                            @foreach ($board->categories as $boardCategory)
                                <a href="/categories/board/{{ $boardCategory->id }}" class="hover:text-blue-500">
                                    {{ $boardCategory->name }}
                                </a>
                            @endforeach
                            
                            <div class="py-2"></div>
                            
                            <p class='body'>{{ $board->body }}</p>
                        </div>
                        @if (Auth::user()->id == $board->user_id)
                            <div class="py-2"></div>
                            <form action="/boards/{{ $board->id }}" id="form_{{ $board->id }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="button" onclick="deletePost({{ $board->id }})" class="text-white bg-red-500 hover:bg-red-700">
                                    削除
                                </button> 
                            </form>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
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
    <div class="footer">
        <a href="/boards">全体一覧に戻る</a>
    </div>
</x-app-layout>