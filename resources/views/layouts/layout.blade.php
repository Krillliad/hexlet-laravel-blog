<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet" type="text/css">
    <script src="{{ URL::asset('js/app.js') }}"></script>
    <title>Document</title>
</head>
<body>
    <div class="header">
{{--        <div class="button-navigation">--}}
{{--            <a href="{{ route('main.welcome') }}">Main</a>--}}
{{--        </div>--}}
        <div class="button-navigation">
            <a href="{{ route('about.about') }}">About</a>
        </div>
        <div class="button-navigation">
            <a href="{{ route('members.team') }}">Team</a>
        </div>
        <div class="button-navigation">
            <a href="{{ route('information.index') }}">Information</a>
        </div>
        <div class="header-title">
            <a href="{{ route('main.welcome') }}">
                <h1>Laravel Hexlet Blog</h1>
            </a>
        </div>
    </div>
    @yield('content')
</body>
</html>
