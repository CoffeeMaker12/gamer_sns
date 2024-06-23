<x-app-layout>
    <x-slot name="header">
        FIND USER
    </x-slot>
    <h1>Find User Search Result</h1>
    <div class="result">
      @if(isset($users))
      <table class="table">
        <tr>
          <th>ユーザー名</th><th>プロフィール</th><th>お気に入りカテゴリ</th>
        </tr>
        @foreach($users as $user)
          <tr>
            <td>{{$user->name}}</td><td>{{$user->pr_body}}</td>
            <td>
              @foreach ($user->categories as $userCategory)
                {{ $userCategory->name }}
              @endforeach
            </td>
          </tr>
        @endforeach
      </table>
      @endif
    </div>
    <div class="footer">
        <a href="/finduser">戻る</a>
    </div>
</x-app-layout>