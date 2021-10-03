@extends('layouts.front')
@section('title', 'イベントの編集')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>イベント内容編集</h2>
                <form action="{{ action('Admin\TennisController@update') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2" for="eventname">イベント名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="eventname" value="{{ $event_form->eventname }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="content">開催内容</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="content" rows="20">{{ $event_form->content }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="place">開催場所</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="place" value="{{ $event_form->place }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="time">開催時間</label>
                        <div class="col-md-10">
                           <input type="text" class="form-control" name="time" value="{{ $event_form->time }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="money">料金</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="money" value="{{ $event_form->money }}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <div class="col-md-10">
                            <input type="hidden" name="id" value="{{ $event_form->id }}">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="更新">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection