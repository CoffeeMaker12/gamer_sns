<x-app-layout>
    <x-slot name="title">
        BOARD
    </x-slot>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            BOARD
        </h2>
    </x-slot>
    
    <h1 class="title font-semibold text-lg text-white bg-orange-900">コメント返信</h1>
    
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg space-y-6">
                <div class="max-w-xl">
                    <form action="/boards/{{ $board->id }}/{{ $comment->id }}" method="POST">
                        @csrf
                        <input type="hidden" name='board_id' value="{{$board->id}}">
                        <input type="hidden" name='board_comment_id' value="{{$comment->id}}">
                        <div class="form-group">
                            <textarea name="body" placeholder="返信">{{ old('body') }}</textarea>
                        </div>
                        <div class="form-group mt-4">
                        <button class="bg-blue-500 text-white hover:bg-blue-700">返信する</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> 
    
    <div class="footer">
        <a href="/boards/{{ $board->id }}/{{ $comment->id }}" class="hover:text-blue-500">戻る</a>
    </div>
</x-app-layout>