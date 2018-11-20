<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Лайкмани</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
<div class="header__top-line">
    <div class="header__inner-wrap">
        <div class="city-select">
            <a href="#" class="city-select__link" onclick="yaCounter11366155.reachGoal('gorod_header'); return true;">Ваш город : Алматы <span><i class="fa fa-angle-down"></i></span></a>
            <div class="city-select__dropdown city-dropdown">
                <a href="#" class="city-dropdown__close">×</a>

                <a href="" class="city-dropdown__all-link">Ещё 872 городов</a>
            </div>
        </div>
        <nav class="menu menu--header-menu">
            <ul class="menu__list">
                <li class="menu__item">
                    <a href="/post/" class="menu__link">Для поставщиков </a>
                </li>
                <li class="menu__item">
                    <a href="/how/" class="menu__link">Как зарабатывать?</a>
                </li>
                <li class="menu__item">
                    <a href="/news/" class="menu__link">Новости</a>
                </li>

            </ul>
        </nav>
        <div class="header__phone">
            <a href="" class="phone">+7 (499) 110-51-74</a>
            <a href="" class="phone">080-011</a>
            <a href="" class="call-head">Заказать звонок</a>
        </div>


    </div>
</div>

<div id="wall">
    @include('pattern.head')

    @include('pattern.menu')

    <div class="container">
        <div class="content">
            @yield('content')
        </div>
    </div>
</div>

@include('pattern.footer')

<script src="{{ asset('js/main.js') }}"></script>


</body>
</html>