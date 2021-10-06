<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- CSRF Token -->
        {{-- 後の章で説明します --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">
         {{-- 各ページごとにtitleタグを入れるために@yieldで空けておきます。 --}}
         <title>@yield('title')</title>
         
         <!-- Scripts -->
         {{-- Laravel標準で用意されているJavascriptを読み込みます --}}
         <script src="{{ secure_asset('js/app.js') }}" defer></script>
         
         <!-- Fonts -->
         <link rel="dns-prefetch" href = "https://fonts.gstatic.com">
         <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
         
         <!-- Styles -->
         {{-- Laravel標準で用意されているCSSを読み込みます --}}
         <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
         {{-- この章の後半で作成するCSSを読み込みます --}}
         <link href="{{ asset('css/front.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <header>
                {{-- 画面上部に表示するナビゲーションバーです。 --}}
                <nav class="navbar navbar-expand-md navbar-laravel">
                    <div class="logo mr-4">
                         <a href="{{ url('/') }}"><img src="{{ asset('img/logo.png') }}" /></a>
                    </div>
                    <buttom class="navbar-toggler" type="buttom" data-toggler="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </buttom> 
                    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">
                            <li class="mr-4"><a href="{{ url('admin/tennis/about') }}">サイトについて</a></li>
                            <li><a href="{{ url('/check') }}">開催情報検索</li>
                        </ul>
                        
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                        {{-- ログインしていなかったらログイン画面へのリンクを表示 --}}
                        @guest
                            <li><a class="nav-link d-block p-2 px-4 border rounded-pill mr-4 text-dark" href="{{ route('login') }}">ログイン</a></li>
                            <li><a class="nav-link d-block p-2 px-4 border rounded-pill text-dark" href="{{ route('register') }}">新規登録</a></li>

                        {{-- ログインしていたらユーザー名とログアウトボタンを表示 --}}
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                        </ul>
                    </div>
                </nav>
                 {{-- ここまでナビゲーションバー --}}
            </header>
            
             <main>
                 {{-- コンテンツをここに入れるため、@yieldで空けておきます。 --}}
                 @yield('content')
             </main>
             
             <footer class="bg-dark">
                 <div class="container">
                     <h2>footer</h2>
                 </div>
             </footer>
        </div>
    </body>
</html> 
