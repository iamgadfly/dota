<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<link href="{{ asset('/css/head.css') }}" rel="stylesheet">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Laravel</title>

@php
    $h = new \App\Helpers\CartHelper();
    if (!empty($h->get()['items'])){
        $cart_items = \App\Models\Items::whereIn('classid', $h->get()['items'])->get();
        $cart_items_ids = $cart_items->map(function ($m){
           return $m->id;
        });
        $amount = $cart_items->sum('price_usd');
    } else {
        $cart_items_ids = [];
        $cart_items = [];
    }
@endphp

<body>
<header class="header">
    <section class="max-container wrap">
        <nav class="header-container">
            <a href="/sell">
                <img class="header-logo" alt="Header logo"
                     src="{{ asset('/img/favicon.png') }}">
            </a>

            <div class="header-links">
                <a class="header__link header__link_sell_skins desktop-only" href="/sell">
                    <svg class="header__link-icon header__link-icon_sell">
                        <use xlink:href="/assets/images/sprite.svg?id=1bf8e8d8d8de93be6c9fa2bd14b8d2c5#sell-icon">
                        </use>
                    </svg>
                    Продать скины </a>
                <a class="header__link header__link_buy_skins desktop-only" href="/market">
                    <svg class="header__link-icon header__link-icon_buy">
                        <use xlink:href="/assets/images/sprite.svg?id=1bf8e8d8d8de93be6c9fa2bd14b8d2c5#buy-icon">
                        </use>
                    </svg>
                    Купить скины </a>
                <a class="header__link header__link_faq" href="/faq/">
                    <svg class="header__link-icon header__link-icon_faq">
                        <use xlink:href="/assets/images/sprite.svg?id=1bf8e8d8d8de93be6c9fa2bd14b8d2c5#faq-icon">
                        </use>
                    </svg>
                    FAQ
                </a>

                <a class="header__link header__link_guarantees" href="/guarantees/">
                    <svg class="header__link-icon header__link-icon_guarantees">
                        <use
                            xlink:href="/assets/images/sprite.svg?id=1bf8e8d8d8de93be6c9fa2bd14b8d2c5#guarantees-icon">
                        </use>
                    </svg>
                    Гарантии </a>
                <a class="header__link header__link_blog" href="/blog/">
                    <svg class="header__link-icon header__link-icon_blog">
                        <use xlink:href="/assets/images/sprite.svg?id=1bf8e8d8d8de93be6c9fa2bd14b8d2c5#blog-icon">
                        </use>
                    </svg>
                    Блог </a>

            </div>
        </nav>

        <div class="skins-market-user-cart none">
            <div class="cart-title">Корзина</div>
            <div class="cart-close" id="market-cart-close"></div>
            <div class="cart-content">
                <div class="cart-empty hidden">
                    <div class="cart-empty-wrapper">
                        <div class="cart-empty-title">Корзина пуста</div>
                        <img src="https://lis-skins.ru/assets/images/smile.svg" alt="Cart empty logo"
                             class="cart-empty-logo">
                    </div>
                    <div class="cart-empty-desc">Добавьте предметы из нашего инвентаря</div>
                </div>
                <div class="cart-items-content">
                    <div class="cart-note">Вывод заблокированных (Trade Lock) скинов будет доступен после их
                        разблокировки. Необходимо вручную вывести скины с Личного кабинета в течении 12 часов, иначе
                        сделка отменится и деньги вернутся вам на баланс. Дату и время разблокировки можно отследить
                        в
                        личном кабинете.
                    </div>

                    <div class="cart-headers">
                        <p class="cart-headers-item">
                            Предмет </p>

                        <p class="cart-headers-price">
                            Стоимость </p>

                    </div>

                    <div class="cart-grid">
                        <div class="cart-items-scrollable">
                            <div class="cart-items market-cart-items">

                                @if (!empty($cart_items))
                                    @foreach ($cart_items as $item)
                                        <div class="small-item" id="item-{{ $item->id }}" data-id="{{ $item->id }}">
                                            <div class="item-image"
                                                 style="background-image:url({{ $item->image }});"
                                                 alt="{{ $item->name }}" title="{{ $item->name }}">
                                            </div>
                                            <div class="item-info">
                                                <div class="skin-name">{{ $item->name }}</div>


                                                <div class="unhold-date">
                                                    5 часов до разблокировки
                                                </div>

                                                <div class="item-price item-price_mobile">
                                                        <span class="item-price-value">
                                                            2 984.81 <svg xmlns="http://www.w3.org/2000/svg"
                                                                          viewBox="0 0 255.15 300">
                                                                <defs>
                                                                    <style>
                                                                        .cls-1 {
                                                                            fill: #a73006;
                                                                        }
                                                                    </style>
                                                                </defs>
                                                                <path
                                                                    d="M165.58 177.2c68.93-.13 89.62-39.82 89.62-94.7C255.16 36.94 227.34 0 165.58 0h-120v209.46H0v46.28h45.58V300h50.35v-44.26h42.77v-46.28H95.9V177.2h69.68zM95.88 47.3l67.36-.5c20.35 0 37.5 12.22 37.5 41.8 0 32.5-15.1 41.3-34.18 41.3H95.9V47.3z"
                                                                    class="cls-1"></path>
                                                            </svg>

                                                        </span>
                                                    <span class="item-price-disabled">Недоступен для покупки</span>
                                                </div>
                                            </div>

                                            <div class="item-price">
                                                    <span class="item-price-value">
                                                        {{ $item->price_usd }} <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 255.15 300">
                                                            <defs>
                                                                <style>
                                                                    .cls-1 {
                                                                        fill: #a73006;
                                                                    }
                                                                </style>
                                                            </defs>
                                                            <path
                                                                d="M165.58 177.2c68.93-.13 89.62-39.82 89.62-94.7C255.16 36.94 227.34 0 165.58 0h-120v209.46H0v46.28h45.58V300h50.35v-44.26h42.77v-46.28H95.9V177.2h69.68zM95.88 47.3l67.36-.5c20.35 0 37.5 12.22 37.5 41.8 0 32.5-15.1 41.3-34.18 41.3H95.9V47.3z"
                                                                class="cls-1"></path>
                                                        </svg>

                                                    </span>
                                                <span class="item-price-disabled">Недоступен для покупки</span>
                                            </div>
                                            {{--wire:click="{{$h->remove($item->classid)}}"--}}
{{--                                            {{$h->remove($item->classid)}}--}}
                                            <div class="item-remove" onclick="removeItem({{$item}})"></div>
                                        </div>
                                    @endforeach
                                @else
                                @endif

                            </div>
                        </div>
                        <div class="cart-info">
                            <div class="cart-info-summary">
                                <p class="cart-info-summary-title">Итого</p>

                                <div class="cart-info-summary-list">
                                    <div class="cart-info-summary-item">
                                        <div class="item-title">Предметы</div>
                                        <div class="item-value cart-info-total-count">{{count($cart_items)}}</div>
                                    </div>
                                    <div class="cart-info-summary-item summary-total">
                                        <div class="item-title">Всего</div>
                                        <div class="item-value"><span class="cart-info-total-sum">{{is_array($cart_items) ? 0 : $cart_items->sum('price_usd')}}$</span>
{{--                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 255.15 300">--}}
{{--                                                <defs>--}}
{{--                                                    <style>--}}
{{--                                                        .cls-1 {--}}
{{--                                                            fill: #a73006;--}}
{{--                                                        }--}}
{{--                                                    </style>--}}
{{--                                                </defs>--}}
{{--                                                <path--}}
{{--                                                    d="M165.58 177.2c68.93-.13 89.62-39.82 89.62-94.7C255.16 36.94 227.34 0 165.58 0h-120v209.46H0v46.28h45.58V300h50.35v-44.26h42.77v-46.28H95.9V177.2h69.68zM95.88 47.3l67.36-.5c20.35 0 37.5 12.22 37.5 41.8 0 32.5-15.1 41.3-34.18 41.3H95.9V47.3z"--}}
{{--                                                    class="cls-1"></path>--}}
{{--                                            </svg>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="buy-button" onclick="createTrade({{is_array($cart_items) ? '[]' : $cart_items_ids}})" data-buying-text="Покупаем">Купить</div>
                            <div class="clear-cart" onclick="remove(this)">Очистить корзину</div>

                            <div class="cart-info-rules">
                                Покупая скины, я соглашаюсь с <a href="/privacy_policy/" target="_BLANK">политикой
                                    конфиденциальности</a> и <a href="/rules/" target="_BLANK">правилами
                                    использования</a></div>
                        </div>
                    </div>


                </div>
            </div>
        </div>


        <div class="wrapper">
            <div class="social">
                <a href="https://www.tiktok.com/@lis.skins/" class="icon-tiktok" target="_blank" rel="nofollow">
                    <svg>
                        <use xlink:href="https://lis-skins.ru/assets/images/socials-sprite.svg#tiktok"></use>
                    </svg>
                </a>
                <a href="https://www.youtube.com/@LIS_SKINS/" class="fa fa-youtube-play" target="_blank"
                   rel="nofollow"></a>
                <a href="https://vk.com/lisskins_ru/" class="icon-vk" target="_blank" rel="nofollow">
                    <svg>
                        <use xlink:href="https://lis-skins.ru/assets/images/socials-sprite.svg#vk"></use>
                    </svg>
                </a>
                <a href="https://t.me/lis_skins/" class="fa fa-telegram" target="_blank" rel="nofollow"></a>
            </div>

            @if (is_null(auth()->user()))
                <div class="login">
                    {{--                    <img src="{{ asset('/img/shopping-cart.png') }}" alt=""> --}}
                    <button class="cart-button highlight">
                        {{--                        <span class="cart-info-total-count">52</span> --}}

                        <i class="fa fa-shopping-cart">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                 fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                <path
                                    d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                            </svg>
                        </i>
                        <span class="cart-button-text">
                                Корзина </span>
                    </button>

                    <div class="not-loggined">
                        <a href="/auth/steam" onclick="auth();return false;" class="login-button">
                            <img src="https://lis-skins.ru/assets/images/steam_logo.svg">
                            <span class="desktop-only">
                                    Войти через Steam </span>
                            <span class="mobile-only">
                                    Войти </span>
                        </a>
                    </div>
                </div>
            @endif

            <div class="menu-hamburger">
                <span class="menu-hamburger__icon"></span>
            </div>

            <div class="mobile-menu mobile-only">
                <div class="mobile-menu-inner">

                    <a href="https://lis-skins.ru/cs2/" class="sell-skins-link">Продать скины</a>
                    <a href="https://lis-skins.ru/market/cs2/" class="market-link">Купить скины</a>
                    <a href="https://lis-skins.ru/faq/" class="">FAQ</a>
                    <a href="https://lis-skins.ru/how-it-works/" class="">Как это работает</a>
                    <a href="https://lis-skins.ru/bonuses/" class="">Бонусы</a>
                    <a href="https://lis-skins.ru/guarantees/" class="">Гарантии</a>
                    <a href="https://lis-skins.ru/blog/" class="">Блог</a>

                    <div class="switchers">
                        <div class="dropdown currency-switcher">
                            <div class="dropdown-inner">
                                <svg class="currency-switcher__logo">
                                    <use
                                        xlink:href="/assets/images/sprite.svg?id=1bf8e8d8d8de93be6c9fa2bd14b8d2c5#rub-currency">
                                    </use>
                                </svg>

                                <p class="currency-switcher__selected-currency">rub</p>
                                <svg class="dropdown-arrow-icon">
                                    <use
                                        xlink:href="/assets/images/sprite.svg?id=1bf8e8d8d8de93be6c9fa2bd14b8d2c5#arrow">
                                    </use>
                                </svg>
                            </div>
                            <div class="dropdown-menu webkit-inner-scroll">
                                <p class="dropdown-menu-item currency-change" data-currency="usd">USD</p>
                                <p class="dropdown-menu-item currency-change" data-currency="rub">RUB</p>
                                <p class="dropdown-menu-item currency-change" data-currency="uah">UAH</p>
                                <p class="dropdown-menu-item currency-change" data-currency="kzt">KZT</p>
                            </div>
                        </div>

                        <div class="dropdown language-switcher">
                            <div class="dropdown-inner">
                                <svg class="language-switcher__logo">
                                    <use
                                        xlink:href="/assets/images/sprite.svg?id=1bf8e8d8d8de93be6c9fa2bd14b8d2c5#ru-flag">
                                    </use>
                                </svg>
                                <p class="language-switcher__selected-locale">Russian</p>

                                <svg class="dropdown-arrow-icon">
                                    <use
                                        xlink:href="/assets/images/sprite.svg?id=1bf8e8d8d8de93be6c9fa2bd14b8d2c5#arrow">
                                    </use>
                                </svg>
                            </div>

                            <div class="dropdown-menu webkit-inner-scroll">
                                <p class="dropdown-menu-item lang-change" data-lang="ru">
                                    Russian
                                </p>
                                <p class="dropdown-menu-item lang-change" data-lang="en">
                                    English
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</header>

@if(!is_null(auth()->user()) && is_null(auth()->user()->trade_url))
<form action="/save_trade_url" method="POST">
    @csrf
<div class="popup-window undefined visible" style="z-index: 105;">
    <div class="popup-wrap">
        <div class="popup-close"></div>
        <div class="popup-content-wrap">
            <div class="popup-content">
                <div class="popup-title">Trade URL</div>
                <div class="popup-center-message">
                    <div class="content-title">
                        <svg width="40" height="40" viewBox="0 0 40 40"><path fill-rule="evenodd" clip-rule="evenodd" d="M40 20c0 11.046-8.954 20-20 20S0 31.046 0 20 8.954 0 20 0s20 8.954 20 20zm-21.765-7.912a1.5 1.5 0 011.5-1.5h.53a1.5 1.5 0 011.5 1.5v9.941a1.5 1.5 0 01-1.5 1.5h-.53a1.5 1.5 0 01-1.5-1.5v-9.94zm1.5 14.97a1.5 1.5 0 00-1.5 1.5v.53a1.5 1.5 0 001.5 1.5h.53a1.5 1.5 0 001.5-1.5v-.53a1.5 1.5 0 00-1.5-1.5h-.53z"></path></svg>
                        Вставьте Trade URL            </div>
                    <div class="content-description">
                        <div class="error" style="display: block;"></div>
                        Укажите вашу ссылку обмена. Узнать ее можно <a href="http://steamcommunity.com/profiles/76561198841334052/tradeoffers/privacy#trade_offer_access_url" target="_blank">здесь</a>.
                    </div>
                    <div class="content-input">
                        <input name="trade_url" type="text" placeholder="https://steamcommunity.com/tradeoffer/new/?partner=....">
                    </div>
                    <div class="content-button">
                        <button type="submit" class="popup-button">Сохранить</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
@endif

<script src="{{ asset('/js/cart.js') }}"></script>
</body>

</html>
