@extends('layouts.app')
@section('content')

    <div class="tovar">
        <h3>{{ $product->title }}</h3>
        <p class="artikul">Артикул {{ $product->article }}</p>
    </div>
    <div class="row">

        <div class="clrfx"></div>
        <div class="col-md-6">

            <div class="tovar">

            </div>
            <div class="clrfx"></div>
            @if(empty($product->images))
            <div class="zoom-left">
                <div style="height:400px;width:400px;" class="zoomWrapper"><img style="border: 1px solid rgb(232, 232, 230); position: absolute;" id="zoom_03" src="https://static.technodom.kz/medias/103578-1qwes.jpg-Default-WorkingFormat-400Wx400HConversionFormat?context=bWFzdGVyfGltYWdlc3w1NjMwMXxpbWFnZS9qcGVnfGltYWdlcy9oODEvaDc3LzExODU4MDkwNjg4NTQyLmpwZ3w0OTBjMDk0ODcyOTM2MGM3ZjU4Y2RkN2ExYmIxYzdlNTIzZjI2YTc0MTMxY2VmNjViOGRjNzhhMmI2YTkzOTUy" data-zoom-image="https://static.technodom.kz/medias/103578-1.jpg?context=bWFzdGVyfGltYWdlc3w2ODAzMzV8aW1hZ2UvanBlZ3xpbWFnZXMvaGJmL2g2Mi8xMTg1ODA5MDQyNjM5OC5qcGd8ZTkxOGI5MjgxODRjZWZlNjM5ZmJkYTJjNDY2NjViYzdmMGE2NDljMmZlNTk0MWMwZmQwNDI2OGE4YmVjNTA0Mw"></div>



                <div class="clearfix"></div>

                <div id="gallery_01" style="width:500px; float:left; ">

                    <a href="#" class="elevatezoom-gallery active" data-update="" data-image="https://static.technodom.kz/medias/103578-1qwes.jpg-Default-WorkingFormat-400Wx400HConversionFormat?context=bWFzdGVyfGltYWdlc3w1NjMwMXxpbWFnZS9qcGVnfGltYWdlcy9oODEvaDc3LzExODU4MDkwNjg4NTQyLmpwZ3w0OTBjMDk0ODcyOTM2MGM3ZjU4Y2RkN2ExYmIxYzdlNTIzZjI2YTc0MTMxY2VmNjViOGRjNzhhMmI2YTkzOTUy" data-zoom-image="https://www.elevateweb.co.uk/wp-content/themes/radial/zoom/images/large/image1.jpg">
                        <img src="https://static.technodom.kz/medias/103578-1qwes.jpg-Default-WorkingFormat-400Wx400HConversionFormat?context=bWFzdGVyfGltYWdlc3w1NjMwMXxpbWFnZS9qcGVnfGltYWdlcy9oODEvaDc3LzExODU4MDkwNjg4NTQyLmpwZ3w0OTBjMDk0ODcyOTM2MGM3ZjU4Y2RkN2ExYmIxYzdlNTIzZjI2YTc0MTMxY2VmNjViOGRjNzhhMmI2YTkzOTUy" width="100"></a>

                    <a href="#" class="elevatezoom-gallery" data-image="https://static.technodom.kz/medias/103578-1qwes.jpg-Default-WorkingFormat-400Wx400HConversionFormat?context=bWFzdGVyfGltYWdlc3w1NjMwMXxpbWFnZS9qcGVnfGltYWdlcy9oODEvaDc3LzExODU4MDkwNjg4NTQyLmpwZ3w0OTBjMDk0ODcyOTM2MGM3ZjU4Y2RkN2ExYmIxYzdlNTIzZjI2YTc0MTMxY2VmNjViOGRjNzhhMmI2YTkzOTUy" data-zoom-image="https://static.technodom.kz/medias/103578-1.jpg?context=bWFzdGVyfGltYWdlc3w2ODAzMzV8aW1hZ2UvanBlZ3xpbWFnZXMvaGJmL2g2Mi8xMTg1ODA5MDQyNjM5OC5qcGd8ZTkxOGI5MjgxODRjZWZlNjM5ZmJkYTJjNDY2NjViYzdmMGE2NDljMmZlNTk0MWMwZmQwNDI2OGE4YmVjNTA0Mw"><img src="https://static.technodom.kz/medias/103578-1qwes.jpg-Default-WorkingFormat-400Wx400HConversionFormat?context=bWFzdGVyfGltYWdlc3w1NjMwMXxpbWFnZS9qcGVnfGltYWdlcy9oODEvaDc3LzExODU4MDkwNjg4NTQyLmpwZ3w0OTBjMDk0ODcyOTM2MGM3ZjU4Y2RkN2ExYmIxYzdlNTIzZjI2YTc0MTMxY2VmNjViOGRjNzhhMmI2YTkzOTUy" width="100"></a>

                    <a href="tester" class="elevatezoom-gallery" data-image="https://static.technodom.kz/medias/103578-1qwes.jpg-Default-WorkingFormat-400Wx400HConversionFormat?context=bWFzdGVyfGltYWdlc3w1NjMwMXxpbWFnZS9qcGVnfGltYWdlcy9oODEvaDc3LzExODU4MDkwNjg4NTQyLmpwZ3w0OTBjMDk0ODcyOTM2MGM3ZjU4Y2RkN2ExYmIxYzdlNTIzZjI2YTc0MTMxY2VmNjViOGRjNzhhMmI2YTkzOTUy" data-zoom-image="https://static.technodom.kz/medias/103578-1.jpg?context=bWFzdGVyfGltYWdlc3w2ODAzMzV8aW1hZ2UvanBlZ3xpbWFnZXMvaGJmL2g2Mi8xMTg1ODA5MDQyNjM5OC5qcGd8ZTkxOGI5MjgxODRjZWZlNjM5ZmJkYTJjNDY2NjViYzdmMGE2NDljMmZlNTk0MWMwZmQwNDI2OGE4YmVjNTA0Mw">
                        <img src="https://static.technodom.kz/medias/103578-1qwes.jpg-Default-WorkingFormat-400Wx400HConversionFormat?context=bWFzdGVyfGltYWdlc3w1NjMwMXxpbWFnZS9qcGVnfGltYWdlcy9oODEvaDc3LzExODU4MDkwNjg4NTQyLmpwZ3w0OTBjMDk0ODcyOTM2MGM3ZjU4Y2RkN2ExYmIxYzdlNTIzZjI2YTc0MTMxY2VmNjViOGRjNzhhMmI2YTkzOTUy" width="100">
                    </a>


                </div>
            </div>
            @else
                @php
                    $images = explode(",", $product->images);
                    if(isset($images[0])) {
                        $logo = "/uploads/alser/".$images[0];
                    }else{
                        $logo = "https://static.technodom.kz/medias/103578-1qwes.jpg-Default-WorkingFormat-400Wx400HConversionFormat?context=bWFzdGVyfGltYWdlc3w1NjMwMXxpbWFnZS9qcGVnfGltYWdlcy9oODEvaDc3LzExODU4MDkwNjg4NTQyLmpwZ3w0OTBjMDk0ODcyOTM2MGM3ZjU4Y2RkN2ExYmIxYzdlNTIzZjI2YTc0MTMxY2VmNjViOGRjNzhhMmI2YTkzOTUy";
                    }
                @endphp
                <div class="zoom-left">
                    <div style="height:400px;width:400px;" class="zoomWrapper"><img style="border: 1px solid rgb(232, 232, 230); position: absolute;" id="zoom_03" src="{{ $logo  }}" data-zoom-image="{{ $logo }}"></div>

                    <div class="clearfix"></div>

                    <div id="gallery_01" style="width:500px; float:left; ">
                        @foreach($images as $key=>$image)
                        <a href="#" class="elevatezoom-gallery @if($key == 0) active" @endif data-update="" data-image="{{ asset('uploads/alser/'.$image) }}" data-zoom-image="{{ asset('uploads/alser/'.$image) }}">
                            <img src="{{ asset('uploads/alser/'.$image) }}" width="100"></a>

                        @endforeach
                    </div>
                </div>
            @endif
        </div>
        <div class="col-md-6">
            <div class="tovar-price">
                <table>
                    <tbody><tr>
                        <td class="price-td"><span>Розница:</span> 12000 ₸</td>
                        <td><img src="img/wallet.png" alt=""> 2300 ₸ </td>
                    </tr>
                    <tr>
                        <td class="price-td"><span>Опт (от 10 шт):</span> 12000 ₸</td>
                        <td><img src="img/wallet.png" alt=""> 2300 ₸ </td>
                    </tr>
                    </tbody></table>
            </div>
            <a href="" class="button"><span>Продать</span></a>
            <div class="block-on">
                <div class="on">Есть в наличии</div>
            </div>
            <div class="count">
                <p>Купили: 1278 чел </p>
                <p>Интересовались: 2500 чел </p>
            </div>
            <div class="product-description__columns">
                <div class="product-description__column">
                    <a href="/productsComparison/view" style="visibility: hidden;" id="pageProductsComparionUrl"></a>

                    <div class="basetile__to-compare product-icons-masked">
                        <input id="toCompare70820" type="checkbox" name="toCompare" data-action="/productsComparison/add?productCode=70820&amp;categoryName=%d0%a1%d0%bc%d0%b0%d1%80%d1%82%d1%84%d0%be%d0%bd%d1%8b">
                        <label for="toCompare70820" class="product-icons-masked__label" title="К сравнению">
                            <span class="product-icons-masked__i product-icons-masked__i_tocompare"></span>
                            К сравнению</label>
                    </div><a name="wishlist"></a>
                    <!-- REPLACE W/ TRUE URL PATHs: .../favorite-products/add -->

                    <div class="basetile__to-favorite-products product-icons-masked">
                        <div class="product-icons-masked__label">
                            <a href="#" class="js-ch-popup favoriteProductsPage" data-id="tpLogin" title="Добавить в мои желания">
                                <span class="product-icons-masked__i product-icons-masked__i_tofav"></span>
                                Добавить в мои желания</a>
                        </div>
                    </div>
                    <script id="tpLoginwishlist" type="text/x-mustache-template">
                        <div class="popup-node">
                            <div class="login-popup__content">
                                <div class="popup-error__message hidden">
                                    <div class="alert negative noSpace">Неверно введен адрес электронной почты или пароль.</div>
                                </div>
                                <div class="popup-title">Вход на сайт</div>
                                <div class="ch-col">
                                    <div class="form_field-elements">
                                        <div class="control-group">
                                            <label class="ch-line__name control-label" for="j_username">Электронная почта</label>
                                            <div class="controls ch-line-field">
                                                <div class="ch-custom-field">
                                                    <input id="j_username" name="j_username" class="ch-field__inp text" type="text" value="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="ch-line__name control-label " for="j_password">Пароль</label>
                                            <div class="controls ch-line-field">
                                                <div class="ch-custom-field">
                                                    <input id="j_password" name="j_password" class="ch-field__inp text" type="password" value="">
                                                </div>
                                            </div>
                                            <a href="#" class="popup-sub__link js-ch-popup" data-id="tpRestoreEmail">Я забыл пароль</a>
                                        </div>
                                    </div>
                                    <input type="hidden" name="ajax" value="yes" />
                                    <a href="#" class="popup-btn cus-btn cus-btn__full js-popup-send-btn" data-name="login" data-type="json" data-url="/checkout/j_spring_security_check" data-place="wishlist" data-redirect="/my-account/add-favorite-products?productCode=70820&categoryName=%d0%a1%d0%bc%d0%b0%d1%80%d1%82%d1%84%d0%be%d0%bd%d1%8b">Войти</a>
                                </div>
                                <div><a class="popup-sub__link" href="/login">Я еще не зарегистрирован</a></div>
                                <div class="popup-social__login">
                                    <p>Авторизоваться через соц. сети</p>
                                    <div class="popupSocialLinks">
                                        <div class="social-likes_sq">
                                            <a class="social-login" href="#" onclick="ACC.socialLogin('facebook', '1657912167773130', 'https://www.technodom.kz/social2/connect-facebook');return false">
                                                <span class="social-likes__icon social-likes__icon_facebook"></span>
                                            </a>
                                            <a class="social-login social-login_vk" href="#" onclick="ACC.socialLogin('vkontakte', '4813149', 'https://www.technodom.kz/social2/connect-vkontakte');return false">
                                                <span class="social-likes__icon social-likes__icon_vkontakte"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </script>

                    <div class="product-icons-masked product-icons-masked_active" id="toMonitoringPriceOn" data-monitoringpriceid="70820" style="display:none">
                        <div class="product-icons-masked__label product-icons-masked__label_active">
                            <span class="product-icons-masked__i product-icons-masked__i_towhitelist product-icons-masked__i_active"></span>
                            В листе ожидания</div>
                    </div>
                    <div class="basetile__to-favorite-products product-icons-masked product-icons-masked" id="toMonitoringPriceWrapper">
                        <label id="toMonitoringPrice" waitingredirect="false" for="toMonitoringPrice70820" data-monitoringprice="70820" data-codeproduct="70820" class="product-icons-masked__label">
                            <a href="#" class="js-ch-popup" data-url="/catalog/smartphones/p/gsm-huawei-p-lite-gb-thx-pink-70820/addToListMonitoring" data-id="tpGetEmailForMonitoringProduct" title="Следить за ценой">
                                <span class="product-icons-masked__i product-icons-masked__i_towhitelist"></span>
                                Следить за ценой</a>
                        </label>
                    </div>
                </div>
            </div>
            <div class="preim">
                <ul>
                    <li class="ship">Доставка по Казахстану</li>
                    <li class="cart">Удобные методы оплаты</li>
                    <li class="refund">Обмен и возврат 14 дней</li>
                </ul>
            </div>



        </div>
    </div>
    <div class="tab">

        <ul class="tabs active">
            <li class="current"><a href="#">описание</a></li>
            <li><a href="#">характеристики</a></li>
            <li><a href="#">отзывы</a></li>
            <li><a href="#">поставщик</a></li>
            <li><a href="#">рекламировать</a></li>
        </ul> <!-- / tabs -->

        <div class="tab_content">

            <div class="tabs_item">
                {!! $product->full_text !!}
            </div> <!-- / tabs_item -->

            <div class="tabs_item">
                {!! $product->description !!}
            </div> <!-- / tabs_item -->

            <div class="tabs_item">
                <img src="https://cdn.dribbble.com/users/545884/screenshots/3557299/mo-t.png">
                <h4>Tab03</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, excepturi, minima, corporis deserunt quia quae sit officiis labore inventore autem a delectus consequuntur voluptatem modi eligendi similique sed nam vitae.</p>
            </div> <!-- / tabs_item -->

            <div class="tabs_item">
                <img src="https://cdn.dribbble.com/users/545884/screenshots/3557299/mo-t.png">
                <h4>Tab04</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, excepturi, minima, corporis deserunt quia quae sit officiis labore inventore autem a delectus consequuntur voluptatem modi eligendi similique sed nam vitae.</p>
            </div> <!-- / tabs_item -->

            <div class="tabs_item">
                <div class="reklama">
                    <div class="site">
                        <p>Размещайте объявления <br> на бесплатных сайтах</p>
                        <div class="social-ads">
                            <img src="img/olx.png" alt="">
                            <img src="img/market.png" alt="" width="110"><br>
                            <img src="img/alfa.png" alt="" width="">
                            <img src="img/kolesa.png" alt="" width="90">
                            <img src="img/forte.png" alt="" width="200">
                        </div>
                    </div>

                    <div class="site">
                        <div class="social">
                            <p>Продавайте через<br> страницы в соц. сетях</p>
                            <div class="social-icon">
                                <img src="img/vk.png" alt="" width="50">
                                <img src="img/instagram.png" alt="" height="50">
                                <img src="img/fb.png" alt="" height="50">
                            </div>

                        </div>
                    </div>

                    <div class="site">
                        <p>Рекламируйте свой магазин в поисковиках</p>
                        <div class="social">

                            <div class="social-icon">
                                <img src="img/yandex.png" alt="">
                            </div>

                        </div>
                    </div>

                    <div class="site">
                        <p>Делайте рекламную рассылку через мессенждеры</p>

                    </div>
                </div>
            </div> <!-- / tabs_item -->

            <div class="tabs_item">
                <img src="https://cdn.dribbble.com/users/545884/screenshots/3557299/mo-t.png">
                <h4>Tab06</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, excepturi, minima, corporis deserunt quia quae sit officiis labore inventore autem a delectus consequuntur voluptatem modi eligendi similique sed nam vitae.</p>
            </div> <!-- / tabs_item -->

        </div> <!-- / tab_content -->
    </div> <!-- / tab -->

@stop