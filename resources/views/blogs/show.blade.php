<x-app-layout>
    <x-slot name="header">
        BLOG
    </x-slot>
    <h1>Blog Test</h1>
    <h1 class="title">
        {{ $blog->title }}
    </h1>
    @foreach ($blog->categories as $blogCategory)
        <a href="/categories/blog/{{ $blogCategory->id }}">{{ $blogCategory->name }}</a>
    @endforeach
    <div class="content">
        <div class="content__blog">
            <h3>本文</h3>
            <p>{{ $blog->body }}</p>    
        </div>
    </div>
    @if (Auth::user()->id == $blog->user_id)
        <div class="edit">
            <div class="edit"><a href="/blogs/{{ $blog->id }}/edit">edit</a></div>
        </div>
    @endif
    <div class="footer">
        <a href="/blogs">戻る</a>
    </div>
</x-app-layout>