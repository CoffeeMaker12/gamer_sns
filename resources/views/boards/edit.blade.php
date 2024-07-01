<x-app-layout>
    <x-slot name="title">
        BOARD
    </x-slot>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            BOARD
        </h2>
    </x-slot>
    
    <h1 class="title font-semibold text-lg text-white bg-orange-900">{{ $board->title }}の編集</h1>
    
    <div class="content">
        <div class="py-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg space-y-6">
                    <div class="max-w-xl">
                        <form action="/boards/{{ $board->id }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class='content__title'>
                                <h2 class="font-semibold">タイトル</h2>
                                <input type='text' name='board[title]' value="{{ $board->title }}">
                                <p class="title__error" style="color:red">{{ $errors->first('board.title') }}</p>
                            </div>
                            
                            <div class="py-2"></div>
                            
                            <div class='content__body'>
                                <h2 class="font-semibold">本文</h2>
                                <input type='text' name='board[body]' value="{{ $board->body }}">
                                <p class="body__error" style="color:red">{{ $errors->first('board.body') }}</p>
                            </div>
                            
                            <div class="py-2"></div>
                            
                            <input type="submit" value="保存" class="hover:text-blue-500">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>