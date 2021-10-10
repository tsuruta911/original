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
            <p class="mr-4 mt-3"><a class="d-block border rounded-pill p-4 bg-danger" href="{{ url('/admin/tennis') }}">エントリーする　＞</a></p>
            <p class="mr-4 mt-3"><a class="d-block border rounded-pill p-4 bg-info"href="{{ url('/admin/tennis/create') }}">テニスマッチングを主催する　＞</a></p>
        </div>
        <div>
            <p class="d-block text-center bg-white py-2 mt-3">Pickup matches</p>
            <p class="text-white text-center lead py-3 mt-5">直近のテニスの開催情報</p>
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
            <h3 class="col-md-5 d-block border rounded-pill bg-dark">{{ \Str::limit($event->eventname, 50) }}</h3>
            <p class="col-md-5 d-block border rounded-pill bg-dange">開催場所：{{ \Str::limit($event->place, 50) }}</p>
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