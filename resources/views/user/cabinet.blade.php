@extends('layouts.app')
@section('content')
    <div class="tab">

        <ul class="tabs">
            <li><a href="#">Мой профиль</a></li>
            <li><a href="#">Мои покупки</a></li>
            <li><a href="#">Мой бизнес</a></li>
            <li><a href="#">Статистика</a></li>
        </ul> <!-- / tabs -->

        <div class="tab_content business">

            <div class="tabs_item">
                <div class="profile-content">
                    <div class="profile-info">
                        <div class="ava">
                            <img src="img/ava.png" alt="">
                        </div>
                        <div class="profile-content-info">
                            <p class="name">Алексей Болотов</p>
                            <p class="email">d1one7@ya.ru</p>
                            <p class="num">+79500001515</p>

                            <a href="" class="edit">Редактировать</a>
                        </div>
                    </div>

                    <div class="profile-card">
                        <img src="img/card.png" alt="">
                        <div class="card-info">
                            <p>На счету: 120500 тг</p>
                            <div class="profile-btn-group">
                                <a href="" class="plus">пополнить</a>
                                <a href="" class="minus">вывести</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- / tabs_item -->

            <div class="tabs_item">
                <img src="https://cdn.dribbble.com/users/545884/screenshots/3576036/liberosis_--_10.png">
                <h4>Tab02 Maiores, suscipit</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, suscipit, eaque asperiores neque numquam nam possimus dolorem ipsa aspernatur reiciendis?</p>
            </div> <!-- / tabs_item -->

            <div class="tabs_item mybusiness">

                <div class="tab">

                    <ul class="tabs">
                        <li><a href="#">Основное</a></li>
                        <li><a href="#">Заказы</a></li>
                        <li><a href="#">CRM система</a></li>
                        <li><a href="#">Добавить предложение</a></li>
                        <li><a href="#">Новости</a></li>
                        <li><a href="#">Обучение</a></li>
                    </ul> <!-- / tabs -->

                    <div class="tab_content">

                        <div class="tabs_item">
                            <div class="osnovnoe">
                                <div class="dohod">
                                    <table>
                                        <tr>
                                            <th colspan="2">доход в тенге (?)</th>
                                        </tr>
                                        <tr>
                                            <td>Сегодня</td>
                                            <td>150 тг</td>
                                        </tr>
                                        <tr>
                                            <td>Неделя</td>
                                            <td>250000 тг</td>
                                        </tr>
                                        <tr>
                                            <td>Месяц</td>


                                            <td>5000000 тг</td>
                                        </tr>
                                    </table>

                                    <table>
                                        <tr>
                                            <th colspan="2">Ваш рейтинг</th>
                                        </tr>
                                        <tr>
                                            <td>Ваш рейтинг: 8/10</td>
                                        </tr>
                                        <tr>
                                            <td>Место в TOP: 10/11200</td>
                                        </tr>
                                        <tr>
                                            <td>Отзывы клиентов: 4,5/5.0</td>

                                        </tr>
                                    </table>
                                    <div class="business-btn-group">
                                        <a href="" class="dannye">Данные по вашему бизнесу</a>
                                        <a href="" class="presentation">Презентация</a>
                                        <a href="" class="view-video">Посмотреть видео</a>

                                    </div>
                                </div>
                                <div class="open-shop">
                                    <div class="open-shop-content">
                                        <p>Открой свой онлайн магазин</p>
                                        <form action="">
                                            <input type="text" placeholder="Придумайте название.."><br>
                                            <label class="file" title=""><input type="file"></label> <br>
                                            <input type="submit" value="Отправить заявку">
                                            <p class="info">Получите готовый онлайн магазин с 100000 товаров и других интересных предложений для выгодных продаж</p>
                                        </form>
                                    </div>
                                </div>
                                <div class="osnovnoe-info">
                                    <p>Мы даем огромные возможности для быстрого создания бизнеса</p>
                                    <p>Сервис по продаже авиабилетов и туров<span>Скоро</span></p>
                                    <p>Cashback сайт с 1000 мировых магазинов<span>Скоро</span></p>
                                    <p>Здесь есть качественные landing page с Вашими данными <a href="" class="red-btn">посмотреть</a></p>
                                </div>
                            </div>
                        </div> <!-- / tabs_item -->

                        <div class="tabs_item">

                            <div class="table">
                                <table>
                                    <tr>
                                        <th>Место</th>
                                        <th>Клиент</th>
                                        <th>Кол-во покупок</th>
                                        <th>Последний заказ</th>
                                        <th>Последний заказ</th>
                                        <th>Последний заказ</th>
                                        <th>Последний заказ</th>
                                        <th>Последний заказ</th>
                                        <th>Последний заказ</th>
                                        <th>Последний заказ</th>
                                    </tr>

                                    <tr>
                                        <td>1</td>
                                        <td>Александр <br>Сергеевич <br> Пушкин</td>
                                        <td>250</td>
                                        <td>250</td>
                                        <td>250</td>
                                        <td>250</td>
                                        <td>250</td>
                                        <td>250</td>
                                        <td>250</td>
                                        <td>250</td>
                                        <td>iPhone XS <br>
                                            02.10.18 <br>
                                            1500 тг</td>
                                    </tr>
                                </table>
                            </div>
                        </div> <!-- / tabs_item -->

                        <div class="tabs_item crm-sistema">
                            <p>Всего клиентов: 110</p>
                            <p>Активных клиентов: 1106</p>
                            <h3>TOP клиентов</h3>
                            <!--  <div class="tab">
                                  <ul class="tabs">
                                      <li class=""><a href="#">кол-во покупок</a></li>
                                      <li><a href="#">прибыль</a></li>
                                  </ul>
                                  <div class="tab_content crm-tab">
                                      <div class="tabs_item flex">
                                          <div class="table">
                                              <table>
                                                  <tr>
                                                      <th>Место</th>
                                                      <th>Клиент</th>
                                                      <th>Кол-во покупок</th>
                                                      <th>Последний заказ</th>
                                                  </tr>
                                                  <tr>
                                                      <td>1</td>
                                                      <td>Александр <br>Сергеевич <br> Пушкин</td>
                                                      <td>250</td>
                                                      <td>iPhone XS <br>
                                                          02.10.18 <br>
                                                          1500 тг</td>
                                                  </tr>
                                              </table>
                                          </div>
                                          <div class="client-info">
                                              <p>Получить информацию о клиенте</p>
                                              <form class="search">
                                                  <input class="searchTerm" placeholder="Номер телефона или ФИО.." type="text"><input class="searchButton" type="submit">
                                              </form>
                                               <div class="table">
                                              <table>
                                                  <tr>
                                                      <th>Место</th>
                                                      <th>Клиент</th>
                                                      <th>Кол-во покупок</th>
                                                      <th>Последний заказ</th>
                                                  </tr>
                                                  <tr>
                                                      <td>1</td>
                                                      <td>Александр <br>Сергеевич <br> Пушкин</td>
                                                      <td>250</td>
                                                      <td>iPhone XS <br>
                                                          02.10.18 <br>
                                                          1500 тг</td>
                                                  </tr>
                                              </table>
                                          </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="tabs_item">
                                      <img src="https://cdn.dribbble.com/users/545884/screenshots/3557299/mo-t.png">
                                      <h4>Tab06</h4>
                                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, excepturi, minima, corporis deserunt quia quae sit officiis labore inventore autem a delectus consequuntur voluptatem modi eligendi similique sed nam vitae.</p>
                                  </div>

                              </div> -->
                        </div>

                        <div class="tabs_item">
                            <img src="https://cdn.dribbble.com/users/545884/screenshots/3557299/mo-t.png">
                            <h4>Tab04</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, excepturi, minima, corporis deserunt quia quae sit officiis labore inventore autem a delectus consequuntur voluptatem modi eligendi similique sed nam vitae.</p>
                        </div>

                        <div class="tabs_item new-item">
                            <div class="new">
                                <span>Хит</span>
                                <div class="new-img">
                                    <img src="img/new.png" alt="">
                                </div>
                                <p class="new-title">Новая новость</p>
                                <a href="" class="red-btn">Подробнее</a>
                            </div>
                            <div class="new">
                                <span>Хит</span>
                                <div class="new-img">
                                    <img src="img/new.png" alt="">
                                </div>
                                <p class="new-title">Новая новость</p>
                                <a href="" class="red-btn">Подробнее</a>
                            </div>
                            <div class="new">
                                <span>Хит</span>
                                <div class="new-img">
                                    <img src="img/new.png" alt="">
                                </div>
                                <p class="new-title">Новая новость</p>
                                <a href="" class="red-btn">Подробнее</a>
                            </div>
                        </div>

                        <div class="tabs_item">
                            <div class="table">
                                <table>
                                    <tr>
                                        <th>Место</th>
                                        <th>Клиент</th>
                                        <th>Кол-во покупок</th>
                                        <th>Последний заказ</th>
                                        <th>Последний заказ</th>
                                        <th>Последний заказ</th>
                                        <th>Последний заказ</th>
                                        <th>Последний заказ</th>
                                        <th>Последний заказ</th>
                                        <th>Последний заказ</th>
                                    </tr>

                                    <tr>
                                        <td>1</td>
                                        <td>Александр <br>Сергеевич <br> Пушкин</td>
                                        <td>250</td>
                                        <td>250</td>
                                        <td>250</td>
                                        <td>250</td>
                                        <td>250</td>
                                        <td>250</td>
                                        <td>250</td>
                                        <td>250</td>
                                        <td>iPhone XS <br>
                                            02.10.18 <br>
                                            1500 тг</td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                    </div>


                    <!-- / tabs_item -->
                </div>


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
    </div> <!-- / tabs_item -->

    <div class="tabs_item">
        <img src="https://cdn.dribbble.com/users/545884/screenshots/3557299/mo-t.png">
        <h4>Tab04</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, excepturi, minima, corporis deserunt quia quae sit officiis labore inventore autem a delectus consequuntur voluptatem modi eligendi similique sed nam vitae.</p>
    </div> <!-- / tabs_item -->

    <div class="tabs_item crm-sistema">
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
@stop