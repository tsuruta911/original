@extends('layouts.front')
@section('eventname', '登録済みイベントの一覧')

@section('content')
    <div class="container">
        <div class="row">
            <h2>イベント一覧</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ action('Admin\TennisController@add') }}" role="button" class="btn btn-primary">新規作成</a>
            </div>
            <div class="col-md-8">
                <form action="{{ action('Admin\TennisController@index') }}" method="get">
                    <div class="form-group row">
                        <label class="col-md-2">イベント名</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="cond_title" value="{{ $cond_title }}">
                        </div>
                        <div class="col-md-2">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="検索">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="list-news col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th width="10%">ID</th>
                                <th width="20%">イベント名</th>
                                <th width="50%">開催内容</th>
                                <th width="20%">開催場所</th>
                                <th width="10%">開催時間</th>
                                <th width="10%">料金</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $event)
                                <tr>
                                    <th>{{ $event->id }}</th>
                                    <td>{{ \Str::limit($event->eventname, 100) }}</td>
                                    <td>{{ \Str::limit($event->content, 250) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection