<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            BLOG
        </h2>
    </x-slot>
    
    <h1 class="font-semibold text-lg text-white bg-orange-900">ブログ一覧</h1>
    
    <div class="py-6">
        <button type=“button” onclick="location.href='/blogs/create'" class="font-semibold bg-indigo-700 text-white hover:bg-indigo-900">
             新規作成 
        </button>
    </div>
    
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class='blogs'>
            @foreach ($blogs as $blog)
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg space-y-6">
                    <div class="max-w-xl">
                        <div class='blog'>
                            <h2 class='title'>
                                <a href="/blogs/{{ $blog->id }}" class="hover:text-blue-500">{{ $blog->title }}を開く</a>
                            </h2>
                            
                            <div class="py-2"></div>
                            
                            @foreach ($blog->categories as $blogCategory)
                                <a href="/categories/blog/{{ $blogCategory->id }}" class="hover:text-blue-500">
                                    {{ $blogCategory->name }}
                                </a>
                            @endforeach
                            
                            <div class="py-2"></div>
                            
                            <p class='body'>{{ $blog->body }}</p>
                        </div>
                        @if (Auth::user()->id == $blog->user_id)
                            <div class="py-2"></div>
                            
                            <form action="/blogs/{{ $blog->id }}" id="form_{{ $blog->id }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="button" onclick="deletePost({{ $blog->id }})" class="text-white bg-red-500 hover:bg-red-700">
                                    削除
                                </button> 
                            </form>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $blogs->links() }}
        </div>
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