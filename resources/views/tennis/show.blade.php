@extends('layouts.front')
@section('title', $event->eventname)

@section('content')
<div class="container">
    <p class="d-block border mr-4 text-center">イベント名:{{$event->eventname}}</h2>
    <p class=mt-4>開催内容　{{$event->content}}</p>
    <p class="border-top mt-3">場所：{{$event->place}}</p>
    <p class="border-top mt-3">開催時間：{{$event->time}}</p>
    <p class="border-top mt-3">料金：{{$event->money}}</p>
    <p class="border-top mt-3">申し込み方法：弊社メールアドレスまたはお電話にてからお申し込みください。その際は氏名、年齢、所属、テニス歴、電話番号、メールアドレスをお願いします。</p>
    <p class="col-md-2 mr-3 mt-3"><a class="d-block border rounded-pill p-1 bg-danger" href="{{ url('/admin/tennis') }}">エントリーする</a></p>
</div>
@endsection