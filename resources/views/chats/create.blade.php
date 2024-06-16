<x-app-layout>
    <x-slot name="header">
        CHAT
    </x-slot>
    <h1>Chat Test</h1>
    <form action="/chats" method="POST">
        @csrf
        <div class="name">
            <h2>Chatroom Name</h2>
            <input type="text" name="chatroom[name]" placeholder="ルーム名" value="{{ old('chatroom.name') }}"/>
            <p class="title__error" style="color:red">{{ $errors->first('chatroom.name') }}</p>
        </div>
        <div class="category">
            <h2>Chatroom Category</h2>
            <select name="category_chatroom[category_id]">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <input type="submit" value="store"/>
    </form>
    <div class="footer">
        <a href="/chats">戻る</a>
    </div>
</x-app-layout>