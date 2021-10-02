{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.front')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'MeeTTennis')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>テニスイベント新規作成</h2>
                <form action="{{ action('Admin\TennisController@create') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">イベント名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="eventname" value="{{ old('eventname')  }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">開催内容</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="content" rows="20">{{ old('content') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                       <label class="col-md-2">開催場所</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="place" value="{{ old('place')  }}">
                        </div> 
                    </div>
                    <div class="form-group row">
                       <label class="col-md-2">開催時間</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="time" value="{{ old('time')  }}">
                        </div> 
                    </div>
                    <div class="form-group row">
                       <label class="col-md-2">料金</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="money" value="{{ old('money')  }}">
                        </div> 
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
            </div>
        </div>
    </div>
@endsection