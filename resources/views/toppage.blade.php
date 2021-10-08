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
            <p class="mr-4"><a class="d-block border rounded-pill p-4 bg-danger" href="{{ url('/admin/tennis') }}">エントリーする　＞</a></p>
            <p class="mr-4"><a class="d-block border rounded-pill p-4 bg-info"href="{{ url('/admin/tennis/create') }}">テニスマッチングを主催する　＞</a></p>
        </div>
        <div>
            <p class="d-block text-center bg-white">Pickup matches</p>
            <p class="text-white text-center lead">直近のテニスの開催情報</p>
        </div>
    </div>
</div>
<div class="toppageevent">
    <div class="container">
    @if($posts != null)
    <ul class="eventlist">
        @foreach($posts as $event)
        <li>
            <a href="{{ route('tennis.show', ['event_id' => $event->id] ) }}">
            <h3>{{ \Str::limit($event->eventname, 50) }}</h3>
            <p>開催場所：{{ \Str::limit($event->place, 50) }}</p>
            </a>
        </li>
        @endforeach
    </ul>
    @else
    <h2>イベント募集がありません</h2>
    @endif
    </div>
</div>
@endsection