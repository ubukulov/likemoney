@extends('layouts.app')
@section('content')
    <div class="popular_brands">
        <div class="h1">
            <h1>Популярные товары</h1>
        </div>
        @foreach($products as $product)
            <div class="product-card">
                <div class="product-body">
                    <div class="product-img">
                        <img src="{{ asset('img/1dns.jpg') }}" alt="">
                    </div>

                    <div class="product-title">
                        <a href="{{ url('/product/'.$product->id) }}">{!! $product->title !!}</a>
                    </div>

                    <div class="product-info" style="margin-top: 50px;">
                        <button type="button" class="ui button green button-green">Купить</button>

                        <button type="button" style="border: 1px solid #ccc; border-radius: 2px; padding: 4px; background: none; float: right; cursor: pointer;"><i class="heart big outline icon"></i></button>
                    </div>
                </div>
            </div>
        @endforeach

        <div class="clearfix"></div>
    </div>

    <div class="ui horizontal divider"></div>

    <div class="brands">
        <h2>Бренды</h2>
        <div class="ui grid">
            <div class="four wide column">
                <img src="{{ asset('/img/brands/apple.png') }}" style="max-width: 150px; max-height: 90px;" alt="apple">
            </div>
            <div class="four wide column">
                <img src="{{ asset('/img/brands/lg.png') }}" style="max-width: 150px; max-height: 90px;" alt="lg">
            </div>
            <div class="four wide column">
                <img src="{{ asset('/img/brands/samsung.png') }}" style="max-width: 150px; max-height: 90px;" alt="samsung">
            </div>
            <div class="four wide column">
                <img src="{{ asset('/img/brands/sony.png') }}" style="max-width: 150px; max-height: 90px;" alt="sony">
            </div>
        </div>
    </div>
@stop