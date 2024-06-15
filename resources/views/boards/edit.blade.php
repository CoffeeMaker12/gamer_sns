<x-app-layout>
    <x-slot name="header">
        BOARD
    </x-slot>
    <h1>Board Test</h1>
    <h1 class="title">編集画面</h1>
    <div class="content">
        <form action="/boards/{{ $board->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class='content__title'>
                <h2>タイトル</h2>
                <input type='text' name='board[title]' value="{{ $board->title }}">
                <p class="title__error" style="color:red">{{ $errors->first('board.title') }}</p>
            </div>
            <div class='content__body'>
                <h2>本文</h2>
                <input type='text' name='board[body]' value="{{ $board->body }}">
                <p class="body__error" style="color:red">{{ $errors->first('board.body') }}</p>
            </div>
            <input type="submit" value="保存">
        </form>
    </div>
</x-app-layout>