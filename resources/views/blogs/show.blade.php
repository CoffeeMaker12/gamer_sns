<x-app-layout>
    <x-slot name="title">
        BLOG
    </x-slot>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            BLOG
        </h2>
    </x-slot>
    
    <h1 class="title font-semibold text-lg text-white bg-orange-900">{{ $blog->title }}</h1>
    
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg space-y-6">
                <div class="max-w-xl">
                    @foreach ($blog->categories as $blogCategory)
                        <a href="/categories/blog/{{ $blogCategory->id }}" class="hover:text-blue-500">
                            {{ $blogCategory->name }}
                        </a>
                    @endforeach
                    
                    <div class="py-2"></div>
                    
                    <div class="content">
                        <div class="content__blog">
                            <h3 class="font-semibold">本文</h3>
                            <p>{{ $blog->body }}</p>    
                        </div>
                    </div>
                    @if (Auth::user()->id == $blog->user_id)
                        <div class="py-2"></div>
                        
                        <div class="edit">
                            <div class="edit"><a href="/blogs/{{ $blog->id }}/edit" class="hover:text-blue-500">編集</a></div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg space-y-6">
                <div class="max-w-xl">
                    @foreach ($blog->blog_comments as $comment)
                        @if ($comment->blog_comment_id == NULL)
                            <div class="card mb-4">
                                <div class="card-header">
                                    ユーザー名：{{ $comment->user->name }}
                                </div>
                                <div class="card-body">
                                    本文：{{ $comment->body }}
                                </div>
                                <a href="/blogs/{{ $blog->id }}/{{ $comment->id }}" class="hover:text-blue-500">詳細を見る</a>
                            </div>
                        @endif
                    @endforeach
                </div> 
            </div> 
        </div> 
    </div> 
    
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg space-y-6">
                <div class="max-w-xl">
                    <form action="/blogs/{{ $blog->id }}" method="POST">
                        @csrf
                        <input type="hidden" name='blog_id' value="{{$blog->id}}">
                        <div class="form-group">
                            <textarea name="body" placeholder="コメント">{{ old('body') }}</textarea>
                        </div>
                        <div class="form-group mt-4">
                        <button class="bg-blue-500 text-white hover:bg-blue-700">コメントする</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> 
    
    <div class="footer">
        <a href="/blogs" class="hover:text-blue-500">戻る</a>
    </div>
</x-app-layout>