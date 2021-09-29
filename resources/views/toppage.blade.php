@extends('layouts.front')
@section('title', 'MeeT Tennis')

@section('content')
<div class="bg-img">
    <div class="container">
        <h1 class=text-white>🎾MeeTTennis🎾</h1>
        <div class="col-md-5 d-block text-white lead mr-4 bg-dark">
            <p>「MeeTTennis」とは</p>
            <p>対戦相手が見つからない・試合参加者が集まらない</p>
            <p>テニスしたい人同士をマッチングするサイト</p>
        </div>
        <div class="row text-white">
            <p class="mr-4"><a class="d-block border rounded-pill p-4 bg-danger" href="{{ url('/entry') }}">エントリーする　＞</a></p>
            <p class="mr-4"><a class="d-block border rounded-pill p-4 bg-info"href="{{ url('/create') }}">テニスマッチングを主催する　＞</a></p>
        </div>
        <div>
            <p class="d-block text-center bg-white">Pickup matches</p>
            <p class="text-white text-center lead">直近のテニスの開催情報</p>
        </div>
    </div>
</div>
@endsection