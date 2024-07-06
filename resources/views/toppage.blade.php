<x-app-layout>
    <x-slot name="title">
        Gamers' SNS
    </x-slot>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            このウェブサイトについて
        </h2>
    </x-slot>
    
    <div class= "py-6">
        <h1 class="abstract font-semibold text-lg text-white bg-orange-900">ゲーマーたちの交流の場</h1>
        <p class= "abstract-body font-semibold">
            チャットやブログ、掲示板を使って、ゲーマー同士の交流を深めるSNSです。</br>
            それぞれカテゴリを設定でき、自分の好きなジャンルのゲームについて情報や感想などの共有を楽しんでいただけます。
        </p>
    </div>
    
    <div class= "py-6">
        <h1 class="chat font-semibold text-lg text-white bg-orange-900">チャット機能</h1>
        <p class= "chat-detail font-semibold">
            チャット機能には、上のメニューバーの「CHAT」から移動していただけます。</br>
            チャット機能では、新規作成ボタンから自由にチャットルームを作成し、その中で交流していただけます。</br>
            ルーム作成者以外のユーザーは、その作成者に申請し、承認されることでルームに参加できます。</br>
            作成者は、自分の作成したルームを開くと、他のユーザーからの申請が表示され、そちらから承認できます。</br>
            </br>
            ルーム内では、テキストボックスにメッセージを入力し、送信ボタンを押すかエンターキーを押すことで送信することができます。</br>
        </p>
    </div>
    
    <div class= "py-6">
        <h1 class="blog font-semibold text-lg text-white bg-orange-900">ブログ機能</h1>
        <p class= "blog-detail font-semibold">
            ブログ機能には、上のメニューバーの「BLOG」から移動していただけます。</br>
            ブログ機能では、新規作成ボタンから記事を作成し、共有したいことを自由に発信いただけます。</br>
            また、ブログにコメントいただくことで作成者への質問などを行えるよう想定しています。</br>
            </br>
            ブログに対し、いいねやその他フィードバックを行えるように拡張する予定です。
        </p>
    </div>
    
    <div class= "py-6">
        <h1 class="board font-semibold text-lg text-white bg-orange-900">掲示板機能</h1>
        <p class= "board-detail font-semibold">
            掲示板機能には、上のメニューバーの「BOARD」から移動していただけます。</br>
            掲示板機能では、新規作成ボタンから「質問」「募集」「大会」のいずれかのタイプを選び、掲示板を作成していただけます。</br>
            詳しい内容も記入することができます。
        </p>
    </div>
    
    <div class= "py-6">
        <h1 class="finduser font-semibold text-lg text-white bg-orange-900">ユーザー検索機能</h1>
        <p class= "finduser-detail font-semibold">
            ユーザー検索機能には、上のメニューバーの「FIND USER」から移動していただけます。</br>
            ユーザー検索機能では、キーワードを入力することで、それに合致する要素を持つユーザーを検索いただけます。</br>
            他ユーザーとの交流にお役立てください！
        </p>
    </div>
    
    <div class= "py-6">
        <h1 class="mypage font-semibold text-lg text-white bg-orange-900">マイページ</h1>
        <p class= "mypage-detail font-semibold">
            マイページには、上のメニューバーの「MY PAGE」から移動していただけます。</br>
            マイページでは、自分のユーザー情報やパスワードの更新、アカウント削除をしていただけます。</br>
            自分の好きなカテゴリやプロフィール情報を設定し、積極的な交流を図りましょう！
        </p>
    </div>
    
</x-app-layout>