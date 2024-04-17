<div class="layout-container">
    <div class="page-header">
        <div class="bread" itemscope="" itemtype="https://schema.org/BreadcrumbList">
            <svg class="breadcrumb-home-icon">
                <use xlink:href="/assets/images/sprite.svg?id=1bf8e8d8d8de93be6c9fa2bd14b8d2c5#home"></use>
            </svg>

            <span itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                <a href="https://lis-skins.ru/" itemprop="item">
                    <span itemprop="name">Главная</span>
                </a>
                <meta itemprop="position" content="1">
            </span>

            <svg class="breadcrumb-icon">
                <use xlink:href="/assets/images/sprite.svg?id=1bf8e8d8d8de93be6c9fa2bd14b8d2c5#right-icon"></use>
            </svg>

            <span itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                <span itemprop="name">Личный кабинет</span>
                <meta itemprop="position" content="2">
            </span>
        </div>
        <h1>Личный кабинет</h1>
    </div>

    <div class="cabinet-block">
        <div class="wrap">
            <div class="block-content">
                <div class="inner">
                    <div class="user-profile">
                        <div class="avatar">
                            <a href="http://steamcommunity.com/profiles/76561198841334052" target="_blank"
                                style="background-image: url(https://avatars.akamai.steamstatic.com/3250e5827df1b4dfdf36c3b3096d9bf59a238ece_full.jpg);"></a>
                        </div>
                        <div class="user-info">
                            <div class="user-info__wrapper">
                                <p class="username">HOBBIT</p>

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

                            <div class="profile-fields-two-column">
                                <div class="profile-fields-wrap">
                                    <div class="profile-fields">
                                        <div class="profile-field-row">
                                            <div class="profile-field-title">
                                                Бонус </div>
                                            <div class="profile-field-value profile-bonus-value">
                                                <span>+0%</span>
                                                <a href="https://lis-skins.ru/bonuses/">Подробнее...</a>
                                            </div>
                                        </div>
                                        <div class="profile-field-row">
                                            <div class="profile-field-title">
                                                Ранг </div>
                                            <div class="profile-field-value profile-rank-value">
                                                <span>СТАРТЕР</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-fields-wrap">
                                    <div class="profile-fields">
                                        <div class="profile-field-row">
                                            <div class="profile-field-title">
                                                Trade URL
                                                <a href="https://steamcommunity.com/profiles/76561198841334052/tradeoffers/privacy#trade_offer_access_url"
                                                    target="_blank">
                                                    <i class="fa fa-external-link" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                            <div class="profile-field-value">
                                                <input type="text" placeholder="Trade URL" name="trade_url"
                                                    autocomplete="off" id="profile_trade_url" value="">
                                            </div>
                                            <div class="profile-field-save">
                                                <div class="save-button" id="profile_save_trade_url_button">Сохранить
                                                </div>
                                            </div>
                                        </div>

                                        <div class="profile-field-row">
                                            <div class="profile-field-title">
                                                Email
                                            </div>

                                            <div class="profile-field-value email">
                                                <span class="profile-field-value-icon error"></span>
                                                <span>Email не задан</span>
                                            </div>

                                            <div class="profile-field-edit">
                                                <button class="edit-button" id="add_email_button">Добавить
                                                    Email</button>
                                            </div>
                                        </div>
                                    </div>

                                    <span class="profile-field-info">Необходимо подтвердить ваш Email. Так вы сможете
                                        получать уведомления о ваших транзакция и коды безопасности.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="user-tabs">
                <div class="user-tab  active ">
                    <a href="/profile/">
                        <i class="fa fa-usd" aria-hidden="true"></i> Транзакции
                    </a>
                </div>
                <div class="user-tab ">
                    <a href="/inventory/">
                        <i class="fa fa-archive" aria-hidden="true"></i> Инвентарь
                    </a>
                </div>
                <div class="user-tab ">
                    <a href="/security">
                        <i class="fa fa-lock" aria-hidden="true"></i> Безопасность
                    </a>
                </div>
                <div class="user-tab ">
                    <a href="/referrals/">
                        <i class="fa fa-link" aria-hidden="true"></i> Реферальная программа
                    </a>
                </div>
            </div>

            <div class="block-content">
                <div class="block-content-header">
                    <div class="block-name">
                        Транзакции </div>
                    <div class="item-block-filters">
                        <div class="item-block-filters-inner">
                            <div class="item-block-filter">
                                <div class="filter-input">
                                    <input type="text" placeholder="ID транзакции" name="initiator_id"
                                        class="filter-input__input id-field">
                                    <div class="filter-input__icon-clear">
                                        <i class="fa fa-times"></i>
                                    </div>
                                    <div class="filter-input__title">
                                        ID транзакции </div>
                                </div>
                            </div>
                            <div class="item-block-filter">
                                <div class="filter-input">
                                    <input type="text" placeholder="Название скина" name="skin_name"
                                        class="filter-input__input">
                                    <div class="filter-input__icon-clear">
                                        <i class="fa fa-times"></i>
                                    </div>
                                    <div class="filter-input__title">
                                        Название скина </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="transactions-table transactions-table--profile">
                    <div class="table-responsive">
                        <table width="100%" class="order-items">
                            <tbody>
                                <tr class="row headers">
                                    <td class="cell">Тип / Дата</td>
                                    <td class="cell">ID</td>
                                    <td class="cell">Статус</td>
                                    <td class="cell">Сумма</td>
                                    <td class="cell">Платеж. система</td>
                                    <td class="cell">Куда</td>
                                    <td class="cell">Баланс</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
