<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Likemoney</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('semantic/semantic.css') }}">
    {{--<link rel="stylesheet" href="{{ asset('css/app.css') }}">--}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('semantic/components/icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('font-awesome/css/all.min.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/jquery-3.3.1.js') }}"></script>
    <script src="{{ asset('semantic/semantic.js') }}"></script>
    {{--        <script src="{{ asset('js/app.js') }}"></script>--}}
    <script src="{{ asset('js/scripts.js') }}"></script>
</head>
<body>

<div class="header">
    <div class="header-container">
        <div class="logo">
            <img src="{{ asset('img/logo_white.png') }}" alt="Likemoney">
        </div>
    </div>
</div>

<div class="content">
    @yield('content')
</div>

@include("pattern.footer")
</body>
</html>