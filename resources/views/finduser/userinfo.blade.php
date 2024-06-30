<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            FIND USER
        </h2>
    </x-slot>
    
    <h1 class="font-semibold text-lg text-white bg-orange-900">{{ $user->name }}の詳細情報</h1>
    
    <div class="py-2"></div>
    
    <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg space-y-6">
      <div class="max-w-xl">
        <h3 class="font-semibold">登録カテゴリ</h3>
        @foreach ($user->categories as $favoriteCategory)
          <a href="/categories/{{ $favoriteCategory->id }}" class="hover:text-blue-500">{{ $favoriteCategory->name }}</a>
        @endforeach
        
        <div class="py-2"></div>
        
        <div class="body">
            <div class="pr_body">
                <h3 class="font-semibold">プロフィール</h3>
                <p>{{ $user->pr_body }}</p>    
            </div>
        </div>
      </div>
    </div>
    <div class="footer">
        <a href="/finduser" class="hover:text-blue-500">戻る</a>
    </div>
</x-app-layout>