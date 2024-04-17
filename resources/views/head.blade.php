<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<link href="{{ asset('/css/head.css') }}" rel="stylesheet">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Laravel</title>

<body>
    <header class="header">
        <section class="max-container wrap">
            <nav class="header-container">
                <a href="/sell">
                    <img class="header-logo" alt="Header logo"
                        src="/assets/images/logo.svg?id=672cf719502a2233a09870fd194be61d">
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

                <div class="login">
                    <div class="not-loggined">
                        <a href="#" onclick="auth();return false;" class="login-button">
                            <img src="https://lis-skins.ru/assets/images/steam_logo.svg">
                            <span class="desktop-only">
                                Войти через Steam </span>
                            <span class="mobile-only">
                                Войти </span>
                        </a>
                    </div>
                </div>

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


</body>

</html>
