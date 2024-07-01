<x-app-layout>
    <x-slot name="title">
        FIND USER
    </x-slot>
  
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            FIND USER
        </h2>
    </x-slot>
    <h1 class="font-semibold text-lg text-white bg-orange-900">ユーザー検索結果</h1>
    
    <div class="py-2"></div>
    
    <div class="result">
      @if(isset($users))
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
            <td class="border border-black bg-white">
              {{$user->pr_body}}
            </td>
            <td class="border border-black bg-white">
              @foreach ($user->categories as $userCategory)
                <a href="/categories/{{ $userCategory->id }}" class="hover:text-blue-500">{{ $userCategory->name }}</a>
              @endforeach
            </td>
          </tr>
        @endforeach
      </table>
      @endif
    </div>
    <div class="footer">
        <a href="/finduser" class="hover:text-blue-500">戻る</a>
    </div>
</x-app-layout>