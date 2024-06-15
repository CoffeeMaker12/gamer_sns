<x-app-layout>
    <x-slot name="header">
        CATEGORY
    </x-slot>
    <h1>Blog Category Test</h1>
    <a href='/blogs/create'>create</a>
    <div class='blogs'>
        @foreach ($blogs as $blog)
            <div class='blog'>
                <h2 class='title'>
                    <a href="/blogs/{{ $blog->id }}">{{ $blog->title }}</a>
                </h2>
                
                @foreach ($blog->categories as $blogCategory)
                    <a href="/categories/blog/{{ $blogCategory->id }}">{{ $blogCategory->name }}</a>
                @endforeach
                <p class='body'>{{ $blog->body }}</p>
            </div>
            @if (Auth::user()->id == $blog->user_id)
                <form action="/blogs/{{ $blog->id }}" id="form_{{ $blog->id }}" method="post">
                @csrf
                @method('DELETE')
                <button type="button" onclick="deletePost({{ $blog->id }})">delete</button> 
                </form>
            @endif
        @endforeach
    </div>
    <div class='paginate'>
        {{ $blogs->links() }}
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