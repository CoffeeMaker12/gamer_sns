<x-app-layout>
    <x-slot name="title">
        FIND USER
    </x-slot>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            FIND USER
        </h2>
    </x-slot>
    <h1 class="font-semibold text-lg text-white bg-orange-900">ユーザーを探す</h1>
    
    <div class="py-2"></div>
    
    <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg space-y-6">
      <div class="max-w-xl">
        <form action="/finduser/search" method="POST">
            @csrf
            <div class="keyword">
                <label class="font-semibold">キーワード</label>
                <input type="text" class="form-control col-md-5" placeholder="キーワードを入力してください" name="word">
            </div>
            
            <button type="submit" class="btn btn-primary col-md-5 font-semibold bg-indigo-700 text-white hover:bg-indigo-900">検索</button>
        </form>
      </div>
    </div>
    
    <div style="margin-top:50px;">
    <h1 class="font-semibold">ユーザー一覧</h1>
    <table class="table">
      <tr>
        <th class="border border-black font-semibold text-white bg-orange-800">ユーザー名</th>
        <th class="border border-black font-semibold text-white bg-orange-800">プロフィール</th>
        <th class="border border-black font-semibold text-white bg-orange-800">お気に入りカテゴリ</th>
      </tr>
    @foreach($users as $user)
      <tr>
        <td class="border border-black bg-white">
            <a href="/finduser/{{ $user->id }}" class="hover:text-blue-500">{{ $user->name }}</a>
        </td>
        <td class="border border-black bg-white">{{$user->pr_body}}</td>
        <td class="border border-black bg-white">
          @foreach ($user->categories as $userCategory)
            <a href="/categories/{{ $userCategory->id }}" class="hover:text-blue-500">{{ $userCategory->name }}</a>
          @endforeach
        </td>
      </tr>
    @endforeach
    </table>
</x-app-layout>