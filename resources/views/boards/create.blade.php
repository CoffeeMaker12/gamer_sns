<x-app-layout>
    <x-slot name="header">
        BOARD
    </x-slot>
    <h1>Board Test</h1>
    <form action="/boards" method="POST">
        @csrf
        <div class="boardtype">
            <h2>Blog Category</h2>
            <select name="board[boardtype_id]">
                @foreach($boardtypes as $boardtype)
                    <option value="{{ $boardtype->id }}">{{ $boardtype->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="title">
            <h2>Title</h2>
            <input type="text" name="board[title]" placeholder="タイトル" value="{{ old('board.title') }}"/>
            <p class="title__error" style="color:red">{{ $errors->first('board.title') }}</p>
        </div>
        <div class="category">
            <h2>Blog Category</h2>
            <select name="board_category[category_id]">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="body">
            <h2>Body</h2>
            <textarea name="board[body]" placeholder="今日も1日お疲れさまでした。">{{ old('board.body') }}</textarea>
            <p class="body__error" style="color:red">{{ $errors->first('board.body') }}</p>
        </div>
        <input type="submit" value="store"/>
    </form>
    <div class="footer">
        <a href="/boards">戻る</a>
    </div>
</x-app-layout>