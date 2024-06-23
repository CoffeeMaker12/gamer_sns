<x-app-layout>
    <x-slot name="header">
        FIND USER
    </x-slot>
    <h1>User Info</h1>
    <h1 class="name">
        {{ $user->name }}
    </h1>
    
    @foreach ($user->categories as $favoriteCategory)
      {{ $favoriteCategory->name }}
    @endforeach
    <div class="body">
        <div class="pr_body">
            <h3>プロフィール</h3>
            <p>{{ $user->pr_body }}</p>    
        </div>
    </div>
    <div class="footer">
        <a href="/finduser">戻る</a>
    </div>
</x-app-layout>