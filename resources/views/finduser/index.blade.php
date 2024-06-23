<x-app-layout>
    <x-slot name="header">
        FIND USER
    </x-slot>
    <h1>Find User Test</h1>
    <form action="/finduser/search" method="POST">
        @csrf
        <div class="keyword">
            <label>キーワード</label>
            <input type="text" class="form-control col-md-5" placeholder="検索キーワードを入力してください" name="word">
        </div>
        
        <button type="submit" class="btn btn-primary col-md-5">検索</button>
    </form>
    
    <div style="margin-top:50px;">
    <h1>ユーザー一覧</h1>
    <table class="table">
      <tr>
        <th>ユーザー名</th><th>プロフィール</th><th>お気に入りカテゴリ</th>
      </tr>
    @foreach($users as $user)
      <tr>
        <td>
            <a href="/finduser/{{ $user->id }}">{{ $user->name }}</a>
        </td>
        <td>{{$user->pr_body}}</td>
        <td>
          @foreach ($user->categories as $userCategory)
            <a href="/categories/{{ $userCategory->id }}">{{ $userCategory->name }}</a>
          @endforeach
        </td>
      </tr>
    @endforeach
    </table>
</x-app-layout>