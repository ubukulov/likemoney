@extends('layouts.app')
@section('content')
    <div class="main_banner">
        <div class="row">
            <div class="banner">
                <h4 align="center">Тут будет баннер <br> 990x340</h4>
            </div>

            <div class="goods_today">
                <h4>Товар дня <br>290x340</h4>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="looking_now">
        <h4>Сейчас смотрять</h4>
        <div class="row">
            @foreach($products as $product)
            <div class="col-md-3">
                <div class="product-item">
                    <div class="label label-sale">Скидка 10%</div>
                    <div class="product-img">
                        <a href="">
                            <img src="/img/bitmap.png">
                        </a>
                    </div>
                    <div class="product-list">
                        <div class="product-title">
                            <span>{!! $product->title !!}</span>
                        </div>
                        <div class="add-to-cart">
                            <a href="" class="cart-button">В корзину</a>
                        </div>
                        <div class="clrfx">
                            <span class="price">Цена<br> <span class="price-num">129 000 тг</span> </span>
                            <span class="income">Ваш доход<br> <span class="income-num">10 000 тг</span> </span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="hot-sells">
        <h4>Хиты продаж</h4>
        <div class="row">
            @foreach($hotSells as $hotSell)
                <div class="col-md-3">
                    <div class="product-item">
                        <div class="label label-sale">Хит</div>
                        <div class="product-img">
                            <a href="">
                                <img src="/img/bitmap.png">
                            </a>
                        </div>
                        <div class="product-list">
                            <div class="product-title">
                                <span>{!! $hotSell->title !!}</span>
                            </div>
                            <div class="add-to-cart">
                                <a href="" class="cart-button">В корзину</a>
                            </div>
                            <div class="clrfx">
                                <div>
                                    <span class="price">Цена<br> <span class="price-num">129 000 тг</span> </span>
                                </div>
                                <div>
                                    <a href="{{ url('product/'.$hotSell->id) }}" class="btn btn-danger hot-sells-a">подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@stop