@extends('layouts.front')
@section('title', 'MeeT Tennis')

@section('content')
<div class="bg-img">
    <div class="container">
        <h1 class=text-white>ð¾MeeTTennisð¾</h1>
        <div class="col-md-5 d-block text-white lead mr-4 bg-dark">
            <p>ãMeeTTennisãã¨ã¯</p>
            <p>å¯¾æ¦ç¸æãè¦ã¤ãããªãã»è©¦ååå èãéã¾ããªã</p>
            <p>ããã¹ãããäººåå£«ããããã³ã°ãããµã¤ã</p>
        </div>
        <div class="row text-white">
            <p class="mr-4 mt-3"><a class="d-block border rounded-pill p-4 bg-danger" href="{{ url('/admin/tennis') }}">ã¨ã³ããªã¼ãããï¼</a></p>
            <p class="mr-4 mt-3"><a class="d-block border rounded-pill p-4 bg-info"href="{{ url('/admin/tennis/create') }}">ããã¹ãããã³ã°ãä¸»å¬ãããï¼</a></p>
        </div>
        <div>
            <p class="d-block text-center bg-white py-2 mt-3">Pickup matches</p>
            <p class="text-white text-center lead py-3 mt-5">ç´è¿ã®ããã¹ã®éå¬æå ±</p>
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
            <p class="col-md-5 d-block border rounded-pill bg-dange">éå¬å ´æï¼{{ \Str::limit($event->place, 50) }}</p>
            </a>
        </li>
        @endforeach
    </ul>
    @else
    <h2>ã¤ãã³ãåéãããã¾ãã</h2>
    @endif
    </div>
</div>
@endsection