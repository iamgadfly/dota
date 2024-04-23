<div>
    @section('content')
        <!-- Google Tag Manager (noscript) -->
        <noscript>
            <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K3NJKBV" height="0" width="0"
                    style="display:none;visibility:hidden"></iframe>
        </noscript>
        <!-- End Google Tag Manager (noscript) -->

        <noscript>
            <div><img src="https://mc.yandex.ru/watch/44561789" style="position:absolute; left:-9999px;" alt=""/>
            </div>
        </noscript>


        <div class="layout-container">
            <div class="page-header">
                <div class="bread" itemscope="" itemtype="https://schema.org/BreadcrumbList">
                    <svg class="breadcrumb-home-icon">
                        <use xlink:href="/assets/images/sprite.svg?id=1bf8e8d8d8de93be6c9fa2bd14b8d2c5#home"></use>
                    </svg>

                    <span itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                    <a href="https://lis-skins.ru/" itemprop="item">
                        <span itemprop="name">Main</span>
                    </a>
                    <meta itemprop="position" content="1">
                </span>

                    <svg class="breadcrumb-icon">
                        <use
                            xlink:href="/assets/images/sprite.svg?id=1bf8e8d8d8de93be6c9fa2bd14b8d2c5#right-icon"></use>
                    </svg>

                    <span itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                    <span itemprop="name">Contacts</span>
                    <meta itemprop="position" content="2">
                </span>
                </div>
                <h1>
                    Contacts
                </h1>
            </div>

            <div class="page-content">
                <div class="wrap">
                    <div class="text ">
                        Do you have any questions? We can help you!<br>
                        <br>
                        E-mail: support@lis-skins.ru<br>
                        Telegram: @lis_help_bot<br>
                        Collaboration YouTube/Twitch: partnership@lis-skins.ru<br>
                        <br>
                        Collaboration admin@lis-skins.ru
                    </div>
                </div>
            </div>
        </div>


        <div class="bonus-banner">
            <div class="bonus-banner-inner">
                <div class="bonus-banner-title">Sell your skins and get a</div>
                <div class="bonus-banner-sum">
                    <span class="bonus-banner-sum-value">5$</span><span class="bonus-banner-sum-text"> bonus</span>
                </div>
                <div class="bonus-banner-button">Receive</div>
                <div class="bonus-banner-close"></div>
            </div>
        </div>


        <div id="login-popup" style="display: none">
            <div class="popup-title">You need to login</div>
            <div class="popup-center-message">
                <div class="content-title">
                    <svg width="40" height="40" viewBox="0 0 40 40">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M40 20c0 11.046-8.954 20-20 20S0 31.046 0 20 8.954 0 20 0s20 8.954 20 20zm-21.765-7.912a1.5 1.5 0 011.5-1.5h.53a1.5 1.5 0 011.5 1.5v9.941a1.5 1.5 0 01-1.5 1.5h-.53a1.5 1.5 0 01-1.5-1.5v-9.94zm1.5 14.97a1.5 1.5 0 00-1.5 1.5v.53a1.5 1.5 0 001.5 1.5h.53a1.5 1.5 0 001.5-1.5v-.53a1.5 1.5 0 00-1.5-1.5h-.53z">
                        </path>
                    </svg>
                    Log in to continue
                </div>
                <div class="content-description">
                    Log in via your Steam profile to continue using the site
                </div>
                <div class="content-button">
                    <a href="#" onclick="auth();return false;" class="loginButton"><img
                            src="https://lis-skins.ru//assets/images/steam_logo.svg"> Login via Steam</a>
                </div>
            </div>
        </div>

        <div id="alert-popup" style="display: none">
            <div class="popup-title">Error</div>
            <div class="popup-center-message">
                <div class="content-title">
                    <svg width="40" height="40" viewBox="0 0 40 40">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M40 20c0 11.046-8.954 20-20 20S0 31.046 0 20 8.954 0 20 0s20 8.954 20 20zm-21.765-7.912a1.5 1.5 0 011.5-1.5h.53a1.5 1.5 0 011.5 1.5v9.941a1.5 1.5 0 01-1.5 1.5h-.53a1.5 1.5 0 01-1.5-1.5v-9.94zm1.5 14.97a1.5 1.5 0 00-1.5 1.5v.53a1.5 1.5 0 001.5 1.5h.53a1.5 1.5 0 001.5-1.5v-.53a1.5 1.5 0 00-1.5-1.5h-.53z">
                        </path>
                    </svg>
                    <span>Oops...</span>
                </div>
                <div class="content-description">
                    {text}
                </div>
                <div class="content-button">
                    <a href="#" class="popup-button popup-close">Close</a>
                </div>
            </div>
        </div>

        <div class="notification-alert">
            <div class="close">
                <svg width="14" height="14" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
                    <line fill="none" stroke="#000" stroke-width="1.1" x1="1" y1="1" x2="13"
                          y2="13"></line>
                    <line fill="none" stroke="#000" stroke-width="1.1" x1="13" y1="1" x2="1"
                          y2="13"></line>
                </svg>
            </div>
            <div class="content"></div>
        </div>

        <script>
            var lsConfig = {
                baseUrl: 'https://lis-skins.ru',
                env: 'production',
                url: 'https://lis-skins.ru', // localized url
                currencies: {
                    "usd": {
                        "symbol": "$",
                        "rate": 1,
                        "symbol_html": "$",
                        "title": "USD",
                        "name": "usd"
                    },
                    "rub": {
                        "symbol": "\u20bd",
                        "rate": 96.11,
                        "symbol_html": "<svg xmlns=\"http:\/\/www.w3.org\/2000\/svg\" viewBox=\"0 0 255.15 300\"><defs><style>.cls-1{fill:#a73006;}<\/style><\/defs><path d=\"M165.58 177.2c68.93-.13 89.62-39.82 89.62-94.7C255.16 36.94 227.34 0 165.58 0h-120v209.46H0v46.28h45.58V300h50.35v-44.26h42.77v-46.28H95.9V177.2h69.68zM95.88 47.3l67.36-.5c20.35 0 37.5 12.22 37.5 41.8 0 32.5-15.1 41.3-34.18 41.3H95.9V47.3z\" class=\"cls-1\"\/><\/svg>\n",
                        "title": "RUB",
                        "name": "rub"
                    },
                    "uah": {
                        "symbol": "\u20b4",
                        "rate": 39.88,
                        "symbol_html": "\u20b4",
                        "title": "UAH",
                        "name": "uah"
                    },
                    "kzt": {
                        "symbol": "\u20b8",
                        "rate": 437.34,
                        "symbol_html": "\u20b8",
                        "title": "KZT",
                        "name": "kzt"
                    }
                },
                currencyName: 'usd',
                userId: 0,
                balance: 0,
                withdrawableBalance: 0,
                lastPayoutWallets: [],
                yandexMetrikaId: 44561789,
                qiwi_percent_additional: 1,
                phrases: {
                    min_deposit_sum: "Minimum Deposit amount:",
                    max_deposit_sum: "Maximum Deposit amount:",
                    min_withdraw_sum: "Minimum withdrawal amount:",
                    max_withdraw_sum: "Maximum withdrawal amount:",
                    not_enough_balance: "Not enough on balance",
                    refill_balance: "Balance refill",
                    text_copied: "Copied"
                },
                routeName: "page.contacts",
                userEmail: null,
                timeZone: null,
                errorMessage: null,
                shouldShowPromoPopup: null,
                shouldShowPromoCodeActivatedPopup: null,
            }
        </script>


        <div id="jivo-iframe-container"
             style="opacity: 0; visibility: hidden; width: 0px; height: 0px; overflow: hidden;">
            <iframe src="" role="presentation" allow="autoplay" title="Jivochat" name="jivo_container"
                    id="jivo_container" frameborder="no"></iframe>
        </div>
        <jdiv>
            <jdiv class="globalClass_ebf4">
                <jdiv translate="no" class="notranslate"
                      style="animation-duration: 300ms; animation-timing-function: cubic-bezier(0.39, 0.24, 0.21, 0.99); animation-delay: 0s; animation-iteration-count: 1; animation-direction: normal; animation-fill-mode: both; animation-play-state: running; animation-name: Label_CLOSE_WIDGET_b80f; display: block; z-index: 2147483646; position: fixed;">
                    <jdiv class="label_a2ed _bottom_f236 __show_c3bb notranslate" translate="no" id="jvlabelWrap"
                          style="max-width: calc(-80px + 100vw); bottom: 0px; right: 40px; background: linear-gradient(95deg, rgb(255, 143, 0) 20%, rgb(255, 143, 0) 80%);">
                        <jdiv class="labelStatus_a174"
                              style="background-image: url(&quot;data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2220%22%20height%3D%2220%22%20viewBox%3D%220%200%2020%2020%22%3E%0A%20%20%20%20%3Cg%20fill%3D%22none%22%20fill-rule%3D%22evenodd%22%3E%0A%20%20%20%20%20%20%20%20%3Cpath%20d%3D%22M0%200h20v20H0z%22%2F%3E%0A%20%20%20%20%20%20%20%20%3Cpath%20stroke%3D%22%23F0F1F1%22%20stroke-width%3D%221.5%22%20d%3D%22M3%203h14a2%202%200%200%201%202%202v10a2%202%200%200%201-2%202H3a2%202%200%200%201-2-2V5a2%202%200%200%201%202-2z%22%2F%3E%0A%20%20%20%20%20%20%20%20%3Cpath%20stroke%3D%22%23F0F1F1%22%20stroke-width%3D%221.5%22%20d%3D%22M16.074%207.064l-6.01%204.01-6.01-4.01%22%2F%3E%0A%20%20%20%20%3C%2Fg%3E%0A%3C%2Fsvg%3E%0A&quot;);">
                        </jdiv>
                        <jdiv class="hoverl_d621">
                            <jdiv class="omnichannel_e66c bottom_c4e6"></jdiv>
                        </jdiv>
                        {{--  <jdiv class="text_f41a contentTransitionWrap_a6fb _offline_a5f6 _noAd_cfe3"
                            style="font-size: 15px; font-family: Arial, Arial; font-style: normal; color: rgb(240, 241, 241);">
                            Отправьте нам сообщение</jdiv>  --}}
                        <jdiv class="leafCont_afcc">
                            <jdiv class="leaf_e633 _bottom_ee21">
                                <jdiv class="cssLeaf_a0fe"
                                      style="background-image: url(&quot;data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2232%22%20height%3D%2240%22%20viewBox%3D%220%200%2032%2040%22%3E%0A%20%20%20%20%3Cg%20fill%3D%22none%22%20fill-rule%3D%22evenodd%22%3E%0A%20%20%20%20%20%20%20%20%3Cpath%20fill%3D%22%23ff8f00%22%20d%3D%22M0%200h9.02L32%2033.196V40H0z%22%2F%3E%0A%20%20%20%20%20%20%20%20%3Cpath%20fill%3D%22%23ff8f00%22%20d%3D%22M9%200c3.581.05%2023%205.426%2023%2033.08v.03C18.922%2030.751%209%2019.311%209%205.554V0z%22%20fill-opacity%3D%221%22%2F%3E%0A%20%20%20%20%20%20%20%20%3Cpath%20fill%3D%22%235e5f61%22%20d%3D%22M9%200c3.581.05%2023%205.426%2023%2033.08v.03C18.922%2030.751%209%2019.311%209%205.554V0z%22%20fill-opacity%3D%220.7%22%2F%3E%0A%20%20%20%20%3C%2Fg%3E%0A%3C%2Fsvg%3E%0A&quot;);">
                                </jdiv>
                            </jdiv>
                        </jdiv>
                    </jdiv>
                </jdiv>
                <jdiv id="jivo-player" class="player_b2a1">
                    <audio preload="auto" id="jivo-sound-agent_message">
                        <source src="https://code.jivosite.com/sounds/agent_message.mp3" type="audio/mpeg">
                        <source src="https://code.jivosite.com/sounds/agent_message.ogg"
                                type="audio/ogg; codecs=vorbis">
                        <source src="https://code.jivosite.com/sounds/agent_message.wav" type="audio/wav">
                    </audio>
                    <audio preload="auto" id="jivo-sound-notification">
                        <source src="https://code.jivosite.com/sounds/notification.mp3" type="audio/mpeg">
                        <source src="https://code.jivosite.com/sounds/notification.ogg" type="audio/ogg; codecs=vorbis">
                        <source src="https://code.jivosite.com/sounds/notification.wav" type="audio/wav">
                    </audio>
                    <audio preload="auto" id="jivo-sound-outgoing_message">
                        <source src="https://code.jivosite.com/sounds/outgoing_message.mp3" type="audio/mpeg">
                        <source src="https://code.jivosite.com/sounds/outgoing_message.ogg"
                                type="audio/ogg; codecs=vorbis">
                        <source src="https://code.jivosite.com/sounds/outgoing_message.wav" type="audio/wav">
                    </audio>
                </jdiv>
                <jdiv id="jcont" translate="no" class="notranslate"
                      style="animation-duration: 300ms; animation-timing-function: cubic-bezier(0.39, 0.24, 0.21, 0.99); animation-delay: 0s; animation-iteration-count: 1; animation-direction: normal; animation-fill-mode: both; animation-play-state: running; animation-name: WidgetContainer_CLOSE_WIDGET_cd28; --jright: 30px; --jheight: 496px; display: block; position: fixed; --jlabelwidth: 300px; --jlabelright: 40px;">
                    <jdiv class="wrap_f13d" dir="ltr" id="jivo_action">
                        <jdiv class="closeButton_ccd4" id="jivo_close_button">
                            <jdiv class="closeIcon_f289"
                                  style="background-image: url(&quot;data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2228%22%20height%3D%2228%22%20viewBox%3D%220%200%2028%2028%22%3E%0A%20%20%20%20%3Cg%20fill%3D%22none%22%20fill-rule%3D%22evenodd%22%20transform%3D%22translate(2%202)%22%3E%0A%20%20%20%20%20%20%20%20%3Ccircle%20cx%3D%2212%22%20cy%3D%2212%22%20r%3D%2212%22%20fill%3D%22%23FFF%22%20opacity%3D%221%22%2F%3E%0A%20%20%20%20%20%20%20%20%3Ccircle%20cx%3D%2212%22%20cy%3D%2212%22%20r%3D%2212.75%22%20stroke%3D%22%23222D38%22%20stroke-width%3D%221.5%22%20opacity%3D%221%22%2F%3E%0A%20%20%20%20%20%20%20%20%3Cg%20fill%3D%22%23222D38%22%20opacity%3D%221%22%20transform%3D%22translate(6%206)%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3Crect%20width%3D%221.611%22%20height%3D%2213.9%22%20x%3D%225.435%22%20y%3D%22-.941%22%20rx%3D%22.806%22%20transform%3D%22rotate(45%206.24%206.01)%22%2F%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3Crect%20width%3D%221.611%22%20height%3D%2213.9%22%20x%3D%225.435%22%20y%3D%22-.941%22%20rx%3D%22.806%22%20transform%3D%22scale(-1%201)%20rotate(45%200%20-9.058)%22%2F%3E%0A%20%20%20%20%20%20%20%20%3C%2Fg%3E%0A%20%20%20%20%3C%2Fg%3E%0A%3C%2Fsvg%3E%0A&quot;);">
                            </jdiv>
                        </jdiv>
                    </jdiv>
                </jdiv>
                <jdiv class="pseudoHeight_bffa"></jdiv>
                <jdiv class="jivoMouseTrack_e1f3"></jdiv>
            </jdiv>
        </jdiv>
    @endsection
</div>
