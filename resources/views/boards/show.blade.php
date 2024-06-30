<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            BOARD
        </h2>
    </x-slot>
    
    <h1 class="title font-semibold text-lg text-white bg-orange-900">{{ $board->title }}</h1>
    
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg space-y-6">
                <div class="max-w-xl">
                    <h1 class="title font-semibold">
                        {{ $board->title }}
                    </h1>
                    
                    <div class="py-2"></div>
                    
                    <h2 class='boardtype'>
                        <h3 class="font-semibold">掲示板タイプ</h3>
                        <a href="/boards/type/{{ $board->boardtype->id }}" class="hover:text-blue-500">
                            {{ $board->boardtype->name }}
                        </a>
                    </h2>
                    
                    <div class="py-2"></div>
                    
                    @foreach ($board->categories as $boardCategory)
                        <a href="/categories/board/{{ $boardCategory->id }}" class="hover:text-blue-500">
                            {{ $boardCategory->name }}
                        </a>
                    @endforeach
                    
                    <div class="py-2"></div>
                    
                    <div class="content">
                        <div class="content__board">
                            <h3 class="font-semibold">本文</h3>
                            <p>{{ $board->body }}</p>    
                        </div>
                    </div>
                    
                    @if (Auth::user()->id == $board->user_id)
                        <div class="py-2"></div>
                        
                        <div class="edit">
                            <div class="edit"><a href="/boards/{{ $board->id }}/edit" class="hover:text-blue-500">編集</a></div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <a href="/boards" class="hover:text-blue-500">戻る</a>
    </div>
</x-app-layout>