# Gamer Summit(仮)[リポジトリ名：gamer_sns]

## アプリ概要（Gamer Summitとは）

### アプリURL
https://gamersns-fa45036fa338.herokuapp.com/

### ゲーマーたちの交流の場
チャットやブログ、掲示板を使って、ゲーマー同士の交流を深めるSNS。

それぞれカテゴリを設定でき、自分の好きなジャンルのゲームについて情報や感想などの共有を楽しんでいただけます。

## 制作背景
ゲームを介して他者と交流できるコミュニティとして、Discord等がよく利用されます。

ただ、いきなり大人数のサーバに入るのは少しハードルが高いと感じる人は多いと思われます。

そのため、自分の得意or好きなゲームの情報等をより気軽に共有できる場があると良いと考えました。

以上から、ゲームをベースとした交流特化の新たなSNSとして「Gamer Summit」を開発しています。

## 使い方
トップページ右上のloginからログイン（未登録の場合はregisterからアカウント登録）していただけます。

ログイン後、画面上のバーに各機能へのリンクが表示されます。

- 「HOME」：ホーム画面。現在未実装だが、チャット・ブログ・掲示板の中からオススメをピックアップする機能を追加予定。
- 「CHAT」：チャット機能。ゲームの感想や情報を語り合える。ルームへの参加は作成者による承認制。
- 「BLOG」：ブログ機能。ゲームに関して、共有したいことを自由に発信可能。</br>
また、ブログにコメントすることも可能。</br>
いいねやその他フィードバックを行えるように拡張予定。
- 「BOARD」：掲示板機能。「募集」「大会」「質問」など、タイプを選び、様々な形式で掲示板を作成可能。
- 「FIND USER」：ユーザー検索機能。入力キーワードを含む名前やプロフィール、カテゴリを登録している他ユーザーを検索可能。
- 「MY PAGE」：プロフィール編集。登録情報の変更やアカウント削除が可能。

## テストアカウント
2つのテストアカウントがあるので、使用感を体験いただくためご自由にご利用ください。
- e-mail：test@mail.com, pass：testtest
- e-mail：test2@mail.com, pass：testtest

## 技術構成
| カテゴリ  | 使用技術 |
| ------------- | ------------- |
| フロントエンド  | HTML/CSS, JavaScript  |
| バックエンド    | PHP  |
| フレームワーク  | Laravel  |
| データベース  | MariaDB  |
| 認証機能  | Breeze  |
| 開発環境  | AWS  |
| デプロイ先  | Heroku  |
| その他  | Pusher, Node.js, tailwind  |
