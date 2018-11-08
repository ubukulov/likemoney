@extends('layouts.app')
@section('content')
    <section id="features">
        <div class="content">
            <h2>Хиты продаж</h2>
            <div class="slider responsive">
                @foreach($products as $product)
                <div>
                    <div class="product-item">
                        <div class="label label-sale">Скидка 10%</div>
                        <div class="product-img">
                            <a href="{{ url('product/'.$product->id) }}">
                                <img src="img/bitmap.png">
                            </a>
                        </div>
                        <div class="product-list">
                            <h4>{!! $product->title !!}</h4>
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
    </section>

    <section id="features">
        <div class="content">
            <h2>Новинки</h2>
            <div class="slider responsive">
                @foreach($products as $product)
                <div>
                    <div class="product-item">
                        <div class="label label-sale">Скидка 10%</div>
                        <div class="product-img">
                            <a href="">
                                <img src="img/bitmap.png">
                            </a>
                        </div>
                        <div class="product-list">
                            <h4>{!! $product->title !!}</h4>
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
    </section>

    <section class="top-category">
        <h2>Популярные категории</h2>
        <div class="slider responsive-1">
            @foreach($products as $product)
            <div>
                <div class="category-item">
                    <div class="category-img">
                        <a href="">
                            <img src="https://a.icons8.com/vcradgZY/UNCRGr/bitmap.png">
                        </a>
                    </div>
                    <div class="category-list">
                        <div class="clrfx">
                            <h4>{!! $product->title !!}</h4>

                            <div class="add-to-links-category">
                                <a href="" class="">Перейти</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <section id="features">
        <div class="content">
            <h2>Акция</h2>
            <div class="slider responsive">

                <div>
                    <div class="product-item">
                        <div class="label label-sale">Скидка 10%</div>
                        <div class="product-img">
                            <a href="">
                                <img src="img/bitmap.png">
                            </a>
                        </div>
                        <div class="product-list">
                            <h3>iPhone XS <br> Серый космос</h3>
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
                <div>
                    <div class="product-item">
                        <div class="label label-sale">Скидка 10%</div>
                        <div class="product-img">
                            <a href="">
                                <img src="img/bitmap.png">
                            </a>
                        </div>
                        <div class="product-list">
                            <h3>iPhone XS <br> Серый космос</h3>
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
                <div>
                    <div class="product-item">
                        <div class="label label-sale">Скидка 10%</div>
                        <div class="product-img">
                            <a href="">
                                <img src="img/bitmap.png">
                            </a>
                        </div>
                        <div class="product-list">
                            <h3>iPhone XS <br> Серый космос</h3>
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
                <div>
                    <div class="product-item">
                        <div class="label label-sale">Скидка 10%</div>
                        <div class="product-img">
                            <a href="">
                                <img src="img/bitmap.png">
                            </a>
                        </div>
                        <div class="product-list">
                            <h3>iPhone XS <br> Серый космос</h3>
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
                <div>
                    <div class="product-item">
                        <div class="label label-sale">Скидка 10%</div>
                        <div class="product-img">
                            <a href="">
                                <img src="img/bitmap.png">
                            </a>
                        </div>
                        <div class="product-list">
                            <h3>iPhone XS <br> Серый космос</h3>
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
                <div>
                    <div class="product-item">
                        <div class="label label-sale">Скидка 10%</div>
                        <div class="product-img">
                            <a href="">
                                <img src="img/bitmap.png">
                            </a>
                        </div>
                        <div class="product-list">
                            <h3>iPhone XS <br> Серый космос</h3>
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
                <div>
                    <div class="product-item">
                        <div class="label label-sale">Скидка 10%</div>
                        <div class="product-img">
                            <a href="">
                                <img src="img/bitmap.png">
                            </a>
                        </div>
                        <div class="product-list">
                            <h3>iPhone XS <br> Серый космос</h3>
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
                <div>
                    <div class="product-item">
                        <div class="label label-sale">Скидка 10%</div>
                        <div class="product-img">
                            <a href="">
                                <img src="img/bitmap.png">
                            </a>
                        </div>
                        <div class="product-list">
                            <h3>iPhone XS <br> Серый космос</h3>
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
                <div>
                    <div class="product-item">
                        <div class="label label-sale">Скидка 10%</div>
                        <div class="product-img">
                            <a href="">
                                <img src="img/bitmap.png">
                            </a>
                        </div>
                        <div class="product-list">
                            <h3>iPhone XS <br> Серый космос</h3>
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

            </div>
        </div>
    </section>


    <section id="features">
        <div class="content">
            <h2>Совместные покупки</h2>
            <div class="slider responsive">

                <div>
                    <div class="product-item">
                        <div class="label label-sale">Уже 9 покупок</div>
                        <div class="product-img">
                            <a href="">
                                <img src="img/bitmap.png">
                            </a>
                        </div>
                        <div class="product-list">
                            <h3>iPhone XS <br> Серый космос</h3>
                            <div class="add-to-cart">
                                <a href="" class="cart-button cart-button-all">Снизить цену</a>
                            </div>
                            <div class="price-all">
                                <div class="old-price">110 000тг</div>
                                <div class="new-price">110 000тг</div>
                                <div class="old-price">110 000тг</div>
                                <div class="info">Цена станет ниже <br>при наборе 20 покупателей</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="product-item">
                        <div class="label label-sale">Уже 9 покупок</div>
                        <div class="product-img">
                            <a href="">
                                <img src="img/bitmap.png">
                            </a>
                        </div>
                        <div class="product-list">
                            <h3>iPhone XS <br> Серый космос</h3>
                            <div class="add-to-cart">
                                <a href="" class="cart-button cart-button-all">Снизить цену</a>
                            </div>
                            <div class="price-all">
                                <div class="old-price">110 000тг</div>
                                <div class="new-price">110 000тг</div>
                                <div class="old-price">110 000тг</div>
                                <div class="info">Цена станет ниже <br>при наборе 20 покупателей</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="product-item">
                        <div class="label label-sale">Уже 9 покупок</div>
                        <div class="product-img">
                            <a href="">
                                <img src="img/bitmap.png">
                            </a>
                        </div>
                        <div class="product-list">
                            <h3>iPhone XS <br> Серый космос</h3>
                            <div class="add-to-cart">
                                <a href="" class="cart-button cart-button-all">Снизить цену</a>
                            </div>
                            <div class="price-all">
                                <div class="old-price">110 000тг</div>
                                <div class="new-price">110 000тг</div>
                                <div class="old-price">110 000тг</div>
                                <div class="info">Цена станет ниже <br>при наборе 20 покупателей</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="product-item">
                        <div class="label label-sale">Уже 9 покупок</div>
                        <div class="product-img">
                            <a href="">
                                <img src="img/bitmap.png">
                            </a>
                        </div>
                        <div class="product-list">
                            <h3>iPhone XS <br> Серый космос</h3>
                            <div class="add-to-cart">
                                <a href="" class="cart-button cart-button-all">Снизить цену</a>
                            </div>
                            <div class="price-all">
                                <div class="old-price">110 000тг</div>
                                <div class="new-price">110 000тг</div>
                                <div class="old-price">110 000тг</div>
                                <div class="info">Цена станет ниже <br>при наборе 20 покупателей</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="product-item">
                        <div class="label label-sale">Уже 9 покупок</div>
                        <div class="product-img">
                            <a href="">
                                <img src="img/bitmap.png">
                            </a>
                        </div>
                        <div class="product-list">
                            <h3>iPhone XS <br> Серый космос</h3>
                            <div class="add-to-cart">
                                <a href="" class="cart-button cart-button-all">Снизить цену</a>
                            </div>
                            <div class="price-all">
                                <div class="old-price">110 000тг</div>
                                <div class="new-price">110 000тг</div>
                                <div class="old-price">110 000тг</div>
                                <div class="info">Цена станет ниже <br>при наборе 20 покупателей</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@stop