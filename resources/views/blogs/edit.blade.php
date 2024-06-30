<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            BLOG
        </h2>
    </x-slot>
    
    <h1 class="title font-semibold text-lg text-white bg-orange-900">{{ $blog->title }}の編集</h1>
    
    <div class="content">
        <div class="py-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg space-y-6">
                    <div class="max-w-xl">
                        <form action="/blogs/{{ $blog->id }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class='content__title'>
                                <h2 class="font-semibold">タイトル</h2>
                                <input type='text' name='blog[title]' value="{{ $blog->title }}">
                                <p class="title__error" style="color:red">{{ $errors->first('blog.title') }}</p>
                            </div>
                            
                            <div class="py-2"></div>
                            
                            <div class='content__body'>
                                <h2 class="font-semibold">本文</h2>
                                <input type='text' name='blog[body]' value="{{ $blog->body }}">
                                <p class="body__error" style="color:red">{{ $errors->first('blog.body') }}</p>
                            </div>
                            
                            <div class="py-2"></div>
                            
                            <input type="submit" value="保存" class="hover:text-blue-500">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>