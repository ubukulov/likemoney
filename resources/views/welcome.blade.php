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
        <link rel="stylesheet" href="{{ asset('semantic/components/icon.min.css') }}">
        <link rel="stylesheet" href="{{ asset('font-awesome/css/all.min.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/jquery-3.3.1.js') }}"></script>
        <script src="{{ asset('semantic/semantic.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/scripts.js') }}"></script>
    </head>
    <body>
        <div class="wide">

            <div class="top fixed">
                <div class="ui large menu">
                    <a class="active item">
                        Home
                    </a>
                    <a class="item">
                        Messages
                    </a>
                    <div class="right menu">
                        <div class="ui dropdown item">
                            Language <i class="dropdown icon"></i>
                            <div class="menu">
                                <a class="item">English</a>
                                <a class="item">Russian</a>
                                <a class="item">Spanish</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ui primary button">Sign Up</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header">
                <div class="container">

                </div>
            </div>


            <div class="content">
                <div class="ui grid">
                    <div class="four wide column product-card">
                        <div class="product-body">
                            <div class="product-img">
                                <img src="{{ asset('img/no_photo227x140.png') }}" alt="no-photo">
                            </div>

                            <div class="product-title">
                                Samsung Galaxy S9 asdasdasdasdasd7989
                            </div>

                            <div class="product-info">

                            </div>
                        </div>
                    </div>
                    <div class="four wide column">asdasdasd</div>
                    <div class="four wide column">asdasdasd</div>
                    <div class="four wide column">asdasdasd</div>
                </div>
            </div>


            <div class="footer">
                @include("pattern.footer")
            </div>
        </div>
    </body>
</html>
