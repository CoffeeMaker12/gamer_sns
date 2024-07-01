<x-app-layout>
    <x-slot name="title">
        CHAT
    </x-slot>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            CHAT
        </h2>
    </x-slot>

    <h1 class="font-semibold text-lg text-white bg-orange-900">{{$chatroom->name}}への参加申請</h1>
    <div class='chatroom'>
        <?php
            $exists = false;
            foreach($chatroom->offers as $chatoffer){
                if($chatoffer->id == \Auth::id()){
                    $exists = true;
                }
            }
        ?>
        @if ($exists)
            <p class="font-semibold text-red-500">あなたは{{ $chatroom->name }}に申請しました</p>
        @else
            <form action="/chats/{{ $chatroom->id }}/offer" method="POST">
                @csrf
                <button type="submit" value="{{ Auth::user()->id }}" class="text-white bg-green-600 hover:bg-green-800">申請を送る</button>
            </form>
        @endif
    </div>
    <div class="footer">
        <a href="/chats" class="hover:text-blue-500">戻る</a>
    </div>
</x-app-layout>