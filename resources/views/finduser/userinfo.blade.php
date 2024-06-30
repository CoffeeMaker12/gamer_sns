<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            FIND USER
        </h2>
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