<x-app-layout>
    <x-slot name="title">
        BOARD
    </x-slot>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            BOARD
        </h2>
    </x-slot>
    
    <h1 class="title font-semibold text-lg text-white bg-orange-900">コメント</h1>
    
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg space-y-6">
                <div class="max-w-xl">
                    
                    <div class="card mb-4">
                        <div class="card-header">
                            ユーザー名：{{ $comment->user->name }}
                        </div>
                        <div class="card-body">
                            本文：{{ $comment->body }}
                        </div>
                        
                        <a href="/boards/{{ $board->id }}/{{ $comment->id }}/reply" class="hover:text-blue-500">返信する</a>
                    </div>
                    
                    <h1 class="title text-lg">返信一覧</h1>
                    
                    @foreach ($board->board_comments as $reply)
                        @if($reply->board_comment_id == $comment->id)
                            <div class="card mb-4">
                                <div class="card-header">
                                    ユーザー名：{{ $reply->user->name }}
                                </div>
                                <div class="card-body">
                                    本文：{{ $reply->body }}
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div> 
            </div> 
        </div> 
    </div> 
    
    <div class="footer">
        <a href="/boards/{{ $board->id }}" class="hover:text-blue-500">戻る</a>
    </div>
</x-app-layout>