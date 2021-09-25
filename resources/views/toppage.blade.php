@extends('layouts.front')
@section('title', 'MeeT Tennis')

@section('content')
    <div class="container">
        <h2>MeeTTennis</h2>
        <div class="col-md-6">
            <p>MeeTTennisとは</p>
            <p>対戦相手が見つからない・試合参加者が集まらない</p>
            <p>テニスしたい人同士をマッチングするサイト</p>
        </div>
        <div class="row">
            <p class="mr-4"><a class="d-block rounded-circle p-4 bg-info" href="{{ url('/entry') }}">エントリーする</a></p>
            <p class="mr-4"><a class="d-block rounded-circle p-4 bg-info"href="{{ url('/#') }}">テニスマッチングを主催する</a></p>
        </div>
    </div>
@endsection