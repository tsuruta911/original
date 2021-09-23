@extends('layouts.front')
@section('title', 'MeeT Tennis')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>MeeTTennis</h2>
                <form action="{{ action('Admin\TennisController@create') }}" method="post" enctype="multipart/form-data">
                    
                    <div class="form-group row">
                        <label class="col-md-9" for="title">MeeTTennisとは対戦相手が見つからない・試合参加者が集まらないテニスしたい人同士をマッチングするサイト</label>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="body"></label>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="title">画像</label>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
            </div>
        </div>
    </div>
@endsection