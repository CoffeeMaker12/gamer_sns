<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            CHAT
        </h2>
    </x-slot>

    <h1>{{$chatroom->name}}への参加申請</h1>
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
            <p>あなたはこのチャットに申請済みです</p>
        @else
            <form action="/chats/{{ $chatroom->id }}/offer" method="POST">
                @csrf
                <button type="submit" value="{{ Auth::user()->id }}" class="bg.color=green">申請を送る（参加する）</button>
            </form>
        @endif
    </div>
    <div class="footer">
        <a href="/chats">戻る</a>
    </div>
</x-app-layout>