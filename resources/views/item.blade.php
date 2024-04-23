<div>
    @section('content')
        <div class="layout-container">
            <div class="page-header small">
                <div class="bread" itemscope="" itemtype="https://schema.org/BreadcrumbList">
                    <svg class="breadcrumb-home-icon">
                        <use xlink:href="/assets/images/sprite.svg?id=274205d7043ac7331d0d0bb072720d70#home"></use>
                    </svg>

                    <span itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                        <a href="https://lis-skins.ru/" itemprop="item">
                            <span itemprop="name">Главная</span>
                        </a>
                        <meta itemprop="position" content="1">
                    </span>

                    <svg class="breadcrumb-icon">
                        <use xlink:href="/assets/images/sprite.svg?id=274205d7043ac7331d0d0bb072720d70#right-icon"></use>
                    </svg>

                    <span itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                        <a href="https://lis-skins.ru/market/" itemprop="item">
                            <span itemprop="name">Купить скины</span>
                        </a>
                        <meta itemprop="position" content="2">
                    </span>

                    <svg class="breadcrumb-icon">
                        <use xlink:href="/assets/images/sprite.svg?id=274205d7043ac7331d0d0bb072720d70#right-icon"></use>
                    </svg>
                    <span itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                        <a href="https://lis-skins.ru/market/dota2/" itemprop="item">
                            <span itemprop="name">Dota 2</span>
                        </a>
                        <meta itemprop="position" content="3">
                    </span>

                    <svg class="breadcrumb-icon">
                        <use xlink:href="/assets/images/sprite.svg?id=274205d7043ac7331d0d0bb072720d70#right-icon"></use>
                    </svg>
                    <span itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                        <a href="https://lis-skins.ru/market/dota2/wearable/" itemprop="item">
                            <span itemprop="name">Украшение</span>
                        </a>
                        <meta itemprop="position" content="4">
                    </span>

                    <svg class="breadcrumb-icon">
                        <use xlink:href="/assets/images/sprite.svg?id=274205d7043ac7331d0d0bb072720d70#right-icon"></use>
                    </svg>
                    <span itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                        <span itemprop="name">Dark Artistry Cape</span>
                        <meta itemprop="position" content="5">
                    </span>
                </div>
                <h1 style="
            margin-top: 50px;
        ">{{ $item_data->name }}</h1>
            </div>

            <div class="wrap">
                <div class="skins-market-view" itemscope="" itemtype="http://schema.org/Product">

                    <div itemprop="image" itemscope="" itemtype="https://schema.org/ImageObject">
                        <meta itemprop="url contentUrl" content="{{ str_replace('"', '', $item_data->image) }}">
                    </div>

                    <div class="market-skin-preview">
                        <div class="image-block" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">

                            <div class="unhold-date">
                                <span>2 дня до разблокировки</span>
                            </div>

                            <a href="{{ str_replace('"', '', $item_data->image) }}" data-lightbox="group"
                                title="Dark Artistry Cape">
                                <img src="{{ str_replace('"', '', $item_data->image) }}" class="image"
                                    alt="Dark Artistry Cape" title="Dark Artistry Cape" itemprop="image">
                            </a>

                            <meta itemprop="price" content="7063.29">
                            <meta itemprop="priceCurrency" content="RUB">
                            <link itemprop="availability" href="http://schema.org/InStock">
                            <div class="skin-min-price">
                                <div class="min-price-block">
                                    <div class="min-price-value">
                                        {{ $item_data->price_usd }} $
                                    </div>

                                </div>
                                <div class="min-price-buttons">
                                    <div class="buy-now buy-now-button" data-id="96844419">Купить сейчас</div>
                                    <div class="buy-button" data-id="96844419" data-unlock-at="2 дня"></div>
                                </div>
                            </div>
                        </div>
                        <div class="skin-info">

                            <div style="display: none" itemprop="name">Dark Artistry Cape</div>
                            <div class="skin-name">{{ $item_data->name }}</div>


                            <div class="skin-specs">
                                <div class="block-title">Характеристики скина</div>
                                <div class="specs-list">

                                    <div class="spec-item">
                                        <div class="spec-title">Герой</div>
                                        <div class="spec-value">Invoker</div>
                                    </div>
                                    <div class="spec-item">
                                        <div class="spec-title">Слот</div>
                                        <div class="spec-value">Спина</div>
                                    </div>
                                    <div class="spec-item">
                                        <div class="spec-title">Тип</div>
                                        <div class="spec-value">Украшение</div>
                                    </div>
                                    <div class="spec-item">
                                        <div class="spec-title">Раритетность</div>
                                        <div class="spec-value">Immortal</div>
                                    </div>
                                    <div class="spec-item">
                                        <div class="spec-title">Качество:</div>
                                        <div class="spec-value">Standard</div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>


                    <div class="section-block items-block">
                        <div class="items-block-header block-content-header">
                            <div class="block-name">
                                Описание
                            </div>
                            <div class="item-block-filters-open-button">
                                <div class="item-block-filter-header">
                                    <div class="item-block-filter-counter"></div>
                                    <div class="item-block-filter-name">
                                        Фильтры
                                    </div>
                                    <div class="item-block-filter-icons">
                                        <div class="item-block-filter-icon-clear">
                                            <i class="fa fa-times"></i>
                                        </div>
                                        <div class="item-block-filter-icon-arrow">
                                            <i class="fa fa-angle-down"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-block-filters">
                                <div class="item-block-filters-header">
                                    <div class="item-block-filters-title">
                                        Фильтры
                                    </div>
                                    <div class="item-block-filter-icon-close">
                                        <i class="fa fa-times"></i>
                                    </div>
                                </div>

                            </div>

                            <div class="bulk-buy-button" style="background-color: red">
                                <i class="bulk-buy-icon"></i>
                                <div>Купить</div>
                                <span class="bulk-buy-button-new"></span>
                            </div>
                        </div>


                    </div>

                    <div class="section-block about-block">
                        <div class="block-name">Описание</div>
                        <span>
                            <p>Используется: Invoker<br>Плащ церемониального боевого наряда канувшей в небытие академии
                                тайных искусств. Один из ее лучших учеников взял этот наряд в качестве священного дара,
                                покидая опостылевшие ему стены.</p>

                        </span>
                        <div style="display: none" itemprop="description">В нашем магазине вещей вы можете купить Dark
                            Artistry
                            Cape по цене 7 063.29 ₽. Большой ассортимент моделей в каталоге скинов Lis Skins.
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @endsection
</div>
