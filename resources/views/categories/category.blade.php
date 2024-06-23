<x-app-layout>
    <x-slot name="header">
        CATEGORY
    </x-slot>
    <h1>Category Index</h1>
    <div class='category'>
        <h2 class='name'>
            <p>{{ $category->name }}</p>
        </h2>
        
        <h2 class='chats'>
            <a href="/categories/chat/{{ $category->id }}">{{ $category->name }}カテゴリのチャット一覧</a>
        </h2>
                
        <h2 class='blogs'>
            <a href="/categories/blog/{{ $category->id }}">{{ $category->name }}カテゴリのブログ一覧</a>
        </h2>
                
        <h2 class='boards'>
            <a href="/categories/board/{{ $category->id }}">{{ $category->name }}カテゴリの掲示板一覧</a>
        </h2>
    </div>
    <div class="footer">
        <a href="/categories">カテゴリ一覧に戻る</a>
    </div>
</x-app-layout>