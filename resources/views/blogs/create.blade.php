<x-app-layout>
    <x-slot name="title">
        BLOG
    </x-slot>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            BLOG
        </h2>
    </x-slot>
    
    <h1 class="title font-semibold text-lg text-white bg-orange-900">ブログ新規作成</h1>
    
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg space-y-6">
                <div class="max-w-xl">
                    <form action="/blogs" method="POST">
                        @csrf
                        <div class="title">
                            <h2 class="font-semibold">タイトル</h2>
                            <input type="text" name="blog[title]" placeholder="タイトル" value="{{ old('blog.title') }}"/>
                            <p class="title__error" style="color:red">{{ $errors->first('blog.title') }}</p>
                        </div>
                        
                        <div class="py-2"></div>
                        
                        <div class="category">
                            <h2 class="font-semibold">カテゴリ登録</h2>
                            @foreach ($categories as $category)
                                @if($blog->categories->contains('id', $category->id))
                                    <input type="checkbox" name="blog_category[]" value="{{ $category->id}}" checked>
                                @else
                                    <input type="checkbox" name="blog_category[]" value="{{ $category->id}}">
                                @endif 
                                <label for="">
                                    {{ $category->name }}
                                </label>
                            @endforeach
                        </div>
                        
                        <div class="py-2"></div>
                        
                        <div class="body">
                            <h2 class="font-semibold">本文</h2>
                            <textarea name="blog[body]" placeholder="今日も1日お疲れさまでした。">{{ old('blog.body') }}</textarea>
                            <p class="body__error" style="color:red">{{ $errors->first('blog.body') }}</p>
                        </div>
                        
                        <input type="submit" value="保存" class="hover:text-blue-500">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <a href="/blogs" class="hover:text-blue-500">戻る</a>
    </div>
</x-app-layout>