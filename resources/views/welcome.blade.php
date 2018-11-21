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
                            <a href="">
                                <img src="img/bitmap.png">
                            </a>
                        </div>
                        <div class="product-list">
                            <h3>{{ $product->title }}</h3>
                            <div class="add-to-cart">
                                <a href="" class="cart-button cart-button-all">В корзину</a>
                            </div>
                            <div class="clrfx">
                                <span class="price">Цена<br> <span class="price-num">129 000 ₸</span> </span>
                                <span class="income">Ваш доход<br> <span class="income-num">10 000 ₸</span> </span>
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
                            <h3>{{ $product->title }}</h3>
                            <div class="add-to-cart">
                                <a href="" class="cart-button cart-button-all">В корзину</a>
                            </div>
                            <div class="clrfx">
                                <span class="price">Цена<br> <span class="price-num">129 000 ₸</span> </span>
                                <span class="income">Ваш доход<br> <span class="income-num">10 000 ₸</span> </span>
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
            <h2>Акция</h2>
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
                            <h3>{{ $product->title }}</h3>
                            <div class="add-to-cart">
                                <a href="" class="cart-button cart-button-all">В корзину</a>
                            </div>
                            <div class="clrfx">
                                <span class="price">Цена<br> <span class="price-num">129 000 ₸</span> </span>
                                <span class="income">Ваш доход<br> <span class="income-num">10 000 ₸</span> </span>
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
                            <h3>Чернила GT52 Cyan for HP DeskJet GT Series Printers M0H54AE 70ml</h3>
                            <div class="add-to-cart">
                                <a href="" class="cart-button cart-button-all">Снизить цену</a>
                            </div>
                            <div class="price-all">
                                <div class="old-price">110 000₸</div>
                                <div class="new-price">110 000₸</div>
                                <div class="old-price">110 000₸</div>
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
                            <h3>Чернила GT52 Cyan for HP DeskJet GT Series Printers M0H54AE 70ml</h3>
                            <div class="add-to-cart">
                                <a href="" class="cart-button cart-button-all">Снизить цену</a>
                            </div>
                            <div class="price-all">
                                <div class="old-price">110 000₸</div>
                                <div class="new-price">110 000₸</div>
                                <div class="old-price">110 000₸</div>
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
                            <h3>Чернила GT52 Cyan for HP DeskJet GT Series Printers M0H54AE 70ml</h3>
                            <div class="add-to-cart">
                                <a href="" class="cart-button cart-button-all">Снизить цену</a>
                            </div>
                            <div class="price-all">
                                <div class="old-price">110 000₸</div>
                                <div class="new-price">110 000₸</div>
                                <div class="old-price">110 000₸</div>
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
                            <h3>Чернила GT52 Cyan for HP DeskJet GT Series Printers M0H54AE 70ml</h3>
                            <div class="add-to-cart">
                                <a href="" class="cart-button cart-button-all">Снизить цену</a>
                            </div>
                            <div class="price-all">
                                <div class="old-price">110 000₸</div>
                                <div class="new-price">110 000₸</div>
                                <div class="old-price">110 000₸</div>
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
                            <h3>Чернила GT52 Cyan for HP DeskJet GT Series Printers M0H54AE 70ml</h3>
                            <div class="add-to-cart">
                                <a href="" class="cart-button cart-button-all">Снизить цену</a>
                            </div>
                            <div class="price-all">
                                <div class="old-price">110 000₸</div>
                                <div class="new-price">110 000₸</div>
                                <div class="old-price">110 000₸</div>
                                <div class="info">Цена станет ниже <br>при наборе 20 покупателей</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="top-category">
        <h2>Популярные категории</h2>
        <div class="slider responsive-1">

            <div>
                <div class="category-item">
                    <div class="category-img">
                        <a href="">
                            <img src="https://a.icons8.com/vcradgZY/UNCRGr/bitmap.png">
                        </a>
                    </div>
                    <div class="category-list">


                        <div class="clrfx">
                            <h3>Видеокарты</h3>

                            <div class="add-to-links-category">
                                <a href="" class="">Перейти</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="category-item orange-grd">
                    <div class="category-img">
                        <a href="">
                            <img src="https://a.icons8.com/vcradgZY/UNCRGr/bitmap.png">
                        </a>
                    </div>
                    <div class="category-list">


                        <div class="clrfx">
                            <h3>Видеокарты</h3>

                            <div class="add-to-links-category">
                                <a href="" class="">Перейти</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="category-item blue-grd">
                    <div class="category-img">
                        <a href="">
                            <img src="https://a.icons8.com/vcradgZY/UNCRGr/bitmap.png">
                        </a>
                    </div>
                    <div class="category-list">


                        <div class="clrfx">
                            <h3>Видеокарты</h3>

                            <div class="add-to-links-category">
                                <a href="" class="">Перейти</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="category-item">
                    <div class="category-img">
                        <a href="">
                            <img src="https://a.icons8.com/vcradgZY/UNCRGr/bitmap.png">
                        </a>
                    </div>
                    <div class="category-list">


                        <div class="clrfx">
                            <h3>Видеокарты</h3>

                            <div class="add-to-links-category">
                                <a href="" class="">Перейти</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="category-item">
                    <div class="category-img">
                        <a href="">
                            <img src="https://a.icons8.com/vcradgZY/UNCRGr/bitmap.png">
                        </a>
                    </div>
                    <div class="category-list">


                        <div class="clrfx">
                            <h3>Видеокарты</h3>

                            <div class="add-to-links-category">
                                <a href="" class="">Перейти</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="category-item">
                    <div class="category-img">
                        <a href="">
                            <img src="https://a.icons8.com/vcradgZY/UNCRGr/bitmap.png">
                        </a>
                    </div>
                    <div class="category-list">


                        <div class="clrfx">
                            <h3>Видеокарты</h3>

                            <div class="add-to-links-category">
                                <a href="" class="">Перейти</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="category-item">
                    <div class="category-img">
                        <a href="">
                            <img src="https://a.icons8.com/vcradgZY/UNCRGr/bitmap.png">
                        </a>
                    </div>
                    <div class="category-list">


                        <div class="clrfx">
                            <h3>Видеокарты</h3>

                            <div class="add-to-links-category">
                                <a href="" class="">Перейти</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="category-item">
                    <div class="category-img">
                        <a href="">
                            <img src="https://a.icons8.com/vcradgZY/UNCRGr/bitmap.png">
                        </a>
                    </div>
                    <div class="category-list">


                        <div class="clrfx">
                            <h3>Видеокарты</h3>

                            <div class="add-to-links-category">
                                <a href="" class="">Перейти</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="category-item">
                    <div class="category-img">
                        <a href="">
                            <img src="https://a.icons8.com/vcradgZY/UNCRGr/bitmap.png">
                        </a>
                    </div>
                    <div class="category-list">


                        <div class="clrfx">
                            <h3>Видеокарты</h3>

                            <div class="add-to-links-category">
                                <a href="" class="">Перейти</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@stop