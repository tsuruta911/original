@extends('layouts.front')
@section('title', $event->eventname)

@section('content')
<div class="container">
    <h2>{{$event->eventname}}</h2>
    <p>{{$event->content}}</p>
    <p>場所：{{$event->place}}</p>
    <p>開催時間：{{$event->time}}</p>
    <p>料金：{{$event->money}}</p>
</div>
@endsection