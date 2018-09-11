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
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/jquery-3.3.1.js') }}"></script>
        <script src="{{ asset('semantic/semantic.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/scripts.js') }}"></script>
    </head>
    <body>
        <div class="wide">
            <div class="header">
                <div class="container">

                </div>
            </div>

            <div class="ui centered grid">
                <div class="centered row">
                    <div class="ui fours cards">
                        <div class="ui card">
                            <div class="image dimmable">
                                <div class="ui blurring inverted dimmer transition hidden">
                                    <div class="content">
                                        <div class="center">
                                            <div class="ui teal button">Add Friend</div>
                                        </div>
                                    </div>
                                </div>
                                <img src="/img/logo.png">
                            </div>
                            <div class="content">
                                <div class="headers">Title</div>
                                <div class="meta">
                                    <a class="group">Meta</a>
                                </div>
                                <div class="description">One or two sentence description that may go to several lines</div>
                            </div>
                            <div class="extra content">
                                <a class="right floated created">Arbitrary</a>
                                <a class="friends">
                                    Arbitrary</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer">

            </div>
        </div>
    </body>
</html>
