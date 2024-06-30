<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            CATEGORY
        </h2>
    </x-slot>
    
    <h1 class="font-semibold text-lg text-white bg-orange-900">カテゴリ一覧</h1>
    
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class='categories'>
            @foreach ($categories as $category)
                <div class='category'>
                    <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg space-y-6">
                        <div class="max-w-xl">
                            <h2 class='name'>
                                <p class="font-semibold">{{ $category->name }}</p>
                            </h2>
                            
                            <div class="py-2"></div>
                            
                            <h2 class='chats'>
                                <a href="/categories/chat/{{ $category->id }}" class="hover:text-blue-500">{{ $category->name }}カテゴリのチャット一覧</a>
                            </h2>
                            
                            <div class="py-2"></div>
                                    
                            <h2 class='blogs'>
                                <a href="/categories/blog/{{ $category->id }}" class="hover:text-blue-500">{{ $category->name }}カテゴリのブログ一覧</a>
                            </h2>
                            
                            <div class="py-2"></div>
                                    
                            <h2 class='boards'>
                                <a href="/categories/board/{{ $category->id }}" class="hover:text-blue-500">{{ $category->name }}カテゴリの掲示板一覧</a>
                            </h2>
                        </div>
                    </div>
                    <div class="py-1"></div>
                </div>
            @endforeach
            <div class='paginate'>
                {{ $categories->links() }}
            </div>
        </div>
    </div>
</x-app-layout>