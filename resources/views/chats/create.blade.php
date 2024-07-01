<x-app-layout>
    <x-slot name="title">
        CHAT
    </x-slot>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            CHAT
        </h2>
    </x-slot>
    <h1 class="font-semibold text-lg text-white bg-orange-900">ルーム新規作成</h1>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg space-y-6">
                <div class="max-w-xl">
                    <form action="/chats" method="POST">
                        @csrf
                        <div class="name">
                            <h2 class="font-semibold">ルーム名</h2>
                            <input type="text" name="chatroom[name]" placeholder="ルーム名" value="{{ old('chatroom.name') }}"/>
                            <p class="title__error" style="color:red">{{ $errors->first('chatroom.name') }}</p>
                        </div>
                        <div class="py-2"></div>
                        <div class="category">
                            <h2 class="font-semibold">カテゴリ登録</h2>
                            
                            @foreach ($categories as $category)
                                @if($chatroom->categories->contains('id', $category->id))
                                    <input type="checkbox" name="chatroom_category[]" value="{{ $category->id}}" checked>
                                @else
                                    <input type="checkbox" name="chatroom_category[]" value="{{ $category->id}}">
                                @endif 
                                    <label for="">
                                        {{ $category->name }}
                                    </label>
                            @endforeach
                        </div>
                        <input type="submit" value="保存" class="hover:text-blue-500"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <a href="/chats" class="hover:text-blue-500">戻る</a>
    </div>
</x-app-layout>