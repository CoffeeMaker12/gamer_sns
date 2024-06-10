<x-app-layout>
    <x-slot name="header">
        BLOG
    </x-slot>
    <h1>Blog Test</h1>
    <form action="/blogs" method="POST">
        @csrf
        <div class="title">
            <h2>Title</h2>
            <input type="text" name="blog[title]" placeholder="タイトル" value="{{ old('blog.title') }}"/>
            <p class="title__error" style="color:red">{{ $errors->first('blog.title') }}</p>
        </div>
        <!--
        <div class="category">
            <h2>Category</h2>
            <select name="blog[category_id]">
                
            </select>
        </div>
        -->
        <div class="body">
            <h2>Body</h2>
            <textarea name="blog[body]" placeholder="今日も1日お疲れさまでした。">{{ old('blog.body') }}</textarea>
            <p class="body__error" style="color:red">{{ $errors->first('blog.body') }}</p>
        </div>
        <input type="submit" value="store"/>
    </form>
    <div class="footer">
        <a href="/blogs">戻る</a>
    </div>
</x-app-layout>