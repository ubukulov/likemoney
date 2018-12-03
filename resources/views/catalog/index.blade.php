@extends('layouts.app')
@section('content')
<div class="category-wrap">
    <h1 class="portal-h1">Смартфоны и гаджеты</h1>
    <div class="left-panel">
        <ul class="portal-leftmenu">
            <li class="portal-leftmenu__title"><a href="/catalog/sotovye_telefony">Смартфоны и телефоны</a></li>
            <li class="portal-leftmenu__item">
                <a href="/catalog/smartphones">Смартфоны</a></li>
            <li class="portal-leftmenu__item">
                <a href="/catalog/apple_smartphones">Смартфоны Apple</a></li>
            <li class="portal-leftmenu__item">
                <a href="/catalog/samsung_smartphones">Смартфоны Samsung</a></li>
            <li class="portal-leftmenu__item">
                <a href="/catalog/mobile_phones">Мобильные телефоны</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden">
                <a href="/catalog/radiophones">Радиотелефоны DECT</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden">
                <a href="/catalog/cordphones">Проводные телефоны</a></li>
            <li class="portal-leftmenu__more js-portal-more">Показать еще 2</li>
            <li class="portal-leftmenu__less js-portal-more">Свернуть</li>
        </ul>
        <ul class="portal-leftmenu">
            <li class="portal-leftmenu__title"><a href="/catalog/planshety_i_elektronnye_knigi">Планшеты и электронные книги</a></li>
            <li class="portal-leftmenu__item">
                <a href="/catalog/tablets">Планшеты</a></li>
            <li class="portal-leftmenu__item">
                <a href="/catalog/graphic_tablet">Графические планшеты</a></li>
            <li class="portal-leftmenu__item">
                <a href="/catalog/ebooks">Электронные книги</a></li>
            <li class="portal-leftmenu__item">
                <a href="/catalog/tablet_accesories">Аксессуары</a></li>
        </ul>
        <ul class="portal-leftmenu">
            <li class="portal-leftmenu__title"><a href="/catalog/aksessuary_dlya_telefonov">Аксессуары для телефонов</a></li>
            <li class="portal-leftmenu__item">
                <a href="/catalog/covers">Чехлы</a></li>
            <li class="portal-leftmenu__item">
                <a href="/catalog/naushniki">Наушники</a></li>
            <li class="portal-leftmenu__item">
                <a href="/catalog/garnitury">Гарнитуры</a></li>
            <li class="portal-leftmenu__item">
                <a href="/catalog/wireless_sound">Беспроводные колонки</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden">
                <a href="/catalog/external_battery">Внешние аккумуляторы</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden">
                <a href="/catalog/zashchitnye_plyenki_nakleyki">Защитные плёнки, наклейки</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden">
                <a href="/catalog/memory_cards">Карты памяти</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden">
                <a href="/catalog/zaryadnye_ustroystva">Зарядные устройства</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden">
                <a href="/catalog/cables_and_adapters">Кабели и адаптеры</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden">
                <a href="/catalog/docstations">Док-станции</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden">
                <a href="/catalog/stand_holders">Подставки</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden">
                <a href="/catalog/monopods">Селфи палки</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden">
                <a href="/catalog/stedicam">Стедикамы</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden">
                <a href="/catalog/other_gadgets">Прочие гаджеты</a></li>
            <li class="portal-leftmenu__more js-portal-more">Показать еще 10</li>
            <li class="portal-leftmenu__less js-portal-more">Свернуть</li>
        </ul>
        <ul class="portal-leftmenu">
            <li class="portal-leftmenu__title"><a href="/catalog/gatgets">Носимая электроника</a></li>
            <li class="portal-leftmenu__item">
                <a href="/catalog/armband_smartwatch">Смарт часы</a></li>
            <li class="portal-leftmenu__item">
                <a href="/catalog/apple_watch">Apple Watch</a></li>
            <li class="portal-leftmenu__item">
                <a href="/catalog/aksessuary_smartchasy">Аксессуары для смарт-часов</a></li>
            <li class="portal-leftmenu__item">
                <a href="/catalog/smartbraslety">Фитнес браслеты</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden">
                <a href="/catalog/detskiye_chasy_s_gps">Детские часы с GPS</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden">
                <a href="/catalog/virtual_reality">Виртуальная реальность</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden">
                <a href="/catalog/actioncameras">Экшн-камеры</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden">
                <a href="/catalog/accessories_action">Аксессуары для экшн камер</a></li>
            <li class="portal-leftmenu__more js-portal-more">Показать еще 4</li>
            <li class="portal-leftmenu__less js-portal-more">Свернуть</li>
        </ul>
        <ul class="portal-leftmenu">
            <li class="portal-leftmenu__title"><a href="/catalog/wristwatch">Наручные часы</a></li>
        </ul>
        <ul class="portal-leftmenu">
            <li class="portal-leftmenu__title">Бренды</li>
            <li class="portal-leftmenu__item"><a
                        href="/catalog/telefony/filters/brand/b_apple">Apple</a></li>
            <li class="portal-leftmenu__item"><a
                        href="/catalog/telefony/filters/brand/b_samsung">Samsung</a></li>
            <li class="portal-leftmenu__item"><a
                        href="/catalog/telefony/filters/brand/b_sony">Sony</a></li>
            <li class="portal-leftmenu__item"><a
                        href="/catalog/telefony/filters/brand/b_sbs">SBS</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_xiaomi">Xiaomi</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_jbl">JBL</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_huawei">Huawei</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_panasonic">Panasonic</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_bang_olufsen">Bang & Olufsen</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_ScreenTec">ScreenTec</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_garmin">Garmin</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_lg">LG</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_plantronics">Plantronics</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_beats">Beats</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_gopro">GoPro</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_Spigen">Spigen</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_transcend">Transcend</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_skullcandy">Skullcandy</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_hoco">Hoco</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_bose">Bose</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_microlab">Microlab</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_marley">Marley</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_nokia">Nokia</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_wacom">Wacom</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_meizu">Meizu</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_mujjo">MUJJO</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_usams">USAMS</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_sennheiser">Sennheiser</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_marshall">Marshall</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_moshi">Moshi</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_htc">HTC</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_jabra">Jabra</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_creative_case">Creative Case</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_asus">Asus</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_oppo">OPPO</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_iPefet">iPefet</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_philips">Philips</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_lenovo">Lenovo</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_designskin">Designskin</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_gtec">gTEC</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_ava">Ava</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_logitech">Logitech</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_sol_republic">Sol Republic</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_airline">Airline</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_pocketbook">PocketBook</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_razer">Razer</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_wonlex">Wonlex</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_yoobao">Yoobao</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_sjcam">SJCAM</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_steelseries">Steelseries</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_urbanears">Urbanears</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_Fixitime">FixiTime</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_dji">DJI</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_celebrat">Celebrat</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_gionee">Gionee</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_thule">Thule</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_harman-kardon">HARMAN/KARDON</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_texet">Texet</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_hyperx">HyperX</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_audio_technica">Audio Technica</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_ritmix">Ritmix</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_elari">Elari</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_prestigio">Prestigio</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_onanoff">Onanoff</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_sandisk">SanDisk</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_fly">Fly</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_portcase">Portcase</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_pioneer">Pioneer</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_oneplus">Oneplus</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_delux">Delux</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_tendam">Temdan</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_koss">Koss</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_a4tech">A4Tech</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_huion">Huion</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_energea">Energea</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_iwalk">iWalk</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_kokiri">Kokiri</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_kenzo">KENZO</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_orico">Orico</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_fossil">Fossil</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_tucano">Tucano</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_gissar">GISSAR</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_deluxe">Deluxe</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_global">Global</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_lee_fine">Lee Fine</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_awei">Awei</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_sunroad">Sunroad</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_inkax">Inkax</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_amazon">Amazon</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_att">ATT</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_bmw">BMW</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_trust">Trust</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_agu">AGU</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_ruggear">RugGear</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_powerplant">PowerPlant</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_motorola">Motorola</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_svc">SVC</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_red_square">Red Square</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_ship">Ship</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_moov">Moov</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_rapoo">Rapoo</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_mersedes">Mersedes</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_rock">Rock</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_moizen">Moizen</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_nillkin">Nillkin</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_edifier">Edifier</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_a_case">A-Case</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_neo">Neo</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_hp">HP</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_bloody">Bloody</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_sumdex">Sumdex</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_beeline">Beeline</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_christian_lacroix">Christian Lacroix</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_fitbit">Fitbit</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_technodom">Технодом</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_bq_mobile">BQ-Mobile</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_jawbone">Jawbone</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_uniq">UNIQ</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_nomi">Nomi</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_golf">Golf</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_cookoowatch">CooKooWatch</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_michael_kors">Michael Kors</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_parrot">Parrot</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_epson">Epson</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_miracase">Miracase</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_acer">Acer</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_casio">Casio</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_continent">Continent</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_acme">Acme</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_manfrotto">MANFROTTO</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_ferrari">Ferrari</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_canon">Canon</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_akg">AKG</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_ihealth">iHealth</a></li>
            <li class="portal-leftmenu__item portal-leftmenu__item_hidden"><a
                        href="/catalog/telefony/filters/brand/b_Ergo">Ergo</a></li>
            <li class="portal-leftmenu__more js-portal-more">Показать еще 131</li>
            <li class="portal-leftmenu__less js-portal-more">Свернуть</li>
        </ul>

    </div>

    <div class="right-panel-portal">
        <div class="portal-list">
            <div class="portal-list__row"><div class="portal-list__item ">
                    <a href="/catalog/smartphones" class="portal-list__item__pic">
                        <img src="https://static.technodom.kz/medias/1v1.jpg?context=bWFzdGVyfHJvb3R8MTEwMzV8aW1hZ2UvanBlZ3xoMTgvaGU3LzEyMDgwNjEyODY4MTI2LmpwZ3w1NTdlNDc2YmQ0ZDY5MzY5MzMzODFjYmUzYzFlZDIzNmQwMzM2N2IwN2M5ODJiMWE1MDEyYzgwNDBjZDQ2MjBj" />
                    </a>
                    <h3 class="portal-list__item__title">
                        <a href="/catalog/smartphones">Смартфоны</a>
                    </h3>
                    <div>
                        <div class="portal-list__item__subcat"><a href="/catalog/smartphones/filters/priceValue/[200000-TO-599990]">Премиум смартфоны</a></div>
                        <div class="portal-list__item__subcat"><a href="/catalog/apple_smartphones">Смартфоны Apple</a></div>
                        <div class="portal-list__item__subcat"><a href="/catalog/samsung_smartphones">Смартфоны Samsung</a></div>
                        <div class="portal-list__item__subcat"><a href="/catalog/smartphones/filters/brand/b_huawei">Смартфоны Huawei</a></div>
                        <div class="portal-list__item__subcat"><a href="/catalog/smartphones/filters/priceValue/%5b29990-TO-35000%5d">Недорогие смартфоны</a></div>
                        <div class="portal-list__item__subcat"><a href="/catalog/smartphones/filters/feature-cl-smartphones-function-1014/-Bezramochnihy-">Безрамочные смартфоны</a></div>
                        <div class="portal-list__item__subcat"><a href="/catalog/smartphones/filters/feature-cl-smartphones-function-1014/-Luchshaja-_-kamera-">Лучшая камера</a></div>
                        <div class="portal-list__item__subcat"><a href="/catalog/smartphones/filters/feature-cl-83-Elektropitanie-49/-Ot-_3000_-i-_-bolee-">Мощная батарейка</a></div>
                    </div>
                </div>
                <div class="portal-list__item ">
                    <a href="/catalog/planshety_i_elektronnye_knigi" class="portal-list__item__pic">
                        <img src="https://static.technodom.kz/medias/2v2.jpg?context=bWFzdGVyfHJvb3R8MTM5MTN8aW1hZ2UvanBlZ3xoZGIvaGQxLzEyMDgxMzQ5NDU5OTk4LmpwZ3xmNDYzMzA0NzljMzgxMzliMWEwNmM3YWU1MWI4MmNhMDAzYTk3MzBjNTVhM2VkZDMyYzE4ZjE0YzA3ZWQxMTY2" />
                    </a>
                    <h3 class="portal-list__item__title">
                        <a href="/catalog/planshety_i_elektronnye_knigi">Планшеты и электронные книги</a>
                    </h3>
                    <div>
                        <div class="portal-list__item__subcat"><a href="/catalog/tablets/filters/priceValue/[8990-TO-20000]">Недорогие планшеты</a></div>
                        <div class="portal-list__item__subcat"><a href="/catalog/tablets/filters/feature-cl-180-Displey-28/-Ot-_6_-do-_7.9/feature-cl-180-Displey-28/-Ot-_8_-do-_8.9">Со средней диагональю</a></div>
                        <div class="portal-list__item__subcat"><a href="/catalog/tablets/filters/feature-cl-180-Displey-28/-Ot-_10_-i-_-bolee-/feature-cl-180-Displey-28/-Ot-_9_-do-_9.9">Большие планшеты</a></div>
                        <div class="portal-list__item__subcat"><a href="/catalog/tablets/filters/feature-cl-tablets-svyaz-svazi/4_G_">Планшеты с поддержкой 4G</a></div>
                        <div class="portal-list__item__subcat"><a href="/catalog/tablets/filters/feature-cl-166-Operacionnaya-sistema-411/_Android__7.0_~lbracet~_Nougat_~rbracet~/feature-cl-166-Operacionnaya-sistema-411/_Android__8.1_~lbracet~_Oreo_~rbracet~">Планшеты на Андроид</a></div>
                        <div class="portal-list__item__subcat"><a href="/catalog/tablets/filters/brand/b_apple">Планшеты Apple</a></div>
                        <div class="portal-list__item__subcat"><a href="">Электронные книги</a></div>
                    </div>
                </div>
                <div class="portal-list__item ">
                    <a href="/catalog/gatgets" class="portal-list__item__pic">
                        <img src="https://static.technodom.kz/medias/4v2.jpg?context=bWFzdGVyfHJvb3R8MTQzNDZ8aW1hZ2UvanBlZ3xoMDAvaGU1LzEyMDgwNjE0ODM0MjA2LmpwZ3w3NzAxYTM1YjgwMjA3MTViODNiMjY4ZmU0Y2JjNTIzNGZjM2RiN2Y2MGY5YjllMDA2M2FlYTc0ZmM4MGRjNmQz" />
                    </a>
                    <h3 class="portal-list__item__title">
                        <a href="/catalog/gatgets">Носимая электроника</a>
                    </h3>
                    <div>
                        <div class="portal-list__item__subcat"><a href="/catalog/armband_smartwatch">Смарт часы</a></div>
                        <div class="portal-list__item__subcat"><a href="/catalog/apple_watch">Apple Watch</a></div>
                        <div class="portal-list__item__subcat"><a href="/catalog/aksessuary_smartchasy">Аксессуары для смарт-часов</a></div>
                        <div class="portal-list__item__subcat"><a href="/catalog/smartbraslety">Фитнес браслеты</a></div>
                        <div class="portal-list__item__subcat"><a href="/catalog/detskiye_chasy_s_gps">Детские часы с GPS</a></div>
                        <div class="portal-list__item__subcat"><a href="/catalog/virtual_reality">Виртуальная реальность</a></div>
                        <div class="portal-list__item__subcat"><a href="/catalog/actioncameras">Экшн-камеры</a></div>
                    </div>
                </div>
                <div class="portal-list__item portal-list__item_last">
                    <a href="/catalog/aksessuary_dlya_telefonov" class="portal-list__item__pic">
                        <img src="https://static.technodom.kz/medias/5.jpg?context=bWFzdGVyfHJvb3R8NzU3M3xpbWFnZS9qcGVnfGhhZC9oNGIvMTIwODE1NzEyOTkzNTguanBnfDliZDFhOWY5N2QyYjc4NTNiNWMzZTRkMjU2Nzk1OTFiZmRlNzJlNDY2ZGE1YzBmM2ExOGJhMTY2MmRhMDI4NTQ" />
                    </a>
                    <h3 class="portal-list__item__title">
                        <a href="/catalog/aksessuary_dlya_telefonov">Аксессуары для телефонов</a>
                    </h3>
                    <div>
                        <div class="portal-list__item__subcat"><a href="/catalog/covers">Чехлы</a></div>
                        <div class="portal-list__item__subcat"><a href="/catalog/naushniki">Наушники</a></div>
                        <div class="portal-list__item__subcat"><a href="/catalog/zaryadnye_ustroystva">Зарядные устройства</a></div>
                        <div class="portal-list__item__subcat"><a href="/catalog/external_battery">Внешние аккумуляторы</a></div>
                        <div class="portal-list__item__subcat"><a href="/catalog/memory_cards">Карты памяти</a></div>
                        <div class="portal-list__item__subcat"><a href="/catalog/memory_cards">Кабели и адаптеры</a></div>
                        <div class="portal-list__item__subcat"><a href="/catalog/garnitury">Гарнитуры</a></div>
                        <div class="portal-list__item__subcat"><a href="/catalog/monopods">Селфи палки</a></div>
                    </div>
                </div>
            </div></div><div class="salehits salehits_no-sticker">
            <h2 class="homepage__h2">
                Новинки</h2>
            <div class="homepage__hits__bar">
                <input class="homepage__hits__bar__radio" id="noveltysmartphones" type="radio" name="Telefoni-noveltySubCategoryProductsCarouselComponent" value="noveltysmartphones"  checked="checked" />
                <label class="homepage__hits__bar__item" id="subCategory" for="noveltysmartphones" data-categoryCode="noveltysmartphones">Смартфоны</label>
                <input class="homepage__hits__bar__radio" id="noveltysmartwatches" type="radio" name="Telefoni-noveltySubCategoryProductsCarouselComponent" value="noveltysmartwatches"  />
                <label class="homepage__hits__bar__item" id="subCategory" for="noveltysmartwatches" data-categoryCode="noveltysmartwatches">Смартчасы</label>
            </div>

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
                            <h3>Чернила GT52 Cyan for HP DeskJet GT Series Printers M0H54AE 70ml</h3>
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
                <div>
                    <div class="product-item">
                        <div class="label label-sale">Скидка 10%</div>
                        <div class="product-img">
                            <a href="">
                                <img src="img/bitmap.png">
                            </a>
                        </div>
                        <div class="product-list">
                            <h3>Чернила GT52 Cyan for HP DeskJet GT Series Printers M0H54AE 70ml</h3>
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
                <div>
                    <div class="product-item">
                        <div class="label label-sale">Скидка 10%</div>
                        <div class="product-img">
                            <a href="">
                                <img src="img/bitmap.png">
                            </a>
                        </div>
                        <div class="product-list">
                            <h3>Чернила GT52 Cyan for HP DeskJet GT Series Printers M0H54AE 70ml</h3>
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
                <div>
                    <div class="product-item">
                        <div class="label label-sale">Скидка 10%</div>
                        <div class="product-img">
                            <a href="">
                                <img src="img/bitmap.png">
                            </a>
                        </div>
                        <div class="product-list">
                            <h3>Чернила GT52 Cyan for HP DeskJet GT Series Printers M0H54AE 70ml</h3>
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
                <div>
                    <div class="product-item">
                        <div class="label label-sale">Скидка 10%</div>
                        <div class="product-img">
                            <a href="">
                                <img src="img/bitmap.png">
                            </a>
                        </div>
                        <div class="product-list">
                            <h3>Чернила GT52 Cyan for HP DeskJet GT Series Printers M0H54AE 70ml</h3>
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
                <div>
                    <div class="product-item">
                        <div class="label label-sale">Скидка 10%</div>
                        <div class="product-img">
                            <a href="">
                                <img src="img/bitmap.png">
                            </a>
                        </div>
                        <div class="product-list">
                            <h3>Чернила GT52 Cyan for HP DeskJet GT Series Printers M0H54AE 70ml</h3>
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
                <div>
                    <div class="product-item">
                        <div class="product-img">
                            <a href="">
                                <img src="https://a.icons8.com/vcradgZY/Ar3eQP/bitmap.png">
                            </a>
                        </div>
                        <div class="product-list">
                            <h3>iPhone XS Серый космос</h3>
                            <div class="stars"></div>
                            <span class="price">₽ 1999</span>
                            <div class="actions">
                                <div class="add-to-cart">
                                    <a href="" class="cart-button cart-button-all">В корзину</a>
                                </div>
                                <div class="add-to-links">
                                    <a href="" class="wishlist"></a>
                                    <a href="" class="compare"></a>
                                </div>
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
                            <h3>Чернила GT52 Cyan for HP DeskJet GT Series Printers M0H54AE 70ml</h3>
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
                <div>
                    <div class="product-item">
                        <div class="label label-sale">Скидка 10%</div>
                        <div class="product-img">
                            <a href="">
                                <img src="img/bitmap.png">
                            </a>
                        </div>
                        <div class="product-list">
                            <h3>Чернила GT52 Cyan for HP DeskJet GT Series Printers M0H54AE 70ml</h3>
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

            </div>
            <div id="subCategory_noveltysmartwatches" style="height:475px; display: none;" class="owl-carousel owlContainer subCategoryProducts">
                <div class="owl-tile">
                    <div class="basetile  basetile_hp  listbestsellers" data-name="Детские смарт-часы с GPS трекером Wonlex (GW100/Q90 Blue)" data-id="64978" data-price="8990.0" data-brand="Wonlex" data-category="" data-url="/catalog/armband_smartwatch/p/detskie-smartchasy-s-gps-trekerom-wonlex-gw-q-blue-64978" data-variant="0300c2" data-position="1" data-encategory="armband_smartwatch">

                        <div class="basetile__fade-text"></div>
                        <div class="basetile__image">
                            <a href="/catalog/armband_smartwatch/p/detskie-smartchasy-s-gps-trekerom-wonlex-gw-q-blue-64978" class="productClickEvent" data-infoclass="listbestsellers">
                                <img
                                        class="lazyload"
                                        src="data:image/gif;base64,R0lGODlhtAC0AMQAAODm6Orv8vj7++Tq7Ozx8evu8PP19f39/ff3+eLo6vHz9e/x8+ju8Pv7++bs7ufq7PX39/n5+fPz9eLo7PX19/b5+fHz8+Pm6u3v8v///wAAAAAAAAAAAAAAAAAAAAAAACH/C05FVFNDQVBFMi4wAwEAAAAh/wtYTVAgRGF0YVhNUDw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTM4IDc5LjE1OTgyNCwgMjAxNi8wOS8xNC0wMTowOTowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTcgKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjhDQkJCQTRGRTBBQTExRThBNThBQ0U3MkEzMjFDRDFBIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjhDQkJCQTUwRTBBQTExRThBNThBQ0U3MkEzMjFDRDFBIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6OENCQkJBNERFMEFBMTFFOEE1OEFDRTcyQTMyMUNEMUEiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6OENCQkJBNEVFMEFBMTFFOEE1OEFDRTcyQTMyMUNEMUEiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz4B//79/Pv6+fj39vX08/Lx8O/u7ezr6uno5+bl5OPi4eDf3t3c29rZ2NfW1dTT0tHQz87NzMvKycjHxsXEw8LBwL++vby7urm4t7a1tLOysbCvrq2sq6qpqKempaSjoqGgn56dnJuamZiXlpWUk5KRkI+OjYyLiomIh4aFhIOCgYB/fn18e3p5eHd2dXRzcnFwb25tbGtqaWhnZmVkY2JhYF9eXVxbWllYV1ZVVFNSUVBPTk1MS0pJSEdGRURDQkFAPz49PDs6OTg3NjU0MzIxMC8uLSwrKikoJyYlJCMiISAfHh0cGxoZGBcWFRQTEhEQDw4NDAsKCQgHBgUEAwIBAAAh+QQEBgAAACwAAAAAtAC0AAAF/2AmjmRpnmiqrmzrvnAsz3Rt33iu73zv/8CgcEgsGo/IpHLJbDqf0Kh0Sq1ar9isdsvter/gsHhMLpvP6LR6zW673/C4fE6v2+/4vH7P7/v/gIGCg4SFhoeIiYqLjI2Oj5CRkpOUlZaXmJmam5ydnp+goaKjpKWmp6ipqqusra6vsLGys7S1tre4ubq7vL2+oBYJFr8wFBMAyBMUxCsVD8jQyA8VzCcN0djIBQ3VJALZ4AQHxBEj39ADCgPgCQq9EAMB5sgJEiMSCeADELkRDsjyRHxbMI7EgQXgADgoR+tAgGgBMxzghqJBgYQBCsJCiC1iC38JF7wykC+bRxfG2P8ZYEUA3AV3NBRcAMcKXMYbDrOxKomMAcUcDRhEYwUh3wMEPxA8S+BKIxCnsCQwgDlDAYOVtwxAwxpDATR+th4CnHERmciw0E66KAuAwC2xANS2YOsW7VgZdN+mJQutbi24clnktRuXLzK/tAAbbqv3bozBf/fi7du48OTDlQOvgJxY8mPKhDWr4DxL8WXGoRcjLu0ZBmlZcBkImE27tu3a/zATTsg7XOXewEHX4hi8ONWGuYv3ZtCtufPn0KNLn069uvXr2LNr3869u/fv4MOLH0++vPnz6NOrX8++vfv38OPLn0+/vv37+PPr38+/v///AAYo4IAEFmjggQgmqOAFggxmEAIAIfkEBAYAAAAsVgBYAAkACQAABQwgIo5kaZ5oqq7sGAIAIfkEBAYAAAAsVgBYAAkACQAABQ1gII5kaZ5oqq4mdmIhACH5BAQGAAAALFYAWAAJAAkAAAUM4CCOZGmeaKqu7BgCACH5BAQGAAAALAAAAAABAAEAAAUDYBYCACH5BAQGAAAALAAAAAABAAEAAAUDYBYCACH5BAQGAAAALAAAAAABAAEAAAUDYBYCACH5BAQGAAAALFYAWAAJAAkAAAUNYCCOZGmeaKqu5nAOIQAh+QQEBgAAACxWAFgACQAJAAAFDKAhjmRpnmiqruwYAgAh+QQEBgAAACxWAFgACQAJAAAFDKAgjmRpnmiqruwYAgAh+QQEBgAAACwAAAAAAQABAAAFA2AWAgA7"
                                        data-src="//static.technodom.kz/medias/64978-1.jpg-Default-WorkingFormat-180Wx180HConversionFormat?context=bWFzdGVyfGltYWdlc3wzMjMxMHxpbWFnZS9qcGVnfGltYWdlcy9oYWMvaDRiLzg5NzA1NTc2MjAyNTQuanBnfDQwZWVhMjFlNWQ1ZTMxNzVlOTkxZjQ4ZTY5ZmNjYzExMTRlN2FjMTg2YWRiOWQxYTQyYmM1MzJlZDkzYTBkOWE"
                                        onerror="this.src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAALQAAAC0CAYAAAA9zQYyAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTM4IDc5LjE1OTgyNCwgMjAxNi8wOS8xNC0wMTowOTowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTcgKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjRDNkNGNDE0RTBBQzExRThCMjdFODYwMEUxREYzNjAxIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjRDNkNGNDE1RTBBQzExRThCMjdFODYwMEUxREYzNjAxIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6NEM2Q0Y0MTJFMEFDMTFFOEIyN0U4NjAwRTFERjM2MDEiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6NEM2Q0Y0MTNFMEFDMTFFOEIyN0U4NjAwRTFERjM2MDEiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz6X9rAtAAADRUlEQVR42uzdMWvUYBzA4ZwIHg6KoNR26uDg1E9gcfM73KgUPKSLDnYsBQcXnUQd3O9zSL9BVxWcPAWFtoPUKf5jcxiOnqiX9pI3zwMv4YzS5M2vaZK7Yi/P8wxScc4UIGgQNAgaBI2gQdAgaBA0CBpBg6BB0CBoEDSCBkGDoEHQIGgEDYIGQYOgQdAIGgQNggZBg6ARNAgaBA2CBkEjaBA0CBoEjaBB0CBoEDQIGkGDoEHQIGgQNIIGQYOgQdAgaAQNggZBg6BB0AgaBA2CBkGDoBE0CBoEDYIGQZOi813e+Y+fvlyMxYsYgxj9lu/OUYxRjM3VlaXvgu6mIua7iexLv7Iv91xydNPAPgk6JX375JIjZW9jDGN8bsn2Xo/xOsZth07QJ9mIG6r3Ldre/bix3YjlO4fOJcdJvrZwmz84bIJORvxEyc2CS46/Fj/SL8Viu3x6sBxjnB0/792JmA7NkDN022LejfGojDkrl8Xr3XI9gm6N4sy8NmPdWrkeQbfGYM71CLpRludcj6AbZTznegTdKKM51//vzejTGK9i9BwCQddpJ8bejHV75fraY47FVnb8FvxLUQu6NuVz5vUYzyuXF+Py9Xrdz6ErMU+I+h/18ry7bzRFKNM7fyUi3V/QtkzHXFV8AOnBrHcFp/cj/l5nvwGcoZvxjfWnmJ2pBZ1UzNWon5kxQacQ88TD+Dd3zJygU4h54rHZE3QqMRdumUFBpxJz4YJZnM3noU8v2svZ1KO2GmJG0Is9A8frX1GLWdApXE4Myz8/ELOgU7k2HpodN4Vdu9FD0GJG0HXH/GQBMR+YeUGfRszF8+D7Z/xlvy3ga7op7ILVlaUfsbhmJpyhQdBn5GoLL31uOGyCnuVNBHKzLR+kL7a12GaH7Te/gpXm9b1fweqoI/sk6JSM7FNauv7YbrNcJvXfurmGBpccIGgQNAgaQYOgQdAgaBA0ggZBg6BB0CBoBA2CBkGDoEHQCBoEDYIGQYOgETQIGgQNggZBI2gQNAgaBI2gQdAgaBA0CBpBg6BB0CBoEDSCBkGDoEHQIGgEDYIGQYOgQdAIGgQNggZBg6ARNAgaBA2CBkEjaBA0CBoEDYJG0NBcPwUYAOLvz0QNkIodAAAAAElFTkSuQmCC'"
                                        alt="Детские смарт-часы с GPS трекером Wonlex (GW100/Q90 Blue)"
                                        title="Детские смарт-часы с GPS трекером Wonlex (GW100/Q90 Blue)"/>
                            </a>
                        </div>
                        <div class="basetile__wrapper">
                            <a class="basetile__fader productClickEvent" href="/catalog/armband_smartwatch/p/detskie-smartchasy-s-gps-trekerom-wonlex-gw-q-blue-64978" data-infoclass="listbestsellers">Подробнее о товаре</a>
                            <a href="/catalog/armband_smartwatch/p/detskie-smartchasy-s-gps-trekerom-wonlex-gw-q-blue-64978" class="basetile__title productClickEvent"  data-infoclass="listbestsellers">Детские смарт-часы с GPS трекером Wonlex (GW100/Q90 Blue)</a>
                            <!-- PRICE -->
                            <div class="discount_balloon tile">-10%</div>
                            <div class="basetile__price basetile__price_line-through" style="position:absolute;top:230px;margin-top:14px;">
                                9<span>990</span><div class="product-description__price-stroke" style="top:15px"></div>
                            </div>
                            <div class="basetile__price " style="margin-top:24px;">
                                8<span>990</span><span id="currencySign"> ₸</span>
                            </div>
                            <!-- PRICE END -->

                        </div>

                        <div class="basetile__wrapper">
                            <div class="basetile__bar">
                                <div class="simple-buy-button">
                                    <a href="javascript:void(0)" data-code="64978" data-url="/cart/addajax?productCode=64978" data-price="8990" rel="nofollow" class="one-click-button js-button-buy addToCartEvent" data-nameevent="addToCart" data-infoclass="listbestsellers" title="Купить"></a>
                                </div>
                                <div class="basetile__hp-favorite">
                                    <!-- REPLACE W/ TRUE URL PATHs: .../favorite-products/add -->

                                    <div class="product-icons-masked">
                                        <label id="toFavoriteProducts" for="toFavoriteProducts64978" favorite="false" data-action="/my-account/add-favorite-products?productCode=64978&categoryName=" data-inFavoriteProducts="empty" data-codeProduct="64978" class="product-icons-masked__label">
                                            <a href="javascript:void(0)" class="favoriteProductsPage" title="Добавить в мои желания">
                                                <span class="product-icons-masked__i product-icons-masked__i_tofav"></span>
                                                Добавить в мои желания</a>
                                        </label>
                                    </div>
                                </div>
                                <div class="basetile__hp-compare ">
                                    <a href="/productsComparison/view" style="visibility: hidden;" id="pageProductsComparionUrl"></a>

                                    <div class="product-icons-masked">
                                        <input id="toCompare64978" type="checkbox" name="toCompare" data-action="/productsComparison/add?productCode=64978&categoryName=%d0%a1%d0%bc%d0%b0%d1%80%d1%82+%d1%87%d0%b0%d1%81%d1%8b" />
                                        <label for="toCompare64978" class="product-icons-masked__label" title="К сравнению">
                                            <span class="product-icons-masked__i product-icons-masked__i_tocompare"></span>
                                            К сравнению</label>
                                    </div></div>
                                <div class="basetile__hp-monitoring">
                                    <div class="product-icons-masked product-icons-masked_active" id="toMonitoringPriceOn" data-monitoringPriceId="64978" style="display:none" >
                                        <div class="product-icons-masked__label product-icons-masked__label_active">
                                            <span class="product-icons-masked__i product-icons-masked__i_towhitelist product-icons-masked__i_active"></span>
                                            <a href="/my-account/waiting-products" class="waitingProductsPage" title="В листе ожидания">В листе ожидания</a>
                                        </div>
                                    </div>
                                    <div class="product-icons-masked product-icons-masked" id="toMonitoringPriceWrapper">
                                        <label id="toMonitoringPrice" waitingRedirect="false" for="toMonitoringPrice64978" data-MonitoringPrice="empty" data-codeProduct="64978" class="product-icons-masked__label" data-action="/catalog/armband_smartwatch/p/detskie-smartchasy-s-gps-trekerom-wonlex-gw-q-blue-64978/addToListMonitoring">
                                            <span class="product-icons-masked__i product-icons-masked__i_towhitelist"></span>
                                            <a href="javascript:void(0)" title="Следить за ценой">Следить за ценой</a>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="basetile__wrapper">
                            <div class="basetile__hp-review">
                        <span class="stars-wrapper">
    <span class="stars " style="width: 65px;" data-starwidth="18">
        3.6</span>
    </span>
                                <a href="/catalog/category/p/64978#tab-reviews" id="read_reviews_action" class="product-description__review__link product-description__review__link_read" >














                                    5 отзывов

                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-tile">
                    <div class="basetile  basetile_hp  listbestsellers" data-name="Apple Watch Series 4 GPS 40mm Gold Aluminium Case with Pink Sand Sport Band" data-id="112627" data-price="224990.0" data-brand="Apple" data-category="" data-url="/catalog/apple_watch/p/apple-watch-series--gps-mm-gold-aluminium-case-with-pink-112627" data-variant="ff7d79" data-position="3" data-encategory="apple_watch">

                        <div class="basetile__fade-text"></div>
                        <div class="basetile__image">
                            <a href="/catalog/apple_watch/p/apple-watch-series--gps-mm-gold-aluminium-case-with-pink-112627" class="productClickEvent" data-infoclass="listbestsellers">
                                <img
                                        class="lazyload"
                                        src="data:image/gif;base64,R0lGODlhtAC0AMQAAODm6Orv8vj7++Tq7Ozx8evu8PP19f39/ff3+eLo6vHz9e/x8+ju8Pv7++bs7ufq7PX39/n5+fPz9eLo7PX19/b5+fHz8+Pm6u3v8v///wAAAAAAAAAAAAAAAAAAAAAAACH/C05FVFNDQVBFMi4wAwEAAAAh/wtYTVAgRGF0YVhNUDw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTM4IDc5LjE1OTgyNCwgMjAxNi8wOS8xNC0wMTowOTowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTcgKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjhDQkJCQTRGRTBBQTExRThBNThBQ0U3MkEzMjFDRDFBIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjhDQkJCQTUwRTBBQTExRThBNThBQ0U3MkEzMjFDRDFBIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6OENCQkJBNERFMEFBMTFFOEE1OEFDRTcyQTMyMUNEMUEiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6OENCQkJBNEVFMEFBMTFFOEE1OEFDRTcyQTMyMUNEMUEiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz4B//79/Pv6+fj39vX08/Lx8O/u7ezr6uno5+bl5OPi4eDf3t3c29rZ2NfW1dTT0tHQz87NzMvKycjHxsXEw8LBwL++vby7urm4t7a1tLOysbCvrq2sq6qpqKempaSjoqGgn56dnJuamZiXlpWUk5KRkI+OjYyLiomIh4aFhIOCgYB/fn18e3p5eHd2dXRzcnFwb25tbGtqaWhnZmVkY2JhYF9eXVxbWllYV1ZVVFNSUVBPTk1MS0pJSEdGRURDQkFAPz49PDs6OTg3NjU0MzIxMC8uLSwrKikoJyYlJCMiISAfHh0cGxoZGBcWFRQTEhEQDw4NDAsKCQgHBgUEAwIBAAAh+QQEBgAAACwAAAAAtAC0AAAF/2AmjmRpnmiqrmzrvnAsz3Rt33iu73zv/8CgcEgsGo/IpHLJbDqf0Kh0Sq1ar9isdsvter/gsHhMLpvP6LR6zW673/C4fE6v2+/4vH7P7/v/gIGCg4SFhoeIiYqLjI2Oj5CRkpOUlZaXmJmam5ydnp+goaKjpKWmp6ipqqusra6vsLGys7S1tre4ubq7vL2+oBYJFr8wFBMAyBMUxCsVD8jQyA8VzCcN0djIBQ3VJALZ4AQHxBEj39ADCgPgCQq9EAMB5sgJEiMSCeADELkRDsjyRHxbMI7EgQXgADgoR+tAgGgBMxzghqJBgYQBCsJCiC1iC38JF7wykC+bRxfG2P8ZYEUA3AV3NBRcAMcKXMYbDrOxKomMAcUcDRhEYwUh3wMEPxA8S+BKIxCnsCQwgDlDAYOVtwxAwxpDATR+th4CnHERmciw0E66KAuAwC2xANS2YOsW7VgZdN+mJQutbi24clnktRuXLzK/tAAbbqv3bozBf/fi7du48OTDlQOvgJxY8mPKhDWr4DxL8WXGoRcjLu0ZBmlZcBkImE27tu3a/zATTsg7XOXewEHX4hi8ONWGuYv3ZtCtufPn0KNLn069uvXr2LNr3869u/fv4MOLH0++vPnz6NOrX8++vfv38OPLn0+/vv37+PPr38+/v///AAYo4IAEFmjggQgmqOAFggxmEAIAIfkEBAYAAAAsVgBYAAkACQAABQwgIo5kaZ5oqq7sGAIAIfkEBAYAAAAsVgBYAAkACQAABQ1gII5kaZ5oqq4mdmIhACH5BAQGAAAALFYAWAAJAAkAAAUM4CCOZGmeaKqu7BgCACH5BAQGAAAALAAAAAABAAEAAAUDYBYCACH5BAQGAAAALAAAAAABAAEAAAUDYBYCACH5BAQGAAAALAAAAAABAAEAAAUDYBYCACH5BAQGAAAALFYAWAAJAAkAAAUNYCCOZGmeaKqu5nAOIQAh+QQEBgAAACxWAFgACQAJAAAFDKAhjmRpnmiqruwYAgAh+QQEBgAAACxWAFgACQAJAAAFDKAgjmRpnmiqruwYAgAh+QQEBgAAACwAAAAAAQABAAAFA2AWAgA7"
                                        data-src="//static.technodom.kz/medias/112627-1.jpg-Default-WorkingFormat-180Wx180HConversionFormat?context=bWFzdGVyfGltYWdlc3wxMDE5OXxpbWFnZS9qcGVnfGltYWdlcy9oYmUvaGUwLzExOTMxODU2MjQwNjcwLmpwZ3wwYTg2OWQ1ZWFiODgxZjdiZmI0YTc3ZjRlMmVlZmQyYzdjMTE3N2U1YjY2Nzg4M2E3MzE5MWI3MGM0ODc5NjQy"
                                        onerror="this.src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAALQAAAC0CAYAAAA9zQYyAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTM4IDc5LjE1OTgyNCwgMjAxNi8wOS8xNC0wMTowOTowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTcgKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjRDNkNGNDE0RTBBQzExRThCMjdFODYwMEUxREYzNjAxIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjRDNkNGNDE1RTBBQzExRThCMjdFODYwMEUxREYzNjAxIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6NEM2Q0Y0MTJFMEFDMTFFOEIyN0U4NjAwRTFERjM2MDEiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6NEM2Q0Y0MTNFMEFDMTFFOEIyN0U4NjAwRTFERjM2MDEiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz6X9rAtAAADRUlEQVR42uzdMWvUYBzA4ZwIHg6KoNR26uDg1E9gcfM73KgUPKSLDnYsBQcXnUQd3O9zSL9BVxWcPAWFtoPUKf5jcxiOnqiX9pI3zwMv4YzS5M2vaZK7Yi/P8wxScc4UIGgQNAgaBI2gQdAgaBA0CBpBg6BB0CBoEDSCBkGDoEHQIGgEDYIGQYOgQdAIGgQNggZBg6ARNAgaBA2CBkEjaBA0CBoEjaBB0CBoEDQIGkGDoEHQIGgQNIIGQYOgQdAgaAQNggZBg6BB0AgaBA2CBkGDoBE0CBoEDYIGQZOi813e+Y+fvlyMxYsYgxj9lu/OUYxRjM3VlaXvgu6mIua7iexLv7Iv91xydNPAPgk6JX375JIjZW9jDGN8bsn2Xo/xOsZth07QJ9mIG6r3Ldre/bix3YjlO4fOJcdJvrZwmz84bIJORvxEyc2CS46/Fj/SL8Viu3x6sBxjnB0/792JmA7NkDN022LejfGojDkrl8Xr3XI9gm6N4sy8NmPdWrkeQbfGYM71CLpRludcj6AbZTznegTdKKM51//vzejTGK9i9BwCQddpJ8bejHV75fraY47FVnb8FvxLUQu6NuVz5vUYzyuXF+Py9Xrdz6ErMU+I+h/18ry7bzRFKNM7fyUi3V/QtkzHXFV8AOnBrHcFp/cj/l5nvwGcoZvxjfWnmJ2pBZ1UzNWon5kxQacQ88TD+Dd3zJygU4h54rHZE3QqMRdumUFBpxJz4YJZnM3noU8v2svZ1KO2GmJG0Is9A8frX1GLWdApXE4Myz8/ELOgU7k2HpodN4Vdu9FD0GJG0HXH/GQBMR+YeUGfRszF8+D7Z/xlvy3ga7op7ILVlaUfsbhmJpyhQdBn5GoLL31uOGyCnuVNBHKzLR+kL7a12GaH7Te/gpXm9b1fweqoI/sk6JSM7FNauv7YbrNcJvXfurmGBpccIGgQNAgaQYOgQdAgaBA0ggZBg6BB0CBoBA2CBkGDoEHQCBoEDYIGQYOgETQIGgQNggZBI2gQNAgaBI2gQdAgaBA0CBpBg6BB0CBoEDSCBkGDoEHQIGgEDYIGQYOgQdAIGgQNggZBg6ARNAgaBA2CBkEjaBA0CBoEDYJG0NBcPwUYAOLvz0QNkIodAAAAAElFTkSuQmCC'"
                                        alt="Apple Watch Series 4 GPS 40mm Gold Aluminium Case with Pink Sand Sport Band"
                                        title="Apple Watch Series 4 GPS 40mm Gold Aluminium Case with Pink Sand Sport Band"/>
                            </a>
                        </div>
                        <div class="basetile__wrapper">
                            <a class="basetile__fader productClickEvent" href="/catalog/apple_watch/p/apple-watch-series--gps-mm-gold-aluminium-case-with-pink-112627" data-infoclass="listbestsellers">Подробнее о товаре</a>
                            <a href="/catalog/apple_watch/p/apple-watch-series--gps-mm-gold-aluminium-case-with-pink-112627" class="basetile__title productClickEvent"  data-infoclass="listbestsellers">Apple Watch Series 4 GPS 40mm Gold Aluminium Case with Pink Sand Sport Band</a>
                            <!-- PRICE -->
                            <div class="discount_balloon tile">-4%</div>
                            <div class="basetile__price basetile__price_line-through" style="position:absolute;top:230px;margin-top:14px;">
                                234<span>990</span><div class="product-description__price-stroke" style="top:15px"></div>
                            </div>
                            <div class="basetile__price " style="margin-top:24px;">
                                224<span>990</span><span id="currencySign"> ₸</span>
                            </div>
                            <!-- PRICE END -->

                        </div>

                        <div class="basetile__wrapper">
                            <div class="basetile__bar">
                                <div class="simple-buy-button">
                                    <a href="javascript:void(0)" data-code="112627" data-url="/cart/addajax?productCode=112627" data-price="224990" rel="nofollow" class="one-click-button js-button-buy addToCartEvent" data-nameevent="addToCart" data-infoclass="listbestsellers" title="Купить"></a>
                                </div>
                                <div class="basetile__hp-favorite">
                                    <!-- REPLACE W/ TRUE URL PATHs: .../favorite-products/add -->

                                    <div class="product-icons-masked">
                                        <label id="toFavoriteProducts" for="toFavoriteProducts112627" favorite="false" data-action="/my-account/add-favorite-products?productCode=112627&categoryName=" data-inFavoriteProducts="empty" data-codeProduct="112627" class="product-icons-masked__label">
                                            <a href="javascript:void(0)" class="favoriteProductsPage" title="Добавить в мои желания">
                                                <span class="product-icons-masked__i product-icons-masked__i_tofav"></span>
                                                Добавить в мои желания</a>
                                        </label>
                                    </div>
                                </div>
                                <div class="basetile__hp-compare ">
                                    <a href="/productsComparison/view" style="visibility: hidden;" id="pageProductsComparionUrl"></a>

                                    <div class="product-icons-masked">
                                        <input id="toCompare112627" type="checkbox" name="toCompare" data-action="/productsComparison/add?productCode=112627&categoryName=Apple+Watch" />
                                        <label for="toCompare112627" class="product-icons-masked__label" title="К сравнению">
                                            <span class="product-icons-masked__i product-icons-masked__i_tocompare"></span>
                                            К сравнению</label>
                                    </div></div>
                                <div class="basetile__hp-monitoring">
                                    <div class="product-icons-masked product-icons-masked_active" id="toMonitoringPriceOn" data-monitoringPriceId="112627" style="display:none" >
                                        <div class="product-icons-masked__label product-icons-masked__label_active">
                                            <span class="product-icons-masked__i product-icons-masked__i_towhitelist product-icons-masked__i_active"></span>
                                            <a href="/my-account/waiting-products" class="waitingProductsPage" title="В листе ожидания">В листе ожидания</a>
                                        </div>
                                    </div>
                                    <div class="product-icons-masked product-icons-masked" id="toMonitoringPriceWrapper">
                                        <label id="toMonitoringPrice" waitingRedirect="false" for="toMonitoringPrice112627" data-MonitoringPrice="empty" data-codeProduct="112627" class="product-icons-masked__label" data-action="/catalog/apple_watch/p/apple-watch-series--gps-mm-gold-aluminium-case-with-pink-112627/addToListMonitoring">
                                            <span class="product-icons-masked__i product-icons-masked__i_towhitelist"></span>
                                            <a href="javascript:void(0)" title="Следить за ценой">Следить за ценой</a>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="basetile__ibar basetile__hp-bonus">
                            До<span class="basetile__hp-bonus__value">6 750&nbsp;<span> ₸</span>
        </span>
                            <span class="basetile__hp-bonus__hint js-b-hint" data-index="technobonus-hint">?</span>
                        </div>
                        <div class="basetile__wrapper">
                            <div class="basetile__hp-review">
                        <span class="stars-wrapper">
    <span class="stars " style="width: 90px;" data-starwidth="18">
        5.0</span>
    </span>
                                <a href="/catalog/category/p/112627#tab-reviews" id="read_reviews_action" class="product-description__review__link product-description__review__link_read" >














                                    7 отзывов

                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-tile">
                    <div class="basetile  basetile_hp  listbestsellers" data-name="Смарт-часы Samsung Galaxy Gear Sport Blue (SM-R600NZBASKZ)" data-id="64911" data-price="89990.0" data-brand="Samsung" data-category="" data-url="/catalog/armband_smartwatch/p/samsung-galaxy-gear-sport-blue-smrnzbaskz-64911" data-variant="0300c2" data-position="5" data-encategory="armband_smartwatch">

                        <div class="basetile__fade-text"></div>
                        <div class="basetile__image">
                            <a href="/catalog/armband_smartwatch/p/samsung-galaxy-gear-sport-blue-smrnzbaskz-64911" class="productClickEvent" data-infoclass="listbestsellers">
                                <img
                                        class="lazyload"
                                        src="data:image/gif;base64,R0lGODlhtAC0AMQAAODm6Orv8vj7++Tq7Ozx8evu8PP19f39/ff3+eLo6vHz9e/x8+ju8Pv7++bs7ufq7PX39/n5+fPz9eLo7PX19/b5+fHz8+Pm6u3v8v///wAAAAAAAAAAAAAAAAAAAAAAACH/C05FVFNDQVBFMi4wAwEAAAAh/wtYTVAgRGF0YVhNUDw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTM4IDc5LjE1OTgyNCwgMjAxNi8wOS8xNC0wMTowOTowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTcgKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjhDQkJCQTRGRTBBQTExRThBNThBQ0U3MkEzMjFDRDFBIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjhDQkJCQTUwRTBBQTExRThBNThBQ0U3MkEzMjFDRDFBIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6OENCQkJBNERFMEFBMTFFOEE1OEFDRTcyQTMyMUNEMUEiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6OENCQkJBNEVFMEFBMTFFOEE1OEFDRTcyQTMyMUNEMUEiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz4B//79/Pv6+fj39vX08/Lx8O/u7ezr6uno5+bl5OPi4eDf3t3c29rZ2NfW1dTT0tHQz87NzMvKycjHxsXEw8LBwL++vby7urm4t7a1tLOysbCvrq2sq6qpqKempaSjoqGgn56dnJuamZiXlpWUk5KRkI+OjYyLiomIh4aFhIOCgYB/fn18e3p5eHd2dXRzcnFwb25tbGtqaWhnZmVkY2JhYF9eXVxbWllYV1ZVVFNSUVBPTk1MS0pJSEdGRURDQkFAPz49PDs6OTg3NjU0MzIxMC8uLSwrKikoJyYlJCMiISAfHh0cGxoZGBcWFRQTEhEQDw4NDAsKCQgHBgUEAwIBAAAh+QQEBgAAACwAAAAAtAC0AAAF/2AmjmRpnmiqrmzrvnAsz3Rt33iu73zv/8CgcEgsGo/IpHLJbDqf0Kh0Sq1ar9isdsvter/gsHhMLpvP6LR6zW673/C4fE6v2+/4vH7P7/v/gIGCg4SFhoeIiYqLjI2Oj5CRkpOUlZaXmJmam5ydnp+goaKjpKWmp6ipqqusra6vsLGys7S1tre4ubq7vL2+oBYJFr8wFBMAyBMUxCsVD8jQyA8VzCcN0djIBQ3VJALZ4AQHxBEj39ADCgPgCQq9EAMB5sgJEiMSCeADELkRDsjyRHxbMI7EgQXgADgoR+tAgGgBMxzghqJBgYQBCsJCiC1iC38JF7wykC+bRxfG2P8ZYEUA3AV3NBRcAMcKXMYbDrOxKomMAcUcDRhEYwUh3wMEPxA8S+BKIxCnsCQwgDlDAYOVtwxAwxpDATR+th4CnHERmciw0E66KAuAwC2xANS2YOsW7VgZdN+mJQutbi24clnktRuXLzK/tAAbbqv3bozBf/fi7du48OTDlQOvgJxY8mPKhDWr4DxL8WXGoRcjLu0ZBmlZcBkImE27tu3a/zATTsg7XOXewEHX4hi8ONWGuYv3ZtCtufPn0KNLn069uvXr2LNr3869u/fv4MOLH0++vPnz6NOrX8++vfv38OPLn0+/vv37+PPr38+/v///AAYo4IAEFmjggQgmqOAFggxmEAIAIfkEBAYAAAAsVgBYAAkACQAABQwgIo5kaZ5oqq7sGAIAIfkEBAYAAAAsVgBYAAkACQAABQ1gII5kaZ5oqq4mdmIhACH5BAQGAAAALFYAWAAJAAkAAAUM4CCOZGmeaKqu7BgCACH5BAQGAAAALAAAAAABAAEAAAUDYBYCACH5BAQGAAAALAAAAAABAAEAAAUDYBYCACH5BAQGAAAALAAAAAABAAEAAAUDYBYCACH5BAQGAAAALFYAWAAJAAkAAAUNYCCOZGmeaKqu5nAOIQAh+QQEBgAAACxWAFgACQAJAAAFDKAhjmRpnmiqruwYAgAh+QQEBgAAACxWAFgACQAJAAAFDKAgjmRpnmiqruwYAgAh+QQEBgAAACwAAAAAAQABAAAFA2AWAgA7"
                                        data-src="//static.technodom.kz/medias/64911-1-Default-WorkingFormat-180Wx180HConversionFormat?context=bWFzdGVyfGltYWdlc3wxMDQ4NXxpbWFnZS9qcGVnfGltYWdlcy9oNGUvaGVhLzg5NTcwMjExOTIyMjIuanBnfGNlZWUwYWEzMzBmYjMwM2EwNTM1MTM1NmIwNmFmZGUzZWUxODU5NjQ4NjFiZWE0ZDUzNWE5NGI3NzVkNzNiNGI"
                                        onerror="this.src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAALQAAAC0CAYAAAA9zQYyAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTM4IDc5LjE1OTgyNCwgMjAxNi8wOS8xNC0wMTowOTowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTcgKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjRDNkNGNDE0RTBBQzExRThCMjdFODYwMEUxREYzNjAxIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjRDNkNGNDE1RTBBQzExRThCMjdFODYwMEUxREYzNjAxIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6NEM2Q0Y0MTJFMEFDMTFFOEIyN0U4NjAwRTFERjM2MDEiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6NEM2Q0Y0MTNFMEFDMTFFOEIyN0U4NjAwRTFERjM2MDEiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz6X9rAtAAADRUlEQVR42uzdMWvUYBzA4ZwIHg6KoNR26uDg1E9gcfM73KgUPKSLDnYsBQcXnUQd3O9zSL9BVxWcPAWFtoPUKf5jcxiOnqiX9pI3zwMv4YzS5M2vaZK7Yi/P8wxScc4UIGgQNAgaBI2gQdAgaBA0CBpBg6BB0CBoEDSCBkGDoEHQIGgEDYIGQYOgQdAIGgQNggZBg6ARNAgaBA2CBkEjaBA0CBoEjaBB0CBoEDQIGkGDoEHQIGgQNIIGQYOgQdAgaAQNggZBg6BB0AgaBA2CBkGDoBE0CBoEDYIGQZOi813e+Y+fvlyMxYsYgxj9lu/OUYxRjM3VlaXvgu6mIua7iexLv7Iv91xydNPAPgk6JX375JIjZW9jDGN8bsn2Xo/xOsZth07QJ9mIG6r3Ldre/bix3YjlO4fOJcdJvrZwmz84bIJORvxEyc2CS46/Fj/SL8Viu3x6sBxjnB0/792JmA7NkDN022LejfGojDkrl8Xr3XI9gm6N4sy8NmPdWrkeQbfGYM71CLpRludcj6AbZTznegTdKKM51//vzejTGK9i9BwCQddpJ8bejHV75fraY47FVnb8FvxLUQu6NuVz5vUYzyuXF+Py9Xrdz6ErMU+I+h/18ry7bzRFKNM7fyUi3V/QtkzHXFV8AOnBrHcFp/cj/l5nvwGcoZvxjfWnmJ2pBZ1UzNWon5kxQacQ88TD+Dd3zJygU4h54rHZE3QqMRdumUFBpxJz4YJZnM3noU8v2svZ1KO2GmJG0Is9A8frX1GLWdApXE4Myz8/ELOgU7k2HpodN4Vdu9FD0GJG0HXH/GQBMR+YeUGfRszF8+D7Z/xlvy3ga7op7ILVlaUfsbhmJpyhQdBn5GoLL31uOGyCnuVNBHKzLR+kL7a12GaH7Te/gpXm9b1fweqoI/sk6JSM7FNauv7YbrNcJvXfurmGBpccIGgQNAgaQYOgQdAgaBA0ggZBg6BB0CBoBA2CBkGDoEHQCBoEDYIGQYOgETQIGgQNggZBI2gQNAgaBI2gQdAgaBA0CBpBg6BB0CBoEDSCBkGDoEHQIGgEDYIGQYOgQdAIGgQNggZBg6ARNAgaBA2CBkEjaBA0CBoEDYJG0NBcPwUYAOLvz0QNkIodAAAAAElFTkSuQmCC'"
                                        alt="Смарт-часы Samsung Galaxy Gear Sport Blue (SM-R600NZBASKZ)"
                                        title="Смарт-часы Samsung Galaxy Gear Sport Blue (SM-R600NZBASKZ)"/>
                            </a>
                        </div>
                        <div class="basetile__wrapper">
                            <a class="basetile__fader productClickEvent" href="/catalog/armband_smartwatch/p/samsung-galaxy-gear-sport-blue-smrnzbaskz-64911" data-infoclass="listbestsellers">Подробнее о товаре</a>
                            <a href="/catalog/armband_smartwatch/p/samsung-galaxy-gear-sport-blue-smrnzbaskz-64911" class="basetile__title productClickEvent"  data-infoclass="listbestsellers">Смарт-часы Samsung Galaxy Gear Sport Blue (SM-R600NZBASKZ)</a>
                            <!-- PRICE -->
                            <div class="basetile__price " style="margin-top:24px;">
                                89<span>990</span><span id="currencySign"> ₸</span>
                            </div>
                            <!-- PRICE END -->

                        </div>

                        <div class="basetile__wrapper">
                            <div class="basetile__bar">
                                <div class="simple-buy-button">
                                    <a href="javascript:void(0)" data-code="64911" data-url="/cart/addajax?productCode=64911" data-price="89990" rel="nofollow" class="one-click-button js-button-buy addToCartEvent" data-nameevent="addToCart" data-infoclass="listbestsellers" title="Купить"></a>
                                </div>
                                <div class="basetile__hp-favorite">
                                    <!-- REPLACE W/ TRUE URL PATHs: .../favorite-products/add -->

                                    <div class="product-icons-masked">
                                        <label id="toFavoriteProducts" for="toFavoriteProducts64911" favorite="false" data-action="/my-account/add-favorite-products?productCode=64911&categoryName=" data-inFavoriteProducts="empty" data-codeProduct="64911" class="product-icons-masked__label">
                                            <a href="javascript:void(0)" class="favoriteProductsPage" title="Добавить в мои желания">
                                                <span class="product-icons-masked__i product-icons-masked__i_tofav"></span>
                                                Добавить в мои желания</a>
                                        </label>
                                    </div>
                                </div>
                                <div class="basetile__hp-compare ">
                                    <a href="/productsComparison/view" style="visibility: hidden;" id="pageProductsComparionUrl"></a>

                                    <div class="product-icons-masked">
                                        <input id="toCompare64911" type="checkbox" name="toCompare" data-action="/productsComparison/add?productCode=64911&categoryName=%d0%a1%d0%bc%d0%b0%d1%80%d1%82+%d1%87%d0%b0%d1%81%d1%8b" />
                                        <label for="toCompare64911" class="product-icons-masked__label" title="К сравнению">
                                            <span class="product-icons-masked__i product-icons-masked__i_tocompare"></span>
                                            К сравнению</label>
                                    </div></div>
                                <div class="basetile__hp-monitoring">
                                    <div class="product-icons-masked product-icons-masked_active" id="toMonitoringPriceOn" data-monitoringPriceId="64911" style="display:none" >
                                        <div class="product-icons-masked__label product-icons-masked__label_active">
                                            <span class="product-icons-masked__i product-icons-masked__i_towhitelist product-icons-masked__i_active"></span>
                                            <a href="/my-account/waiting-products" class="waitingProductsPage" title="В листе ожидания">В листе ожидания</a>
                                        </div>
                                    </div>
                                    <div class="product-icons-masked product-icons-masked" id="toMonitoringPriceWrapper">
                                        <label id="toMonitoringPrice" waitingRedirect="false" for="toMonitoringPrice64911" data-MonitoringPrice="empty" data-codeProduct="64911" class="product-icons-masked__label" data-action="/catalog/armband_smartwatch/p/samsung-galaxy-gear-sport-blue-smrnzbaskz-64911/addToListMonitoring">
                                            <span class="product-icons-masked__i product-icons-masked__i_towhitelist"></span>
                                            <a href="javascript:void(0)" title="Следить за ценой">Следить за ценой</a>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="basetile__ibar basetile__hp-bonus">
                            До<span class="basetile__hp-bonus__value">2 700&nbsp;<span> ₸</span>
        </span>
                            <span class="basetile__hp-bonus__hint js-b-hint" data-index="technobonus-hint">?</span>
                        </div>
                        <div class="basetile__wrapper">
                            <div class="basetile__hp-review">
                        <span class="stars-wrapper">
    <span class="stars " style="width: 72px;" data-starwidth="18">
        4.0</span>
    </span>
                                <a href="/catalog/category/p/64911#tab-reviews" id="read_reviews_action" class="product-description__review__link product-description__review__link_read" >












                                    4 отзыва



                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-tile">
                    <div class="basetile  basetile_hp  listbestsellers" data-name="Смарт-часы Samsung Galaxy Gear Sport Black (SM-R600NZKASKZ)" data-id="64910" data-price="89990.0" data-brand="Samsung" data-category="" data-url="/catalog/armband_smartwatch/p/samsung-galaxy-gear-sport-black-smrnzkaskz-64910" data-variant="000000" data-position="6" data-encategory="armband_smartwatch">

                        <div class="basetile__fade-text"></div>
                        <div class="basetile__image">
                            <a href="/catalog/armband_smartwatch/p/samsung-galaxy-gear-sport-black-smrnzkaskz-64910" class="productClickEvent" data-infoclass="listbestsellers">
                                <img
                                        class="lazyload"
                                        src="data:image/gif;base64,R0lGODlhtAC0AMQAAODm6Orv8vj7++Tq7Ozx8evu8PP19f39/ff3+eLo6vHz9e/x8+ju8Pv7++bs7ufq7PX39/n5+fPz9eLo7PX19/b5+fHz8+Pm6u3v8v///wAAAAAAAAAAAAAAAAAAAAAAACH/C05FVFNDQVBFMi4wAwEAAAAh/wtYTVAgRGF0YVhNUDw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTM4IDc5LjE1OTgyNCwgMjAxNi8wOS8xNC0wMTowOTowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTcgKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjhDQkJCQTRGRTBBQTExRThBNThBQ0U3MkEzMjFDRDFBIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjhDQkJCQTUwRTBBQTExRThBNThBQ0U3MkEzMjFDRDFBIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6OENCQkJBNERFMEFBMTFFOEE1OEFDRTcyQTMyMUNEMUEiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6OENCQkJBNEVFMEFBMTFFOEE1OEFDRTcyQTMyMUNEMUEiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz4B//79/Pv6+fj39vX08/Lx8O/u7ezr6uno5+bl5OPi4eDf3t3c29rZ2NfW1dTT0tHQz87NzMvKycjHxsXEw8LBwL++vby7urm4t7a1tLOysbCvrq2sq6qpqKempaSjoqGgn56dnJuamZiXlpWUk5KRkI+OjYyLiomIh4aFhIOCgYB/fn18e3p5eHd2dXRzcnFwb25tbGtqaWhnZmVkY2JhYF9eXVxbWllYV1ZVVFNSUVBPTk1MS0pJSEdGRURDQkFAPz49PDs6OTg3NjU0MzIxMC8uLSwrKikoJyYlJCMiISAfHh0cGxoZGBcWFRQTEhEQDw4NDAsKCQgHBgUEAwIBAAAh+QQEBgAAACwAAAAAtAC0AAAF/2AmjmRpnmiqrmzrvnAsz3Rt33iu73zv/8CgcEgsGo/IpHLJbDqf0Kh0Sq1ar9isdsvter/gsHhMLpvP6LR6zW673/C4fE6v2+/4vH7P7/v/gIGCg4SFhoeIiYqLjI2Oj5CRkpOUlZaXmJmam5ydnp+goaKjpKWmp6ipqqusra6vsLGys7S1tre4ubq7vL2+oBYJFr8wFBMAyBMUxCsVD8jQyA8VzCcN0djIBQ3VJALZ4AQHxBEj39ADCgPgCQq9EAMB5sgJEiMSCeADELkRDsjyRHxbMI7EgQXgADgoR+tAgGgBMxzghqJBgYQBCsJCiC1iC38JF7wykC+bRxfG2P8ZYEUA3AV3NBRcAMcKXMYbDrOxKomMAcUcDRhEYwUh3wMEPxA8S+BKIxCnsCQwgDlDAYOVtwxAwxpDATR+th4CnHERmciw0E66KAuAwC2xANS2YOsW7VgZdN+mJQutbi24clnktRuXLzK/tAAbbqv3bozBf/fi7du48OTDlQOvgJxY8mPKhDWr4DxL8WXGoRcjLu0ZBmlZcBkImE27tu3a/zATTsg7XOXewEHX4hi8ONWGuYv3ZtCtufPn0KNLn069uvXr2LNr3869u/fv4MOLH0++vPnz6NOrX8++vfv38OPLn0+/vv37+PPr38+/v///AAYo4IAEFmjggQgmqOAFggxmEAIAIfkEBAYAAAAsVgBYAAkACQAABQwgIo5kaZ5oqq7sGAIAIfkEBAYAAAAsVgBYAAkACQAABQ1gII5kaZ5oqq4mdmIhACH5BAQGAAAALFYAWAAJAAkAAAUM4CCOZGmeaKqu7BgCACH5BAQGAAAALAAAAAABAAEAAAUDYBYCACH5BAQGAAAALAAAAAABAAEAAAUDYBYCACH5BAQGAAAALAAAAAABAAEAAAUDYBYCACH5BAQGAAAALFYAWAAJAAkAAAUNYCCOZGmeaKqu5nAOIQAh+QQEBgAAACxWAFgACQAJAAAFDKAhjmRpnmiqruwYAgAh+QQEBgAAACxWAFgACQAJAAAFDKAgjmRpnmiqruwYAgAh+QQEBgAAACwAAAAAAQABAAAFA2AWAgA7"
                                        data-src="//static.technodom.kz/medias/64910-1-Default-WorkingFormat-180Wx180HConversionFormat?context=bWFzdGVyfGltYWdlc3w5NTQ1fGltYWdlL2pwZWd8aW1hZ2VzL2gyZi9oYzcvODk1NzAxMjE4MTAyMi5qcGd8NDA2NDcxNTdhMzAzNjdmZWM0M2FkYjRjY2Q0Y2IwY2UyNGFjMTZlMzk4Nzg5YWY1MTUxOGVjZmFkZjM2ZThiYg"
                                        onerror="this.src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAALQAAAC0CAYAAAA9zQYyAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTM4IDc5LjE1OTgyNCwgMjAxNi8wOS8xNC0wMTowOTowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTcgKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjRDNkNGNDE0RTBBQzExRThCMjdFODYwMEUxREYzNjAxIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjRDNkNGNDE1RTBBQzExRThCMjdFODYwMEUxREYzNjAxIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6NEM2Q0Y0MTJFMEFDMTFFOEIyN0U4NjAwRTFERjM2MDEiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6NEM2Q0Y0MTNFMEFDMTFFOEIyN0U4NjAwRTFERjM2MDEiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz6X9rAtAAADRUlEQVR42uzdMWvUYBzA4ZwIHg6KoNR26uDg1E9gcfM73KgUPKSLDnYsBQcXnUQd3O9zSL9BVxWcPAWFtoPUKf5jcxiOnqiX9pI3zwMv4YzS5M2vaZK7Yi/P8wxScc4UIGgQNAgaBI2gQdAgaBA0CBpBg6BB0CBoEDSCBkGDoEHQIGgEDYIGQYOgQdAIGgQNggZBg6ARNAgaBA2CBkEjaBA0CBoEjaBB0CBoEDQIGkGDoEHQIGgQNIIGQYOgQdAgaAQNggZBg6BB0AgaBA2CBkGDoBE0CBoEDYIGQZOi813e+Y+fvlyMxYsYgxj9lu/OUYxRjM3VlaXvgu6mIua7iexLv7Iv91xydNPAPgk6JX375JIjZW9jDGN8bsn2Xo/xOsZth07QJ9mIG6r3Ldre/bix3YjlO4fOJcdJvrZwmz84bIJORvxEyc2CS46/Fj/SL8Viu3x6sBxjnB0/792JmA7NkDN022LejfGojDkrl8Xr3XI9gm6N4sy8NmPdWrkeQbfGYM71CLpRludcj6AbZTznegTdKKM51//vzejTGK9i9BwCQddpJ8bejHV75fraY47FVnb8FvxLUQu6NuVz5vUYzyuXF+Py9Xrdz6ErMU+I+h/18ry7bzRFKNM7fyUi3V/QtkzHXFV8AOnBrHcFp/cj/l5nvwGcoZvxjfWnmJ2pBZ1UzNWon5kxQacQ88TD+Dd3zJygU4h54rHZE3QqMRdumUFBpxJz4YJZnM3noU8v2svZ1KO2GmJG0Is9A8frX1GLWdApXE4Myz8/ELOgU7k2HpodN4Vdu9FD0GJG0HXH/GQBMR+YeUGfRszF8+D7Z/xlvy3ga7op7ILVlaUfsbhmJpyhQdBn5GoLL31uOGyCnuVNBHKzLR+kL7a12GaH7Te/gpXm9b1fweqoI/sk6JSM7FNauv7YbrNcJvXfurmGBpccIGgQNAgaQYOgQdAgaBA0ggZBg6BB0CBoBA2CBkGDoEHQCBoEDYIGQYOgETQIGgQNggZBI2gQNAgaBI2gQdAgaBA0CBpBg6BB0CBoEDSCBkGDoEHQIGgEDYIGQYOgQdAIGgQNggZBg6ARNAgaBA2CBkEjaBA0CBoEDYJG0NBcPwUYAOLvz0QNkIodAAAAAElFTkSuQmCC'"
                                        alt="Смарт-часы Samsung Galaxy Gear Sport Black (SM-R600NZKASKZ)"
                                        title="Смарт-часы Samsung Galaxy Gear Sport Black (SM-R600NZKASKZ)"/>
                            </a>
                        </div>
                        <div class="basetile__wrapper">
                            <a class="basetile__fader productClickEvent" href="/catalog/armband_smartwatch/p/samsung-galaxy-gear-sport-black-smrnzkaskz-64910" data-infoclass="listbestsellers">Подробнее о товаре</a>
                            <a href="/catalog/armband_smartwatch/p/samsung-galaxy-gear-sport-black-smrnzkaskz-64910" class="basetile__title productClickEvent"  data-infoclass="listbestsellers">Смарт-часы Samsung Galaxy Gear Sport Black (SM-R600NZKASKZ)</a>
                            <!-- PRICE -->
                            <div class="basetile__price " style="margin-top:24px;">
                                89<span>990</span><span id="currencySign"> ₸</span>
                            </div>
                            <!-- PRICE END -->

                        </div>

                        <div class="basetile__wrapper">
                            <div class="basetile__bar">
                                <div class="simple-buy-button">
                                    <a href="javascript:void(0)" data-code="64910" data-url="/cart/addajax?productCode=64910" data-price="89990" rel="nofollow" class="one-click-button js-button-buy addToCartEvent" data-nameevent="addToCart" data-infoclass="listbestsellers" title="Купить"></a>
                                </div>
                                <div class="basetile__hp-favorite">
                                    <!-- REPLACE W/ TRUE URL PATHs: .../favorite-products/add -->

                                    <div class="product-icons-masked">
                                        <label id="toFavoriteProducts" for="toFavoriteProducts64910" favorite="false" data-action="/my-account/add-favorite-products?productCode=64910&categoryName=" data-inFavoriteProducts="empty" data-codeProduct="64910" class="product-icons-masked__label">
                                            <a href="javascript:void(0)" class="favoriteProductsPage" title="Добавить в мои желания">
                                                <span class="product-icons-masked__i product-icons-masked__i_tofav"></span>
                                                Добавить в мои желания</a>
                                        </label>
                                    </div>
                                </div>
                                <div class="basetile__hp-compare ">
                                    <a href="/productsComparison/view" style="visibility: hidden;" id="pageProductsComparionUrl"></a>

                                    <div class="product-icons-masked">
                                        <input id="toCompare64910" type="checkbox" name="toCompare" data-action="/productsComparison/add?productCode=64910&categoryName=%d0%a1%d0%bc%d0%b0%d1%80%d1%82+%d1%87%d0%b0%d1%81%d1%8b" />
                                        <label for="toCompare64910" class="product-icons-masked__label" title="К сравнению">
                                            <span class="product-icons-masked__i product-icons-masked__i_tocompare"></span>
                                            К сравнению</label>
                                    </div></div>
                                <div class="basetile__hp-monitoring">
                                    <div class="product-icons-masked product-icons-masked_active" id="toMonitoringPriceOn" data-monitoringPriceId="64910" style="display:none" >
                                        <div class="product-icons-masked__label product-icons-masked__label_active">
                                            <span class="product-icons-masked__i product-icons-masked__i_towhitelist product-icons-masked__i_active"></span>
                                            <a href="/my-account/waiting-products" class="waitingProductsPage" title="В листе ожидания">В листе ожидания</a>
                                        </div>
                                    </div>
                                    <div class="product-icons-masked product-icons-masked" id="toMonitoringPriceWrapper">
                                        <label id="toMonitoringPrice" waitingRedirect="false" for="toMonitoringPrice64910" data-MonitoringPrice="empty" data-codeProduct="64910" class="product-icons-masked__label" data-action="/catalog/armband_smartwatch/p/samsung-galaxy-gear-sport-black-smrnzkaskz-64910/addToListMonitoring">
                                            <span class="product-icons-masked__i product-icons-masked__i_towhitelist"></span>
                                            <a href="javascript:void(0)" title="Следить за ценой">Следить за ценой</a>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="basetile__ibar basetile__hp-bonus">
                            До<span class="basetile__hp-bonus__value">2 700&nbsp;<span> ₸</span>
        </span>
                            <span class="basetile__hp-bonus__hint js-b-hint" data-index="technobonus-hint">?</span>
                        </div>
                        <div class="basetile__wrapper">
                            <div class="basetile__hp-review">
                        <span class="stars-wrapper">
    <span class="stars " style="width: 68px;" data-starwidth="18">
        3.75</span>
    </span>
                                <a href="/catalog/category/p/64910#tab-reviews" id="read_reviews_action" class="product-description__review__link product-description__review__link_read" >












                                    4 отзыва



                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <script id="tpGetEmailForWaitingProduct" type="text/x-mustache-template">
            <div class="popup-node">
                <div class="login-popup__content">
                    <div class="popup-error__message"></div>
                    <div class="js-hidden-error hidden">
                        <div class="alert negative">Ошибка при сохранении электронного адреса</div>
                    </div>
                    <div class="popup-title">Уведомить о поступлении</div>
                    <div class="ch-col">
                        <div class="control-group">
                            <label id="waiting_product_email" class="ch-line__name control-label " for="requestemail.email">Электронная почта</label>

                            <div id="waiting_product_email_field" class="controls ch-line-field">
                                <div class="ch-custom-field">
                                    <input id="requestemail.email" name="email" class="ch-field__inp js-ch-email-check" required="required" type="email" value="">
                                </div>
                                <div class="help-inline js-helpLine" style="display: none">Пожалуйста, введите корректный E-mail</div>
                            </div>
                        </div>
                    </div>
                    <a href="javascript:void(0)" class="popup-btn cus-btn cus-btn__full js-popup-waitingproduct" data-type="json" data-url="#">Отправить</a>
                </div>
                <div class="login-popup__restore">
                    <div class="popup-title">Уведомить о поступлении</div>
                    <div class="popup-sub__title"></div>
                    <a href="#" class="popup-btn cus-btn js-popup-close-btn">Закрыть</a>
                </div>
            </div>
        </script>
        <div class="salehits salehits_no-sticker">
            <h2 class="homepage__h2">
                Рекомендуем к покупке</h2>

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
                            <h3>Чернила GT52 Cyan for HP DeskJet GT Series Printers M0H54AE 70ml</h3>
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
                <div>
                    <div class="product-item">
                        <div class="label label-sale">Скидка 10%</div>
                        <div class="product-img">
                            <a href="">
                                <img src="img/bitmap.png">
                            </a>
                        </div>
                        <div class="product-list">
                            <h3>Чернила GT52 Cyan for HP DeskJet GT Series Printers M0H54AE 70ml</h3>
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
                <div>
                    <div class="product-item">
                        <div class="label label-sale">Скидка 10%</div>
                        <div class="product-img">
                            <a href="">
                                <img src="img/bitmap.png">
                            </a>
                        </div>
                        <div class="product-list">
                            <h3>Чернила GT52 Cyan for HP DeskJet GT Series Printers M0H54AE 70ml</h3>
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
                <div>
                    <div class="product-item">
                        <div class="label label-sale">Скидка 10%</div>
                        <div class="product-img">
                            <a href="">
                                <img src="img/bitmap.png">
                            </a>
                        </div>
                        <div class="product-list">
                            <h3>Чернила GT52 Cyan for HP DeskJet GT Series Printers M0H54AE 70ml</h3>
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
                <div>
                    <div class="product-item">
                        <div class="label label-sale">Скидка 10%</div>
                        <div class="product-img">
                            <a href="">
                                <img src="img/bitmap.png">
                            </a>
                        </div>
                        <div class="product-list">
                            <h3>Чернила GT52 Cyan for HP DeskJet GT Series Printers M0H54AE 70ml</h3>
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
                <div>
                    <div class="product-item">
                        <div class="label label-sale">Скидка 10%</div>
                        <div class="product-img">
                            <a href="">
                                <img src="img/bitmap.png">
                            </a>
                        </div>
                        <div class="product-list">
                            <h3>Чернила GT52 Cyan for HP DeskJet GT Series Printers M0H54AE 70ml</h3>
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
                <div>
                    <div class="product-item">
                        <div class="product-img">
                            <a href="">
                                <img src="https://a.icons8.com/vcradgZY/Ar3eQP/bitmap.png">
                            </a>
                        </div>
                        <div class="product-list">
                            <h3>iPhone XS Серый космос</h3>
                            <div class="stars"></div>
                            <span class="price">₽ 1999</span>
                            <div class="actions">
                                <div class="add-to-cart">
                                    <a href="" class="cart-button cart-button-all">В корзину</a>
                                </div>
                                <div class="add-to-links">
                                    <a href="" class="wishlist"></a>
                                    <a href="" class="compare"></a>
                                </div>
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
                            <h3>Чернила GT52 Cyan for HP DeskJet GT Series Printers M0H54AE 70ml</h3>
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
                <div>
                    <div class="product-item">
                        <div class="label label-sale">Скидка 10%</div>
                        <div class="product-img">
                            <a href="">
                                <img src="img/bitmap.png">
                            </a>
                        </div>
                        <div class="product-list">
                            <h3>Чернила GT52 Cyan for HP DeskJet GT Series Printers M0H54AE 70ml</h3>
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

            </div>

        </div>
    </div>
</div>
@endsection