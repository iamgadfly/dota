<div>
    @section('content')
        <div class="layout-container">
            <div class="page-header small">
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
                        <use xlink:href="/assets/images/sprite.svg?id=1bf8e8d8d8de93be6c9fa2bd14b8d2c5#right-icon"></use>
                    </svg>

                    <span itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                        <span itemprop="name">Buy skins</span>
                        <meta itemprop="position" content="2">
                    </span>
                </div>
                <h1 style="margin-top:30px">Buy skins</h1>
            </div>

            <div class="wrap">
                <div class="skins-market">

                    <div class="sidebar">
                        <form id="market-form" class="market-form">
                            <div class="market-filter-scroll">
                                <div class="collapse-field opened">
                                    <div class="field-title">
                                        Price <span class="field-title-counter"></span>
                                        <div class="field-title-icons">
                                            <span class="field-title-icons-clear">
                                                <i class="fa fa-times" aria-hidden="true"></i>
                                            </span>
                                            <span class="field-title-icons-close">
                                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="field-content">
                                        <div class="grouped-input grouped-input--two-fields">
                                            <div class="filter-input">
                                                <input type="text" placeholder="Price from" name="price_from"
                                                    class="filter-input__input filter-input__input--has-currency price-field">
                                                <div class="filter-input__icon-currency filter-input__icon-currency--usd">
                                                    <i class="fa fa-usd"></i>
                                                </div>
                                                <div class="filter-input__icon-clear">
                                                    <i class="fa fa-times"></i>
                                                </div>
                                                <div class="filter-input__title">
                                                    Price from
                                                </div>
                                            </div>
                                            <div class="filter-input">
                                                <input type="text" placeholder="Price to" name="price_to"
                                                    class="filter-input__input filter-input__input--has-currency price-field">
                                                <div class="filter-input__icon-currency filter-input__icon-currency--usd">
                                                    <i class="fa fa-usd"></i>
                                                </div>
                                                <div class="filter-input__icon-clear">
                                                    <i class="fa fa-times"></i>
                                                </div>
                                                <div class="filter-input__title">
                                                    Price to
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="market-filter-list">
                                    <div class="collapse-field">
                                        <div class="field-title">
                                            Rarity <span class="field-title-counter"></span>
                                            <div class="field-title-icons">
                                                <span class="field-title-icons-clear">
                                                    <i class="fa fa-times" aria-hidden="true"></i>
                                                </span>
                                                <span class="field-title-icons-close">
                                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="field-content">
                                            <div class="checkboxes-list">
                                                <div class="checkbox">
                                                    <input type="checkbox" id="rarity_9" name="rarity[]" value="9">
                                                    <label for="rarity_9">Extraordinary</label>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="rarity_12" name="rarity[]" value="12">
                                                    <label for="rarity_12">Master</label>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="rarity_5" name="rarity[]" value="5">
                                                    <label for="rarity_5">Covert</label>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="rarity_1" name="rarity[]" value="1">
                                                    <label for="rarity_1">Base Grade</label>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="rarity_3" name="rarity[]"
                                                        value="3">
                                                    <label for="rarity_3">Consumer Grade</label>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="rarity_4" name="rarity[]"
                                                        value="4">
                                                    <label for="rarity_4">Contraband</label>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="rarity_25" name="rarity[]"
                                                        value="25">
                                                    <label for="rarity_25">Stock</label>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="rarity_8" name="rarity[]"
                                                        value="8">
                                                    <label for="rarity_8">Exotic</label>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="rarity_24" name="rarity[]"
                                                        value="24">
                                                    <label for="rarity_24">Superior</label>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="rarity_2" name="rarity[]"
                                                        value="2">
                                                    <label for="rarity_2">Classified</label>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="rarity_22" name="rarity[]"
                                                        value="22">
                                                    <label for="rarity_22">Remarkable</label>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="rarity_7" name="rarity[]"
                                                        value="7">
                                                    <label for="rarity_7">Exceptional</label>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="rarity_23" name="rarity[]"
                                                        value="23">
                                                    <label for="rarity_23">Restricted</label>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="rarity_10" name="rarity[]"
                                                        value="10">
                                                    <label for="rarity_10">High Grade</label>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="rarity_6" name="rarity[]"
                                                        value="6">
                                                    <label for="rarity_6">Distinguished</label>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="rarity_21" name="rarity[]"
                                                        value="21">
                                                    <label for="rarity_21">Mil-Spec Grade</label>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="rarity_11" name="rarity[]"
                                                        value="11">
                                                    <label for="rarity_11">Industrial Grade</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="collapse-field">
                                        <div class="field-title">
                                            Exterior <span class="field-title-counter"></span>
                                            <div class="field-title-icons">
                                                <span class="field-title-icons-clear">
                                                    <i class="fa fa-times" aria-hidden="true"></i>
                                                </span>
                                                <span class="field-title-icons-close">
                                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="field-content">
                                            <div class="checkboxes-list">
                                                <div class="checkbox">
                                                    <input type="checkbox" id="exterior_2" name="exterior[]"
                                                        value="2">
                                                    <label for="exterior_2">Factory New</label>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="exterior_4" name="exterior[]"
                                                        value="4">
                                                    <label for="exterior_4">Minimal Wear</label>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="exterior_3" name="exterior[]"
                                                        value="3">
                                                    <label for="exterior_3">Field-Tested</label>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="exterior_6" name="exterior[]"
                                                        value="6">
                                                    <label for="exterior_6">Well-Worn</label>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="exterior_1" name="exterior[]"
                                                        value="1">
                                                    <label for="exterior_1">Battle-Scarred</label>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="exterior_5" name="exterior[]"
                                                        value="5">
                                                    <label for="exterior_5">Not Painted</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="collapse-field">
                                        <div class="field-title">
                                            Hold <span class="field-title-counter"></span>
                                            <div class="field-title-icons">
                                                <span class="field-title-icons-clear">
                                                    <i class="fa fa-times" aria-hidden="true"></i>
                                                </span>
                                                <span class="field-title-icons-close">
                                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="field-content">
                                            <div class="checkboxes-list">
                                                <div class="checkbox">
                                                    <input type="checkbox" id="hold_0" name="hold[]" value="-1">
                                                    <label for="hold_0">Without hold</label>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="hold_1" name="hold[]" value="1">
                                                    <label for="hold_1">1 day</label>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="hold_2" name="hold[]" value="2">
                                                    <label for="hold_2">2 days</label>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="hold_3" name="hold[]" value="3">
                                                    <label for="hold_3">3 days</label>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="hold_4" name="hold[]" value="4">
                                                    <label for="hold_4">4 days</label>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="hold_5" name="hold[]" value="5">
                                                    <label for="hold_5">5 days</label>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="hold_6" name="hold[]" value="6">
                                                    <label for="hold_6">6 days</label>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="hold_7" name="hold[]" value="7">
                                                    <label for="hold_7">7 days</label>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="hold_8" name="hold[]" value="8">
                                                    <label for="hold_8">8 days</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="collapse-field">
                                        <div class="field-title">
                                            Float
                                            <span class="field-title-counter"></span>
                                            <div class="field-title-icons">
                                                <span class="field-title-icons-clear">
                                                    <i class="fa fa-times" aria-hidden="true"></i>
                                                </span>
                                                <span class="field-title-icons-close">
                                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="field-content">
                                            <div class="grouped-input grouped-input--two-fields">
                                                <div class="filter-input">
                                                    <input type="text" placeholder="Float from" name="float_from"
                                                        class="filter-input__input float-field">
                                                    <div class="filter-input__icon-clear">
                                                        <i class="fa fa-times"></i>
                                                    </div>
                                                    <div class="filter-input__title">
                                                        Float from
                                                    </div>
                                                </div>
                                                <div class="filter-input">
                                                    <input type="text" placeholder="Float to" name="float_to"
                                                        class="filter-input__input float-field">
                                                    <div class="filter-input__icon-clear">
                                                        <i class="fa fa-times"></i>
                                                    </div>
                                                    <div class="filter-input__title">
                                                        Float to
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="collapse-field">
                                        <div class="field-title">
                                            Phase <span class="field-title-counter"></span>
                                            <div class="field-title-icons">
                                                <span class="field-title-icons-clear">
                                                    <i class="fa fa-times" aria-hidden="true"></i>
                                                </span>
                                                <span class="field-title-icons-close">
                                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="field-content">
                                            <div class="checkboxes-list">
                                                <div class="checkbox">
                                                    <input type="checkbox" id="phase_1" name="phase[]" value="1">
                                                    <label for="phase_1">Phase 1</label>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="phase_2" name="phase[]" value="2">
                                                    <label for="phase_2">Phase 2</label>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="phase_3" name="phase[]" value="3">
                                                    <label for="phase_3">Phase 3</label>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="phase_4" name="phase[]" value="4">
                                                    <label for="phase_4">Phase 4</label>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="phase_5" name="phase[]" value="5">
                                                    <label for="phase_5">Emerald</label>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="phase_6" name="phase[]" value="6">
                                                    <label for="phase_6">Sapphire</label>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="phase_7" name="phase[]" value="7">
                                                    <label for="phase_7">Ruby</label>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="phase_8" name="phase[]" value="8">
                                                    <label for="phase_8">Black Pearl</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="collapse-field">
                                        <div class="field-title">
                                            Stickers <span class="field-title-counter"></span>
                                            <div class="field-title-icons">
                                                <span class="field-title-icons-clear">
                                                    <i class="fa fa-times" aria-hidden="true"></i>
                                                </span>
                                                <span class="field-title-icons-close">
                                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="field-content">
                                            <div class="checkboxes-list">
                                                <div class="checkboxes-list-scroll">
                                                    <div class="checkboxes-list-top">
                                                        <div class="checkbox hidden-icon">
                                                            <input type="checkbox" id="filter_any_stickers"
                                                                name="stickers[]" value="any">
                                                            <label for="filter_any_stickers">Any Stickers</label>
                                                        </div>
                                                        <div class="checkbox hidden-icon">
                                                            <input type="checkbox" id="filter_expensive_stickers"
                                                                name="stickers[]" value="expensive">
                                                            <label for="filter_expensive_stickers">Expensive
                                                                Stickers</label>
                                                        </div>
                                                    </div>
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="filter_sticker_category_3"
                                                            name="sticker_category_id[]" value="3">
                                                        <label for="filter_sticker_category_3">2020 RMR</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="filter_sticker_category_2"
                                                            name="sticker_category_id[]" value="2">
                                                        <label for="filter_sticker_category_2">Antwerp 2022</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="filter_sticker_category_9"
                                                            name="sticker_category_id[]" value="9">
                                                        <label for="filter_sticker_category_9">Atlanta 2017</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="filter_sticker_category_5"
                                                            name="sticker_category_id[]" value="5">
                                                        <label for="filter_sticker_category_5">Berlin 2019</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="filter_sticker_category_12"
                                                            name="sticker_category_id[]" value="12">
                                                        <label for="filter_sticker_category_12">Boston 2018</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="filter_sticker_category_13"
                                                            name="sticker_category_id[]" value="13">
                                                        <label for="filter_sticker_category_13">Cluj-Napoca 2015</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="filter_sticker_category_16"
                                                            name="sticker_category_id[]" value="16">
                                                        <label for="filter_sticker_category_16">Cologne 2014</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="filter_sticker_category_15"
                                                            name="sticker_category_id[]" value="15">
                                                        <label for="filter_sticker_category_15">Cologne 2015</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="filter_sticker_category_10"
                                                            name="sticker_category_id[]" value="10">
                                                        <label for="filter_sticker_category_10">Cologne 2016</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="filter_sticker_category_18"
                                                            name="sticker_category_id[]" value="18">
                                                        <label for="filter_sticker_category_18">DreamHack 2014</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="filter_sticker_category_19"
                                                            name="sticker_category_id[]" value="19">
                                                        <label for="filter_sticker_category_19">Katowice 2014</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="filter_sticker_category_14"
                                                            name="sticker_category_id[]" value="14">
                                                        <label for="filter_sticker_category_14">Katowice 2015</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="filter_sticker_category_8"
                                                            name="sticker_category_id[]" value="8">
                                                        <label for="filter_sticker_category_8">Katowice 2019</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="filter_sticker_category_1"
                                                            name="sticker_category_id[]" value="1">
                                                        <label for="filter_sticker_category_1">Krakow 2017</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="filter_sticker_category_4"
                                                            name="sticker_category_id[]" value="4">
                                                        <label for="filter_sticker_category_4">London 2018</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="filter_sticker_category_11"
                                                            name="sticker_category_id[]" value="11">
                                                        <label for="filter_sticker_category_11">MLG Columbus
                                                            2016</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="filter_sticker_category_20"
                                                            name="sticker_category_id[]" value="20">
                                                        <label for="filter_sticker_category_20">Paris 2023</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="filter_sticker_category_7"
                                                            name="sticker_category_id[]" value="7">
                                                        <label for="filter_sticker_category_7">Rio 2022</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="filter_sticker_category_6"
                                                            name="sticker_category_id[]" value="6">
                                                        <label for="filter_sticker_category_6">Stockholm 2021</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="filter_sticker_category_17"
                                                            name="sticker_category_id[]" value="17">
                                                        <label for="filter_sticker_category_17">Стокгольм 2021</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="collapse-field opened">
                                        <div class="field-title">
                                            Other <span class="field-title-counter"></span>
                                            <div class="field-title-icons">
                                                <span class="field-title-icons-clear">
                                                    <i class="fa fa-times" aria-hidden="true"></i>
                                                </span>
                                                <span class="field-title-icons-close">
                                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="field-content">
                                            <div class="checkboxes-list">
                                                <div class="checkbox">
                                                    <input type="checkbox" id="is_stattrak" name="is_stattrak"
                                                        value="1">
                                                    <label for="is_stattrak">StatTrak™</label>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="is_without_stattrak"
                                                        name="is_without_stattrak" value="1">
                                                    <label for="is_without_stattrak">Without StatTrak™</label>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="is_souvenir" name="is_souvenir"
                                                        value="1">
                                                    <label for="is_souvenir">Souvenir</label>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="is_without_souvenir"
                                                        name="is_without_souvenir" value="1">
                                                    <label for="is_without_souvenir">Without Souvenir</label>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="has_name_tag" name="has_name_tag"
                                                        value="1">
                                                    <label for="has_name_tag">With Nametag</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="reset-filters">Reset filters</div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="right-column">
                <div class="controls">
                    <div class="reload">
                        <svg class="reload-icon">
                            <use xlink:href="/assets/images/sprite.svg?id=1bf8e8d8d8de93be6c9fa2bd14b8d2c5#reload">
                            </use>
                        </svg>
                    </div>

                    <div class="search skins-navigation__search" tabindex="1">
                        <input type="text" placeholder="Skins Search" class="inventory-search" autocomplete="off"
                            name="query" value="">
                        <svg class="search-icon">
                            <use xlink:href="/assets/images/sprite.svg?id=1bf8e8d8d8de93be6c9fa2bd14b8d2c5#search">
                            </use>
                        </svg>
                    </div>

                    <div class="sort sort-with-ik-select">
                        <div class="ik_select market-js-sort-select market-js-select price-desc"
                            style="position: relative; display: inline-block; width: auto; vertical-align: top;">
                            <div
                                class="ik_select_link market-js-sort-select market-js-select-link ik_select_link_novalue price-desc">
                                <div class="ik_select_link_text">Price</div>
                            </div>
                            <div class="ik_select_dropdown market-js-sort-select market-js-select-dd price-desc"
                                style="position: absolute; z-index: 9998; width: 170px; display: none;">
                                <div class="ik_select_list" style="position: relative;">
                                    <div class="ik_select_list_inner" style="height: auto;">
                                        <ul>
                                            <li class="ik_select_option" data-value=""><span
                                                    class="ik_select_option_label">Price</span></li>
                                            <li class="ik_select_option" data-value="price_desc"><span
                                                    class="ik_select_option_label">Price</span></li>
                                            <li class="ik_select_option" data-value="price_asc"><span
                                                    class="ik_select_option_label">Price</span></li>
                                            <li class="ik_select_option" data-value="popularity"><span
                                                    class="ik_select_option_label">Popularity</span></li>
                                            <li class="ik_select_option" data-value="date_desc"><span
                                                    class="ik_select_option_label">Newest</span></li>
                                            <li class="ik_select_option" data-value="date_asc"><span
                                                    class="ik_select_option_label">Oldest</span></li>
                                            <li class="ik_select_option" data-value="float_desc"><span
                                                    class="ik_select_option_label">Float</span></li>
                                            <li class="ik_select_option" data-value="float_asc"><span
                                                    class="ik_select_option_label">Float</span></li>
                                            <li class="ik_select_option" data-value="hot"><span
                                                    class="ik_select_option_label">Hot Offers</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <select id="skins-sort" class="skins-market-skins-sort" name="sort_by"
                                style="position: absolute; margin: 0px; padding: 0px; top: 0px; left: -9999px;">
                                <option value="">Price</option>
                                <option value="price_desc">Price</option>
                                <option value="price_asc">Price</option>
                                <option value="popularity">Popularity</option>
                                <option value="date_desc">Newest</option>
                                <option value="date_asc">Oldest</option>
                                <option value="float_desc">Float</option>
                                <option value="float_asc">Float</option>
                                <option value="hot">Hot Offers</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div id="skins-obj">
                <div class="skins-market-skins-list ">
                    @php
                        $h = new \App\Helpers\CartHelper();
                        //                              dd($h->get());
                    @endphp


                    @foreach ($items as $item)
                        <div data-classid="{{ $item->classid }}" data-id="{{ $item->id }}"
                            wire:key="{{ $item->id }}" class="item market_item market_item_94806102 item_csgo">
                            <div class="skin-info ">
                                <div class="info-item hold">
                                    2 days
                                </div>
                                <div class="info-item">FN</div>
                                <div class="info-item">0.040087</div>
                            </div>
                            {{--                            https://lis-skins.ru/market_images/98943_s.png --}}
                            <img src="{{ str_replace('"', '', $item->image) }}" class="image" alt="{{ $item->name }}"
                                title="{{ $item->name }}">
                            {{--                            https://lis-skins.ru/market/csgo/%E2%98%85-m9-bayonet-gamma-doppler-emerald-factory-new/ --}}
                            <a href="/market/item/{{ $item->slug }}" class="name">
                                <div class="name-inner">{{ $item->name }}</div>
                                {{--                                <div class="name-exterior">(Factory New)</div> --}}
                            </a>
                            <div class="bottom">
                                <div class="price">{{ $item->price_usd }}$</div>
                            </div>

                            <div class="in-cart-icon"></div>
                            <div class="to-cart" data-unlock-at="2 days"><span wire:click="test()"
                                    style="display: flex">

                                    <i class="fa fa-cart-plus">
                                        <svg height="24" version="1.1" width="24"
                                            xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#"
                                            xmlns:dc="http://purl.org/dc/elements/1.1/"
                                            xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#">
                                            <g transform="translate(0 -1028.4)">
                                                <path
                                                    d="m22 12c0 5.523-4.477 10-10 10-5.5228 0-10-4.477-10-10 0-5.5228 4.4772-10 10-10 5.523 0 10 4.4772 10 10z"
                                                    fill="#27ae60" transform="translate(0 1029.4)" />
                                                <path
                                                    d="m22 12c0 5.523-4.477 10-10 10-5.5228 0-10-4.477-10-10 0-5.5228 4.4772-10 10-10 5.523 0 10 4.4772 10 10z"
                                                    fill="#2ecc71" transform="translate(0 1028.4)" />
                                                <path d="m6.0001 1042.4h4.9999v5h2v-5h5v-2h-5v-5h-2v5h-4.9999v2z"
                                                    fill="#27ae60" />
                                                <path d="m6 1041.4h5v5h2v-5h5v-2h-5v-5h-2v5h-5v2z" fill="#ecf0f1" />
                                            </g>
                                        </svg>
                                        {{--                                        <img src="{{ asset('/img/plus.png') }}" alt=""> --}}

                                    </i>
                                    &nbsp; В корзину</span></div>
                        </div>
                    @endforeach
                </div>
            </div>

            <nav>
                <ul class="pagination">

                    <li class="page-item disabled" aria-disabled="true" aria-label="prev">
                        <span class="page-link" aria-hidden="true">‹</span>
                    </li>


                    <li class="page-item active" aria-current="page"><span
                            class="page-link">{{ $items->currentPage() }}</span></li>

                    @for ($i = 1; $i <= $items->lastPage(); $i++)
                        @if ($items->currentPage() == $i)
                            @continue
                        @endif

                        <li class="page-item"><a class="page-link"
                                href="/market/?page={{ $i }}">{{ $i }}</a>
                        </li>
                    @endfor

                    <li class="page-item">
                        <a class="page-link"
                            href="/market/?page={{ $items->currentPage() + 1 < $items->lastPage() ? $items->currentPage() + 1 : $items->lastPage() }}"
                            rel="next" aria-label="next">›</a>
                    </li>
                </ul>
            </nav>

        </div>

        <div class="seo-text-block"></div>
    @endsection
</div>
