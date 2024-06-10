<x-app-layout>
    <x-slot name="header">
        BLOG
    </x-slot>
    <h1>Blog Test</h1>
    <h1 class="title">編集画面</h1>
    <div class="content">
        <form action="/blogs/{{ $blog->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class='content__title'>
                <h2>タイトル</h2>
                <input type='text' name='blog[title]' value="{{ $blog->title }}">
                <p class="title__error" style="color:red">{{ $errors->first('blog.title') }}</p>
            </div>
            <div class='content__body'>
                <h2>本文</h2>
                <input type='text' name='blog[body]' value="{{ $blog->body }}">
                <p class="body__error" style="color:red">{{ $errors->first('blog.body') }}</p>
            </div>
            <input type="submit" value="保存">
        </form>
    </div>
</x-app-layout>