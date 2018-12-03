@extends('layouts.app')
@section('content')
    @if(count($items) > 0)
    <div class="box-relative phbspace-10 box-960 box-center container content content-main order">
        <div class="box pspace-20">
            <div class="mhtspace-20 three-quarters-of-parent box-center section-checkout">
                <legend class="form-header">Оформление заказа</legend>
                <ul class="col-12 box-left mhbspace-20 text-center">
                </ul>
                <div class="mhbspace-10 modal-cart">
                    <span class="loyalty-meta-info" data-user-authorized="0" data-user-participates-in-loyalty-program="0" data-user-loyalty-balance="0"></span>
                    <table class="table-items table-items__basket-list">
                        <thead class="table-header">
                        <tr>
                            <th>Наименование</th>
                            <th class="">Цена
                                <table>
                                    <tr>
                                        <td style="margin-right: 15px; display: block;">розничная </td>
                                        <td>Оптовая</td>
                                    </tr>
                                </table>
                            </th>
                            <th>Количество</th>
                            <th class=""><span id="col-bonus" style="visibility: hidden;">Бонусы</span></th>
                            <th class="text-right pvrspace-20">Стоимость</th>
                            <th>&nbsp;</th>
                        </tr>
                        </thead>

                        <tbody class="table-body">

                        @foreach($items as $item)

                        <tr id="line438179" class="table-item ecommerce-tracked-cart-item" data-code="{{ $item->id }}" data-cert="" data-product-title="{{ $item->name }}" data-product-vendor="ИНТЕРСКОЛ" data-product-category="Мойки высокого давления" data-product-price="{{ $item->price }}" data-product-variant="Получить завтра" data-product-quantity="{{ $item->quantity }}">

                            <td class="table-item-name">
                                <a target="_blank" id="cart-product-link-438179" class="ecommerce-tracked-product-link ecommerce-tracked-product" href="{{ url('product/'.$item->id) }}" title="Перейти на страницу товара" data-code="{{ $item->id }}" data-product-title="{{ $item->name }}" data-product-vendor="ИНТЕРСКОЛ" data-product-category="Мойки высокого давления" data-product-price="{{ $item->price }}" data-product-variant="Получить завтра" data-product-coupon="promo-54%" data-product-promotable="8457" data-product-position="" data-product-quantity="{{ $item->quantity }}">
                                    {{ $item->name }}
                                </a>
                                <div><span class="text-color-silver text-size-small">Код товара {{ $item->id }}</span></div>

                            </td>
                            <td class="table-item-cost">
                                        <span id="price438179" class="item-cost-value" style="margin-right: 15px">
                                            {{ $item->price }} <span class="item-currency">тг.</span>
                                        </span>

                                <span id="price438179" class="item-cost-value">
                                            {{ $item->price }} <span class="item-currency">тг.</span>
                                        </span>

                            </td>

                            <td class="table-item-spinner">
                                        <span class="spinner-wrap">
                                            <input id="{{ $item->id }}" type="number" class="
                                        form-control
                                        js-spinner
                                        amount

                                    " value="{{ $item->quantity }}" data-price="{{ $item->price }}" data-cert="" data-regular-price="7089" data-mnogo-score="" data-loyalty-bonus="0" data-price-loyalty="987" data-send-count="true" />
                                        </span>
                            </td>


                            <td class="table-item-total-loyalty-bonus text-right">

                            </td>


                            <td class="table-item-total-cost">
                                <span id="sum{{ $item->id }}" class="item-total-cost-value">{{ $item->quantity * $item->price }}</span>
                                <span class="item-currency">тг.</span>
                            </td>

                            <td class="table-item-del">
                                <a  href="{{ url('/cart/delete/'.$item->id) }}">&times;</a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>

                    </table>
                    <div class="amount-err-text box-none text-red text-center phspace-10">Выбрано неккоректное количество товаров.</div>

                    <div id="gifts-block">
                    </div>

                    <table class="table-items">

                        <tfoot class="table-footer custome-padding">
                        <tr>
                            <td colspan="" class="text-right" id="cart_footer_row">


                                <table class="box-right">

                                    <tr>

                                        <td colspan="5" rowspan="5" class="pvlspace-10 text-left">
                                            <form action="">
                                                Промо код <span class="input"><input type="text" style="width: auto; margin-right: 15px"><input type="submit" class="box-inline bg-yellow-gradient divider-yellow text-underline-none box-model-border cursor-pointer pvspace-25 phspace-10 text-underline-none radius-3" value="Активировать" style="margin-right: 15px"></span>
                                            </form>
                                        </td>
                                        <td></td>
                                        <td class="text-right"><span class="text-muted">Итого</span>: <span id="total_sum" class="items-value">{{ \Cart::getTotal() }}</span>
                                            <span class="items-currency">тг.</span></td>


                                    </tr>



                                    <tr id="paid_with_loyalty_row" hidden>
                                        <td>Оплачено бонусами:</td>
                                        <td class="pvlspace-10 text-right">
                                            <span class="voltic-node voltic-icon"><i class="icon voltic-voltic"></i></span>
                                            <span class="voltic-text-red">-<span id="amount_paid_with_loyalty" class="items-value"></span></span>
                                        </td>
                                    </tr>



                                    <tr id="paid_with_certificate_row" class="text-muted" hidden>
                                        <td>Оплачено сертификатом:</td>
                                        <td class="pvlspace-10 phtspace-5 text-right">
                                            <span class="box-inline icon-certificate-sm-yellow"></span>
                                            <span id="certificate-nominal"></span>
                                            <span class="items-currency"> р.</span>
                                        </td>
                                    </tr>

                                    <tr id="amount_to_pay_row" hidden class="text-h3">
                                        <td>К оплате:</td>
                                        <td class="pvlspace-10 text-right">
                                            <span id="amount_to_pay" class="items-value"></span>
                                            <span class="items-currency">р.</span>
                                        </td>
                                    </tr>




                                    <tr style="display:none;" id="cart_bonus_loyalty">
                                        <td>
                                            <label>
                                                <input type="radio" value="loyalty" name="_group_loyalty" id="bonus_program_selector_loyalty" class="bonus-program-selector" checked style="display:none;">
                                                <span class="voltic-text-gray">Бонусы 220 Вольт:</span>
                                            </label>
                                        </td>
                                        <td class="pvlspace-10">
                                            <div class="voltic-group">
                                                <div class="voltic-node voltic-icon"><i class="icon voltic-voltic"></i></div>
                                                <div class="voltic-node voltic-text-green">+<span id="total_loyalty_bonus">0</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>









                                </table>

                            </td>
                        </tr>
                        </tfoot>

                    </table>






                    <script>
                        var del_btns = document.querySelectorAll('.btn-del');
                        for (var i = 0; i < del_btns.length; i++) {

                            del_btns[i].addEventListener('click', function (event) {
                                event.preventDefault();
                                var data_code = this.getAttribute('data-code');
                                if (!!this.getAttribute('data-cert')) {
                                    var data_cert = this.getAttribute('data-cert');
                                    return basketObj.del(data_cert);
                                } else {
                                    return basketObj.del(data_code);
                                }
                            });
                        }
                    </script>

                </div>






                <div class="text-center">


                </div>




                <p class="text-red"></p>



                <form id="order-form" accept-charset="windows-1251" action="/order/send/" method="post" data-csrf="" novalidate>
                    <input type="hidden" id="__form_charset" name="__form_charset" value="windows-1251" />
                    <input type="hidden" id="use_loyalty_for_order" name="use_loyalty_for_order" value="0" />
                    <input type="hidden" id="bonus_program_value" name="bonus_program" value="unknown" />
                    <input type="hidden" id="is_physical_certs_tab" name="has_physical_tab" value="" />
                    <input type="hidden" id="stock-id" value="78" />
                    <div class="form-group">
                        <div class="phspace-20 pvspace-30 mhbspace-40 bg-lightgray radius-top-md">
                            <div class="head-2 text-strong">Контактная информация</div>
                        </div>
                        <div class="three-quarters-of-parent box-center">
                            <!-- span id="last-error" class="required"></span -->
                            <p><span class="label1"><label for="user_fullname">Контактное лицо<span class="required"> *</span></label></span><span class="input"><input id="user_fullname" name="user_fullname" type="text" onblur="this.rstate=validateMinMax(this.value, 2, 255); this.errmsg='Поле должно быть заполнено';" value="" placeholder="Пример: Иван Иванович Иванов" /></span><span id="err_user_fullname" class="required-error-message"></span><span class="required-valid-message"></span></p>
                            <p><span class="label1"><label for="user_phone">Телефон<span class="required"> *</span></label></span><span class="input select2-phone select2-container"><select name="user_phone_prefix" id="user_phone_prefix" class="" data-width="37.467%" style="width:  37.467%" onblur="this.rstate=1;">
                                            <option value="+7" selected="selected">Россия</option>
                                            <option value="+375">Беларусь</option>
                                            <option value="+7">Казахстан</option>
                                        </select><input id="user_phone" name="user_phone" type="text" value="" onblur="this.rstate=validatePhone(this.value); this.errmsg='Поле заполнено неверно';" placeholder="Пример: (987) 654-32-10" /></span><span id="err_user_phone" class="required-error-message"></span><span class="required-valid-message"></span></p>
                            <p><span class="label1"><label for="user_email">Email адрес<span class="required"> *</span></label></span><span class="input"><input id="user_email" name="user_email" type="text" value="" onblur="this.rstate=validateEmail(this.value); this.errmsg='Неправильный email адрес';" placeholder="Пример: ivanov@supermail.ru" /></span><span id="err_user_email" class="required-error-message"></span><span class="required-valid-message"></span></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="phspace-20 pvspace-30 mhbspace-40 bg-lightgray">
                            <div class="head-2 text-strong">Доставка</div>
                        </div>
                        <div class="three-quarters-of-parent box-center">
                            <div class="mhbspace-10"><span class="label1"><label for="city">Город</label></span><span class="input select2-city"><select name="city" id="city" data-width="100%" onblur="this.rstate=1;">
                                            <option value="0">Другой город</option>
                                            <option value="7700000000000">Москва</option>
                                            <option value="7800000000000" selected="selected">Санкт-Петербург</option>
                                            <option value="5400000100000">Новосибирск</option>
                                            <option value="6600000100000">Екатеринбург</option>
                                            <option value="6100000100000">Ростов-на-Дону</option>
                                            <option value="3000000100000">Астрахань</option>
                                            <option value="3100000100000">Белгород</option>
                                            <option value="3200000100000">Брянск</option>
                                            <option value="5300000100000">Великий Новгород</option>
                                            <option value="2500000100000">Владивосток</option>
                                            <option value="3600000100000">Воронеж</option>
                                            <option value="1800000100000">Ижевск</option>
                                            <option value="1200000100000">Йошкар-Ола</option>
                                            <option value="1600000100000">Казань</option>
                                            <option value="2300000100000">Краснодар</option>
                                            <option value="4800000100000">Липецк</option>
                                            <option value="0500000100000">Махачкала</option>
                                            <option value="0700000100000">Нальчик</option>
                                            <option value="8300000100000">Нарьян-Мар</option>
                                            <option value="5200000100000">Нижний Новгород</option>
                                            <option value="5500000100000">Омск</option>
                                            <option value="5600000100000">Оренбург</option>
                                            <option value="5800000100000">Пенза</option>
                                            <option value="5900000100000">Пермь</option>
                                            <option value="6200000100000">Рязань</option>
                                            <option value="6300000100000">Самара</option>
                                            <option value="6700000300000">Смоленск</option>
                                            <option value="8600001000000">Сургут</option>
                                            <option value="6900000100000">Тверь</option>
                                            <option value="7000000100000">Томск</option>
                                            <option value="7100000100000">Тула</option>
                                            <option value="7200000100000">Тюмень</option>
                                            <option value="0200000100000">Уфа</option>
                                            <option value="2700000100000">Хабаровск</option>
                                            <option value="7400000100000">Челябинск</option>
                                            <option value="7600000100000">Ярославль</option>
                                            <option value="5200000500000">Бор</option>
                                            <option value="4700600100000">Выборг</option>
                                            <option value="1800000400000">Глазов</option>
                                            <option value="5000002900000">Долгопрудный</option>
                                            <option value="1600000200000">Набережные Челны</option>
                                        </select></span></div>
                            <div id="region-finder-container" class="box-relative z-index-1" hidden><span class="label1"><label for="region_finder">Укажите город или область</label></span><span class="input"><input type="text" id="region_finder" name="region_finder" value="" onblur="this.rstate=validateMinMax(this.value, 2, 255); this.errmsg='Поле должно быть заполнено';" class="js-autocomplite" data-append-to="#region-finder-container" data-relocation="true" data-url="/order/region/" disabled><input type="hidden" id="region_code" name="region_code" value="" /><span id="err_region_finder" class="required-error-message"></span><span class="required-valid-message"></span></span></div><input type="hidden" id="defaultDelivery" value="">
                            <div id="delivery-options-placeholder">

                            </div>
                        </div>
                    </div>
                    <div id="full-address-placeholder">
                        <div class="form-group">
                            <div class="phspace-20 pvspace-30 mhbspace-40 bg-lightgray">
                                <div class="head-2 text-strong">Адрес доставки</div>
                            </div>
                            <div class="col-9 box-center checkout-address-block">
                                <div class="mhbspace-10 box-relative z-index-1" id="choice-street"><span class="box-inline col-3"><label for="user_address_street">Улица<span class="required"> *</span></label></span><span class="box-inline col-9"><input id="user_address_street" name="user_address_street" type="text" onblur="this.rstate=validateMinMax(this.value, 2, 255); this.errmsg='Поле должно быть заполнено.'; if (this.rstate) this.classList.remove('required-error');" placeholder="Пример: Рубинштейна" class="js-autocomplite" data-append-to="#choice-street" data-min-length="3" data-relocation="true" data-url="/order/street/" /><input id="user_address_street_code" name="street_code" type="hidden" /></span><span id="err_street_name" class="required-error-message"></span><span class="required-valid-message"></span></div>
                                <p class="offset-quater-of-parent clearfix"><span class="float-box-left half-of-parent mhbspace-10"><span class="nine-tenths-of-parent float-box-left mhbspace-10 box-relative"><span class="box-inline col-5"><label for="user_address_dom">Дом<span class="required"> *</span></label></span><span class="box-inline col-7"><input id="user_address_dom" name="user_address_dom" type="text" onblur="this.rstate=validateMinMax(this.value, 1, 16); this.errmsg='Поле должно быть заполнено.'; if (this.rstate) this.classList.remove('required-error');" placeholder="Пример: 13" /></span><span id="err_street_name" class="required-error-message"></span><span class="required-valid-message"></span></span><span class="nine-tenths-of-parent float-box-left mhbspace-10 box-relative"><span class="box-inline col-5"><label for="user_address_korpus">Корпус</label></span><span class="box-inline col-7"><input id="user_address_korpus" name="user_address_korpus" type="text" onblur="this.rstate=validateMax(this.value, 16); this.errmsg='Поле не должно превышать 16-ти символов.'" placeholder="Пример: И" /></span></span></span><span class="float-box-left half-of-parent mhbspace-10 text-right"><span class="nine-tenths-of-parent box-inline mhbspace-10 box-relative"><span class="box-inline col-5 text-left"><label for="user_address_stroenie">Строение</label></span><span class="box-inline col-7"><input id="user_address_stroenie" name="user_address_stroenie" type="text" onblur="this.rstate=validateMax(this.value, 16); this.errmsg='Поле не должно превышать 16-ти символов.'" placeholder="Пример: 5" /></span></span><span class="nine-tenths-of-parent box-inline mhbspace-10 box-relative"><span class="box-inline col-5 text-left"><label for="user_address_kvartira">Квартира\ офис<span class="required"> *</span></label></span><span class="box-inline col-7"><input id="user_address_kvartira" name="user_address_kvartira" type="text" onblur="this.rstate=validateMinMax(this.value, 1, 16); this.errmsg='Поле должно быть заполнено.'; if (this.rstate) this.classList.remove('required-error');" placeholder="Пример: 35" /></span><span id="err_street_name" class="required-error-message"></span><span class="required-valid-message"></span></span></span></p>
                                <div id="full-address-map" class="box-crop frame radius-sm" style="height: 257px" data-init="1" data-geo-lat="59.933" data-geo-lon="30.322265" data-zoom="10"></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="phspace-20 pvspace-30 mhbspace-40 bg-lightgray">
                            <div class="head-2 text-strong">Оплата</div>
                        </div>
                        <div class="three-quarters-of-parent box-center">
                            <div class="mhbspace-10">
                                <p><span class="label1"><label for="payment_mode">Способ оплаты</label></span><span class="input select2-city"><select id="payment_mode" name="payment_mode" onblur="this.rstate=1;" data-width="100%">
                                                <option data-loyalty-payment="0" value="3">Наличными
                                                </option>
                                                <option data-loyalty-payment="0" value="31">Курьеру VISA/MasterCard/МИР при получении
                                                </option>
                                                <option selected data-loyalty-payment="1" value="17">Банковской картой VISA/MasterCard/МИР
                                                </option>
                                                <option data-loyalty-payment="0" value="12">Квитанция для физических лиц
                                                </option>
                                                <option data-loyalty-payment="0" data-required-inn="1" value="7">Счет для юридических лиц
                                                </option>
                                                <option data-loyalty-payment="0" value="40">Оплата Яндекс.Кошелёк
                                                </option>
                                            </select></span></p>
                            </div>
                            <ul class="col-offset-3">
                                <li class="box-inline"><img srcset="https://cdnmedia.220-volt.ru/static/images/icon/payments/visa.png" alt="" /></li>
                                <li class="box-inline"><img srcset="https://cdnmedia.220-volt.ru/static/images/icon/payments/master_card.png" alt="" /></li>
                                <li class="box-inline"><img srcset="https://cdnmedia.220-volt.ru/static/images/icon/payments/sberbank.png" alt="" /></li>
                            </ul>
                            <div id="juridical-person-options" class="phspace-20 hide">
                                <p><span class="label1"><label for="org_name">Название организации</label></span><span class="input"><input type="text" id="org_name" name="org_name" onblur="this.rstate=validateMinMax(this.value, 2, 255); this.errmsg='Поле должно быть заполнено';" value="" disabled="disabled" placeholder="Пример: ООО Ласточка" /></span><span id="err_org_name" class="required-error-message"></span><span class="required-valid-message"></span></p>
                                <p><span class="label1"><label for="org_inn">ИНН</label></span><span class="input"><input type="text" id="org_inn" name="org_inn" data-validate-async="validateInn" value="" disabled="disabled" placeholder="Пример: 1234567890" /></span><span id="err_org_inn" class="required-error-message"></span><span class="required-valid-message"></span></p>
                            </div>
                            <p><span class="label1 v-top"><label for="extra">Комментарии</label></span><span class="input"><textarea name="extra" id="extra" cols="" rows="3" onblur="this.rstate=1;"></textarea></span></p>
                        </div>
                    </div>
                    <input type="hidden" id="is_physical_cart_checkout" name="is_physical_cart_checkout" value="0" />
                </form>





                <form action="/giftcard/check_v2/" method="post" name="certificate" novalidate class="js-validate js-certificate-state" data-request-with-form="true" data-once="true">

                    <div class="col-9 box-center">
                        <div class="col-offset-3">
                            <div class="css-accordion mhbspace-20">
                                <input type="checkbox" name="use_certificate" id="use_certificate" class="v-top mvlspace-0" value="1" form="order-form">
                                <label for="use_certificate" class="text-strong cursor-pointer">У меня есть подарочный сертификат
                                </label>

                                <div id="certificate-options-placeholder">
                                    <div class="mhtspace-10 collapsed">




                                        <div class="mhtspace-10 mhbspace-10 radius-3 pspace-10 bg-gray-light">
                                            <div class="box-inline v-top col-1 text-center"><span class="box-inline icon-info-sm-gray v-base"></span></div>
                                            <div class="box-inline v-top col-11 text-small text-muted">Оплата и наличными, и сертификатом возможна только в магазинах «220 Вольт».</div>
                                        </div>





                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </form>



                <div class="col-9 box-center">
                    <div class="col-offset-3">

                        <div class="mhbspace-20 clearfix" id="js-verifying-info" hidden>
                            <div>
                                <span class="box-inline order-lock"></span>
                                <span class="text-uppercase text-bold mvlspace-5">Платёж безопасен</span>
                            </div>

                            <img src="/static/images/pages/order/verified-by-mastercard.png" class="box-right mvlspace-20" alt="">
                            <img src="/static/images/pages/order/verified-by-visa.png" class="box-right mvlspace-20" alt="">

                            <div class="mhspace-5 text-small">
                                После оформления заказа вы перейдёте к платёжной системе.
                            </div>

                            <div class="box-relative css-dropdown autoclose-off">
                                <input type="checkbox" id="payment-information" hidden>
                                <label for="payment-information" class="cursor-pointer">
                                        <span class="collapsing">
                                            <span class="text-underdot text-underline-none v-middle text-small">Информация о проведении платежа</span>
                                            <span class="box-inline icon-darr-sm-black"></span>
                                        </span>
                                    <span class="collapsed">
                                            <span class="text-underdot text-underline-none v-middle text-small">Информация о проведении платежа</span>
                                            <span class="box-inline icon-uarr-sm-black"></span>
                                        </span>
                                </label>
                                <div class="mhtspace-10 collapsed">
                                    <p class="text-small">Денежные средства списываются с карты только после подтверждения заказа оператором Call-центра. До звонка оператора банк блокирует сумму на карте.</p>
                                    <p class="text-small">При отмене или изменении заказа блокировка снимается. Такое подтверждение - самый безопасный способ онлайн платежей.</p>
                                    <p class="text-small">После оплаты электронная квитанция придёт на почту, указанную при регистрации.</p>
                                </div>
                            </div>
                        </div>

                        <div class="mhbspace-10">
                            <span class="box-left icon-info-sm-gray"></span>
                            <span class="box-block mvlspace-20 text-color-silver text-small">
                                    Нажимая кнопку "Отправить заказ", я подтверждаю своё согласие получать уведомления о статусе заказа и другую информацию от «220 Вольт».
                                </span>
                        </div>
                        <div class="mhbspace-20">
                            <input type="checkbox" name="adv-dispatch" id="adv-dispatch" checked="checked" class="v-top">
                            <label for="adv-dispatch" class="cursor-pointer text-color-silver text-small">
                                Я хочу получать персональные предложения и скидки по email.
                            </label>
                        </div>
                    </div>
                </div>


            </div>



            <div class="form-group text-center">
                <button type="submit" form="order-form" class="box-inline v-top bg-yellow-gradient divider-yellow text-underline-none box-model-border cursor-pointer pvspace-25 phspace-10 text-underline-none radius-3 text-h4" data-hover="bg-yellow-gradient-reverse">
                    Отправить заказ
                </button>
            </div>





        </div>

    </div>


    <div id="split-modal-note" class="hide">
        <div class="modal-header">Уважаемый клиент!</div>
        <div class="modal-content">
            <div class="mhbspace-20">
                <p class="text-muted">Подарочные сертификаты должны быть оформлены отдельным заказом.</p>
            </div>

            <div class="mhbspace-10">
                <p class="text-strong">Выберите, какие товары вы хотите оформить сейчас:</p>
            </div>
            <form name="checkout-types" class="mhbspace-30" id="checkout-types">
                <ul class="mhbspace-20"></ul>
                <button class="element-button element-button-default pspace-10" type="submit">
                        <span class="element-button-text">
                            <span class="element-button-text-node pvspace-20">Выбрать</span>
                        </span>
                </button>
            </form>
        </div>

    </div>
    @else
        <h4>Корзина пуста</h4>
    @endif
@stop