@extends('layouts.app')
@section('content')
    <div class="product_card" style="background: #ffffff; padding: 20px;">
        <div class="ui grid">
            <div class="four wide column">
                <img src="{{ asset('img/1dns.jpg') }}" alt="">
            </div>
            <div class="eight wide column">
                <h4>{{ $product->title }}</h4>
                <div class="product_info">
                    <p>Цена: 48 299 тг</p>

                    <p>Товар в наличии</p>

                    <p>Артикул товара: {{ $product->id }}</p>

                    <p>Доставка: бесплатно</p>

                    <p>
                        <button type="button" class="ui button green">Купить</button>
                    </p>
                </div>
            </div>
            <div class="four wide column">
                <h4>Надо придумать что будет здесь</h4>
            </div>
        </div>
        <br><br>
        <div class="product_desc">
            <div id="context2">
                <div class="ui secondary menu">
                    <a class="item" data-tab="fourth">Описание товара</a>
                    <a class="item" data-tab="fifth">Характеристики</a>
                    <a class="item active" data-tab="sixth">Отзывы</a>
                </div>
                <div class="ui active tab segment" data-tab="fourth">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A cumque delectus dolor eos esse id incidunt iure neque nihil, quidem suscipit voluptatum. Architecto aut commodi cumque eveniet exercitationem, fugiat in inventore ipsa nemo nisi numquam officiis, optio praesentium quos, tempora temporibus vel voluptas! Debitis eaque, exercitationem odio officiis repellendus vel. Dolorem doloremque fugiat inventore optio quos ratione, voluptate. Accusamus, aliquid aperiam aspernatur autem harum impedit labore laborum laudantium neque nesciunt nihil quis voluptates. Accusamus aliquid dignissimos dolorem dolorum eligendi est eum, ex expedita harum, illum, inventore iste iure magnam maiores minima odio possimus rem repudiandae rerum saepe tenetur ut voluptates. Animi beatae cumque ducimus et eum iusto perferendis totam vitae! Culpa facilis laborum modi recusandae vitae! Ab autem doloribus earum enim itaque magnam ullam vitae! Aliquid amet consectetur corporis deserunt dicta, enim, error ex ipsa iure nesciunt sed soluta totam! Commodi cumque natus provident temporibus? Beatae dolore, ratione! Aliquid, animi commodi dignissimos error fugit id illo inventore labore, quia quibusdam, repellendus rerum ut? Accusamus accusantium aliquid, aut commodi corporis cum cumque cupiditate delectus dolore dolores eligendi error ipsam iste iure nam numquam, pariatur quas quis rem repudiandae saepe sapiente sit suscipit vero vitae voluptas voluptatibus? Beatae distinctio doloremque exercitationem fuga illo impedit laborum natus, placeat quaerat quas repudiandae sunt tenetur, voluptatem! Ab architecto atque commodi debitis deleniti deserunt, dicta dignissimos dolor dolores ea earum enim error excepturi fugiat in incidunt ipsum iste magnam magni, maxime nam necessitatibus nemo nihil, optio pariatur perspiciatis placeat quasi quibusdam quod recusandae rerum ut vel vero. Alias aliquam debitis, dolor ducimus libero maiores sapiente totam! Ab animi cum delectus deserunt doloribus dolorum eaque esse, ex, exercitationem fugit iste minima natus recusandae rem soluta sunt, suscipit temporibus velit voluptatibus voluptatum! Aspernatur aut consectetur enim, nam quibusdam quo recusandae ut. Aperiam doloremque est facilis, hic ipsam, ipsum nam odit quas repellat saepe tempore voluptatibus. Accusamus alias, aliquam amet aperiam architecto atque culpa cum delectus deleniti dicta dolor doloremque eius eligendi exercitationem fuga id illum incidunt inventore, iure labore libero molestiae obcaecati optio pariatur perspiciatis placeat, rerum sint suscipit unde ut voluptas voluptate voluptates voluptatibus? Animi architecto consectetur cumque deleniti dignissimos dolor ducimus explicabo illo ipsum maxime, nesciunt nisi nostrum odio sapiente sint tempora voluptatem! Iste laborum qui repellat voluptatem. Alias cumque debitis doloribus dolorum ea, eveniet facilis iure laboriosam modi nam obcaecati odit perferendis quaerat quam quidem reiciendis suscipit vel veniam voluptatem voluptatibus! Eveniet fugiat neque sint vitae voluptates? Ab accusamus ad, animi cupiditate delectus dolorum, excepturi fuga impedit incidunt inventore laudantium maiores nemo, porro qui repellendus reprehenderit saepe tempore voluptas. A aut dolorum fuga id inventore neque nisi, non sequi. Doloribus error inventore iure, quidem repellat repudiandae tenetur veritatis. A, accusantium animi aut cum distinctio doloribus eaque exercitationem facilis, incidunt itaque laboriosam molestias natus odio possimus quae ratione veritatis vero voluptas. Ab adipisci aspernatur, aut dolores ducimus ea facilis ipsam labore, laboriosam magnam officiis pariatur quaerat, quasi reiciendis rerum tenetur ullam. Ad amet, asperiores dicta dolores expedita facilis iusto magni modi, officiis optio tempora ut voluptatem!
                </div>
                <div class="ui  tab segment" data-tab="fifth">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad animi aperiam beatae eius et fugit hic impedit ipsam ipsum, labore libero minus nam optio praesentium quas quod sapiente sed sint sit suscipit tenetur voluptatum. Consequuntur delectus, doloremque dolorum ipsum libero nemo nihil optio quisquam ullam veritatis. Aut blanditiis consequatur cupiditate deleniti, ducimus expedita illum impedit incidunt ipsa ipsum iste molestiae porro, quam quod saepe, sed sint tempore vero vitae voluptate! Ab architecto cumque, dolor dolores non quo tempore! Blanditiis nam neque nostrum unde! Consectetur delectus excepturi fugit quos sapiente. Aliquid amet animi assumenda aut beatae consectetur corporis cumque cupiditate dicta doloremque, ducimus error est ipsum, laborum natus nesciunt nobis numquam officiis perferendis quae quis reiciendis veniam voluptate. Alias delectus facilis fuga fugiat illo molestiae, praesentium repellendus repudiandae. Aliquam amet consectetur distinctio eaque fugiat magni nemo nisi repellendus soluta unde? A ad aperiam asperiores delectus obcaecati odit rerum temporibus unde! Accusamus consequatur ea ipsa, iste magnam odio perferendis praesentium recusandae tempora voluptate. Aliquam at culpa fugiat incidunt mollitia pariatur provident quas reprehenderit similique tenetur! Ab ad, adipisci asperiores aut consectetur culpa debitis delectus doloremque eius ex fuga illo impedit libero nobis non numquam optio possimus sint sit tempora tenetur veritatis.
                </div>
                <div class="ui tab segment" data-tab="sixth">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt explicabo, itaque labore libero minima praesentium repudiandae tempore? Ab asperiores aut consectetur dolorem eligendi eos error fugit hic illo illum impedit itaque iure laboriosam, maiores molestiae mollitia nam nostrum numquam odit perferendis quae quam quis quos reprehenderit sequi sunt tenetur voluptates. Amet animi aperiam, consectetur cumque delectus dicta doloribus eligendi eos inventore iste laudantium molestiae natus nemo obcaecati odio, officiis provident quia reiciendis rem repudiandae saepe sequi sit soluta, tempora tempore veritatis voluptatem. Aperiam beatae, culpa ducimus laudantium nobis quis quo saepe. Assumenda consequuntur, culpa cum eius id iure! Accusantium amet commodi consequuntur culpa debitis dignissimos dolore doloremque doloribus, ea eius ex hic illum ipsa ipsum laboriosam minus necessitatibus numquam obcaecati officia officiis optio perspiciatis qui quisquam quo quos recusandae rem repudiandae soluta sunt tempora temporibus ullam vel veniam? Atque autem explicabo fuga illum numquam, sunt. Corporis placeat repudiandae sint ut.
                </div>
            </div>
        </div>

        <br><br>

        <div class="pohojie_tovary">
            <h2>Похожие товары</h2>
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

        <br><br>

        <div class="accessories_for_product">
            <h2>Аксессуары</h2>
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
    </div>

    <script>
        $('#context2 .menu .item')
                .tab({
                    // special keyword works same as above
                    context: 'parent'
                })
        ;
    </script>
@stop