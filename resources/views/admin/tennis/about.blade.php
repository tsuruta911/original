@extends('layouts.front')
@section('title', 'サイトについて')

@section('content')
<div class="bg-img">
    <h1 class="display-4 d-block py-4 text-white bg-info">🎾サイトについて🎾</h1>
    <div class="container">
        <div class="d-block text-white text-center lead mr-4">
            <p>対戦相手が見つからない</p>
            <p>試合参加者が集まらない</p>
        </div>
        <div class="d-block text-white text-center lead border">
            <p>テニスしたい人同士をマッチング"テニスマッチ"</p>
        </div>
    </div>
</div>
<div>
     <h2 class="text-black text-center">サイトの目的</h2>
     <div class="container border-top">
         <p>「ちょっと予定の空いた週末、どこかでテニスの試合ができないかな」というテニスプレーヤーと、「大会参加者をもう少し増やしたい」という大会主催者をつなぐサイト</p>
     </div>
     <h2 class="text-black text-center">サイトの活用法</h2>
     <div class="container border-top">
         <ul class="mr-auto">
            <li>大会主催者（テニス施設）は大会・練習会情報を登録し、参加者を募集できます。</li>
            <li>管理ページでは大会参加者のエントリー数や応募率がわかります。</li>
            <li>また、大会・練習会ごとの結果のお知らせや収支管理、年間の売り上げ管理も可能です。</li>
         </ul>
         
         <ul class="ml-auto">
            <li>プレーヤーの方は「エントリーユーザー」として登録し、現在募集中の大会・練習会情報を地域をしぼって検索し、申込みができます。</li>
            <li>大会や練習会、気になる大会を「お気に入り」にいれておき、参加者募集の情報を受け取ることも可能です。</li>
         </ul>
    　</div>
</div>
@endsection