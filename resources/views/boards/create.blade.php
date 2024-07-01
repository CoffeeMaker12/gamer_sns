<x-app-layout>
    <x-slot name="title">
        BOARD
    </x-slot>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            BOARD
        </h2>
    </x-slot>
    
    <h1 class="title font-semibold text-lg text-white bg-orange-900">掲示板新規作成</h1>
    
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg space-y-6">
                <div class="max-w-xl">
                    <form action="/boards" method="POST">
                        @csrf
                        <div class="boardtype">
                            <h2 class="font-semibold">掲示板タイプ登録</h2>
                            <select name="board[boardtype_id]">
                                @foreach($boardtypes as $boardtype)
                                    <option value="{{ $boardtype->id }}">{{ $boardtype->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="py-2"></div>
                        
                        <div class="title">
                            <h2 class="font-semibold">タイトル</h2>
                            <input type="text" name="board[title]" placeholder="タイトル" value="{{ old('board.title') }}"/>
                            <p class="title__error" style="color:red">{{ $errors->first('board.title') }}</p>
                        </div>
                        
                        <div class="py-2"></div>
                        
                        <div class="category">
                            <h2 class="font-semibold">カテゴリ登録</h2>
                            
                            @foreach ($categories as $category)
                                @if($board->categories->contains('id', $category->id))
                                    <input type="checkbox" name="board_category[]" value="{{ $category->id}}" checked>
                                @else
                                    <input type="checkbox" name="board_category[]" value="{{ $category->id}}">
                                @endif 
                                    <label for="">
                                        {{ $category->name }}
                                    </label>
                            @endforeach
                        </div>
                        
                        <div class="py-2"></div>
                        
                        <div class="body">
                            <h2 class="font-semibold">本文</h2>
                            <textarea name="board[body]" placeholder="今日も1日お疲れさまでした。">{{ old('board.body') }}</textarea>
                            <p class="body__error" style="color:red">{{ $errors->first('board.body') }}</p>
                        </div>
                        
                        <input type="submit" value="保存" class="hover:text-blue-500">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <a href="/boards" class="hover:text-blue-500">戻る</a>
    </div>
</x-app-layout>