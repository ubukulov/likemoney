@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="tovar">
                <h3>{!! $product->title !!}</h3>
                <p class="artikul">артикул: {!! $product->id !!}</p>
            </div>
            <div class="clrfx"></div>
            <div class="zoom-left">
                <img style="border:1px solid #e8e8e6;" id="zoom_03" src="https://static.technodom.kz/medias/103578-1qwes.jpg-Default-WorkingFormat-400Wx400HConversionFormat?context=bWFzdGVyfGltYWdlc3w1NjMwMXxpbWFnZS9qcGVnfGltYWdlcy9oODEvaDc3LzExODU4MDkwNjg4NTQyLmpwZ3w0OTBjMDk0ODcyOTM2MGM3ZjU4Y2RkN2ExYmIxYzdlNTIzZjI2YTc0MTMxY2VmNjViOGRjNzhhMmI2YTkzOTUy" data-zoom-image="https://static.technodom.kz/medias/103578-1.jpg?context=bWFzdGVyfGltYWdlc3w2ODAzMzV8aW1hZ2UvanBlZ3xpbWFnZXMvaGJmL2g2Mi8xMTg1ODA5MDQyNjM5OC5qcGd8ZTkxOGI5MjgxODRjZWZlNjM5ZmJkYTJjNDY2NjViYzdmMGE2NDljMmZlNTk0MWMwZmQwNDI2OGE4YmVjNTA0Mw"  />
                <div class="clearfix"></div>

                <div id="gallery_01" style="width:500px; float:left; ">

                    <a href="#" class="elevatezoom-gallery active" data-update="" data-image="https://static.technodom.kz/medias/103578-1qwes.jpg-Default-WorkingFormat-400Wx400HConversionFormat?context=bWFzdGVyfGltYWdlc3w1NjMwMXxpbWFnZS9qcGVnfGltYWdlcy9oODEvaDc3LzExODU4MDkwNjg4NTQyLmpwZ3w0OTBjMDk0ODcyOTM2MGM3ZjU4Y2RkN2ExYmIxYzdlNTIzZjI2YTc0MTMxY2VmNjViOGRjNzhhMmI2YTkzOTUy" data-zoom-image="https://www.elevateweb.co.uk/wp-content/themes/radial/zoom/images/large/image1.jpg">
                        <img src="https://static.technodom.kz/medias/103578-1qwes.jpg-Default-WorkingFormat-400Wx400HConversionFormat?context=bWFzdGVyfGltYWdlc3w1NjMwMXxpbWFnZS9qcGVnfGltYWdlcy9oODEvaDc3LzExODU4MDkwNjg4NTQyLmpwZ3w0OTBjMDk0ODcyOTM2MGM3ZjU4Y2RkN2ExYmIxYzdlNTIzZjI2YTc0MTMxY2VmNjViOGRjNzhhMmI2YTkzOTUy" width="100" /></a>

                    <a href="#" class="elevatezoom-gallery" data-image="https://static.technodom.kz/medias/103578-1qwes.jpg-Default-WorkingFormat-400Wx400HConversionFormat?context=bWFzdGVyfGltYWdlc3w1NjMwMXxpbWFnZS9qcGVnfGltYWdlcy9oODEvaDc3LzExODU4MDkwNjg4NTQyLmpwZ3w0OTBjMDk0ODcyOTM2MGM3ZjU4Y2RkN2ExYmIxYzdlNTIzZjI2YTc0MTMxY2VmNjViOGRjNzhhMmI2YTkzOTUy" data-zoom-image="https://static.technodom.kz/medias/103578-1.jpg?context=bWFzdGVyfGltYWdlc3w2ODAzMzV8aW1hZ2UvanBlZ3xpbWFnZXMvaGJmL2g2Mi8xMTg1ODA5MDQyNjM5OC5qcGd8ZTkxOGI5MjgxODRjZWZlNjM5ZmJkYTJjNDY2NjViYzdmMGE2NDljMmZlNTk0MWMwZmQwNDI2OGE4YmVjNTA0Mw"><img src="https://static.technodom.kz/medias/103578-1qwes.jpg-Default-WorkingFormat-400Wx400HConversionFormat?context=bWFzdGVyfGltYWdlc3w1NjMwMXxpbWFnZS9qcGVnfGltYWdlcy9oODEvaDc3LzExODU4MDkwNjg4NTQyLmpwZ3w0OTBjMDk0ODcyOTM2MGM3ZjU4Y2RkN2ExYmIxYzdlNTIzZjI2YTc0MTMxY2VmNjViOGRjNzhhMmI2YTkzOTUy" width="100" /></a>

                    <a href="tester" class="elevatezoom-gallery" data-image="https://static.technodom.kz/medias/103578-1qwes.jpg-Default-WorkingFormat-400Wx400HConversionFormat?context=bWFzdGVyfGltYWdlc3w1NjMwMXxpbWFnZS9qcGVnfGltYWdlcy9oODEvaDc3LzExODU4MDkwNjg4NTQyLmpwZ3w0OTBjMDk0ODcyOTM2MGM3ZjU4Y2RkN2ExYmIxYzdlNTIzZjI2YTc0MTMxY2VmNjViOGRjNzhhMmI2YTkzOTUy" data-zoom-image="https://static.technodom.kz/medias/103578-1.jpg?context=bWFzdGVyfGltYWdlc3w2ODAzMzV8aW1hZ2UvanBlZ3xpbWFnZXMvaGJmL2g2Mi8xMTg1ODA5MDQyNjM5OC5qcGd8ZTkxOGI5MjgxODRjZWZlNjM5ZmJkYTJjNDY2NjViYzdmMGE2NDljMmZlNTk0MWMwZmQwNDI2OGE4YmVjNTA0Mw">
                        <img src="https://static.technodom.kz/medias/103578-1qwes.jpg-Default-WorkingFormat-400Wx400HConversionFormat?context=bWFzdGVyfGltYWdlc3w1NjMwMXxpbWFnZS9qcGVnfGltYWdlcy9oODEvaDc3LzExODU4MDkwNjg4NTQyLmpwZ3w0OTBjMDk0ODcyOTM2MGM3ZjU4Y2RkN2ExYmIxYzdlNTIzZjI2YTc0MTMxY2VmNjViOGRjNzhhMmI2YTkzOTUy" width="100" />
                    </a>

                    <a href="tester" class="elevatezoom-gallery" data-image="https://static.technodom.kz/medias/103578-1qwes.jpg-Default-WorkingFormat-400Wx400HConversionFormat?context=bWFzdGVyfGltYWdlc3w1NjMwMXxpbWFnZS9qcGVnfGltYWdlcy9oODEvaDc3LzExODU4MDkwNjg4NTQyLmpwZ3w0OTBjMDk0ODcyOTM2MGM3ZjU4Y2RkN2ExYmIxYzdlNTIzZjI2YTc0MTMxY2VmNjViOGRjNzhhMmI2YTkzOTUy" data-zoom-image="https://static.technodom.kz/medias/103578-1.jpg?context=bWFzdGVyfGltYWdlc3w2ODAzMzV8aW1hZ2UvanBlZ3xpbWFnZXMvaGJmL2g2Mi8xMTg1ODA5MDQyNjM5OC5qcGd8ZTkxOGI5MjgxODRjZWZlNjM5ZmJkYTJjNDY2NjViYzdmMGE2NDljMmZlNTk0MWMwZmQwNDI2OGE4YmVjNTA0Mw" class="slide-content"><img src="https://static.technodom.kz/medias/103578-1qwes.jpg-Default-WorkingFormat-400Wx400HConversionFormat?context=bWFzdGVyfGltYWdlc3w1NjMwMXxpbWFnZS9qcGVnfGltYWdlcy9oODEvaDc3LzExODU4MDkwNjg4NTQyLmpwZ3w0OTBjMDk0ODcyOTM2MGM3ZjU4Y2RkN2ExYmIxYzdlNTIzZjI2YTc0MTMxY2VmNjViOGRjNzhhMmI2YTkzOTUy" width="100" /></a>

                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="tovar-price">
                <table>
                    <tr>
                        <td><span>Цена:</span> 12 000 тг</td>
                        <td><span>доход:</span> 2300 тг </td>
                    </tr>
                    <tr>
                        <td><span>Цена:</span> 12 000 тг</td>
                        <td><span>доход:</span> 2300 тг </td>
                    </tr>
                </table>
            </div>
            <a href="" class="button">Продать</a>
            <div class="block-on">
                <div class="on">Есть в наличии</div>
            </div>
            <div class="preim">
                <ul>
                    <li class="ship">Доставка по Казахстану</li>
                    <li class="cart">Удобные методы оплаты</li>
                    <li class="refund">Обмен и возврат 14 дней</li>
                </ul>
            </div>
            <div class="count">
                <p>Купили: 1278 чел </p>
                <p>Интересовались: 2500 чел </p>
            </div>


        </div>
    </div>
    <div class="tab">

        <ul class="tabs">
            <li><a href="#">описание</a></li>
            <li><a href="#">характеристики</a></li>
            <li><a href="#">отзывы</a></li>
            <li><a href="#">поставщик</a></li>
            <li><a href="#">рекламировать</a></li>
        </ul> <!-- / tabs -->

        <div class="tab_content">

            <div class="tabs_item">
                <h4>Tab 01 Neque ipsum dolor.</h4>
                <p>Consectetur adipisicing elit. Neque, repellat facilis totam ab eos distinctio sint atque maiores! Dignissimos, molestiae, rem accusantium iure vitae voluptatum voluptas repudiandae deserunt dolore quis! Quisquam mollitia eius sed.</p>
            </div> <!-- / tabs_item -->

            <div class="tabs_item">
                <img src="https://cdn.dribbble.com/users/545884/screenshots/3576036/liberosis_--_10.png">
                <h4>Tab02 Maiores, suscipit</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, suscipit, eaque asperiores neque numquam nam possimus dolorem ipsa aspernatur reiciendis?</p>
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
                        <p>Размещайте объявления на бесплатных сайтах</p>
                    </div>

                    <div class="social">
                        <p>Продавайте через страницы в соц. сетях</p>

                    </div>

                    <div class="site">
                        <p>Рекламируйте свой магазин в поисковиках</p>

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