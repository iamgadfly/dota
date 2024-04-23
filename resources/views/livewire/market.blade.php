<div>
    @php
        $h = new \App\Helpers\CartHelper();
//        dd($h->get());
    @endphp
    <div class="wrap" style="margin-top: 70px;">
        <div class="skins-market">
            <div class="market__filters-container-wrapper">
                <div class="market__filters-container"><!--[-->
                    <div class="market__right-block-header-top"><!--[--><!--]--><!----></div>
                    <div class="webkit-inner-scroll market__right-block-header-bottom"></div>
                    <div class="market__filters-additional-fields"><!--[--><!--]--></div>
                    <input type="hidden" id="market_filters_route_key" value=""><!--]-->
                </div>

                <input type="hidden" id="market_filters_vue_inited" value="1">
                <input type="hidden" id="market_filters_route_skin_category_id" value="">
                <input type="hidden" id="market_filters_route_skin_type_id" value="">

                <script type="text/javascript" id="vue-filters-context">
                    window.vueFiltersContext = {
                        "skinTypes": [],
                        "routeSkinCategory": null,
                        "routeSkinType": null,
                        "routeSkinHero": null,
                        "otherSkinCategories": [],
                        "lsConfig": {
                            "marketIndex": {
                                "gameIdentifier": "dota2"
                            }
                        },
                        "defaultLocale": "ru",
                        "fallbackLocale": "en"
                    }
                </script>
            </div>
            <div class="sidebar">
                <form id="market-form" class="market-form">
                    <div class="market-filter-scroll">
                        <div class="collapse-field opened">
                            <div class="field-title">
                                Цена <span class="field-title-counter"></span>
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
                                        <input type="text" placeholder="Цена от" name="price_from"
                                            class="filter-input__input filter-input__input--has-currency price-field">
                                        <div class="filter-input__icon-currency filter-input__icon-currency--rub">
                                            <i class="fa fa-rub"></i>
                                        </div>
                                        <div class="filter-input__icon-clear">
                                            <i class="fa fa-times"></i>
                                        </div>
                                        <div class="filter-input__title">
                                            Цена от
                                        </div>
                                    </div>
                                    <div class="filter-input">
                                        <input type="text" placeholder="Цена до" name="price_to"
                                            class="filter-input__input filter-input__input--has-currency price-field">
                                        <div class="filter-input__icon-currency filter-input__icon-currency--rub">
                                            <i class="fa fa-rub"></i>
                                        </div>
                                        <div class="filter-input__icon-clear">
                                            <i class="fa fa-times"></i>
                                        </div>
                                        <div class="filter-input__title">
                                            Цена до
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="market-filter-list">
                            <div class="collapse-field">
                                <div class="field-title">
                                    Тип <span class="field-title-counter"></span>
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
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="league" id="type_79" name="type_id[]"
                                                    value="79">
                                                <label for="type_79">Билет</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="ward" id="type_69" name="type_id[]"
                                                    value="69">
                                                <label for="type_69">Вард</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="pennant" id="type_74"
                                                    name="type_id[]" value="74">
                                                <label for="type_74">Вымпел</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="loading-screen" id="type_65"
                                                    name="type_id[]" value="65">
                                                <label for="type_65">Загрузочный экран</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="tool" id="type_61"
                                                    name="type_id[]" value="61">
                                                <label for="type_61">Инструмент</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="player-card" id="type_76"
                                                    name="type_id[]" value="76">
                                                <label for="type_76">Карточка игрока</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="treasure-key" id="type_73"
                                                    name="type_id[]" value="73">
                                                <label for="type_73">Ключ от сокровищницы</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="announcer" id="type_75"
                                                    name="type_id[]" value="75">
                                                <label for="type_75">Комментатор</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="courier" id="type_62"
                                                    name="type_id[]" value="62">
                                                <label for="type_62">Курьер</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="terrain" id="type_66"
                                                    name="type_id[]" value="66">
                                                <label for="type_66">Ландшафт</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="music" id="type_68"
                                                    name="type_id[]" value="68">
                                                <label for="type_68">Музыка</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="bundle" id="type_60"
                                                    name="type_id[]" value="60">
                                                <label for="type_60">Набор</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="cursor-pack" id="type_67"
                                                    name="type_id[]" value="67">
                                                <label for="type_67">Набор курсоров</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="sticker" id="type_144"
                                                    name="type_id[]" value="144">
                                                <label for="type_144">Наклейка</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="taunt" id="type_71"
                                                    name="type_id[]" value="71">
                                                <label for="type_71">Насмешка</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="misc" id="type_63"
                                                    name="type_id[]" value="63">
                                                <label for="type_63">Разное</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="recipe" id="type_85"
                                                    name="type_id[]" value="85">
                                                <label for="type_85">Рецепт</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="gem-rune" id="type_64"
                                                    name="type_id[]" value="64">
                                                <label for="type_64">Самоцвет/руна</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="treasure" id="type_70"
                                                    name="type_id[]" value="70">
                                                <label for="type_70">Сокровищница</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="hud-skin" id="type_72"
                                                    name="type_id[]" value="72">
                                                <label for="type_72">Стиль интерфейса</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="wearable" id="type_59"
                                                    name="type_id[]" value="59">
                                                <label for="type_59">Украшение</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="retired-chest" id="type_84"
                                                    name="type_id[]" value="84">
                                                <label for="type_84">Устаревшая сокровщиница</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="collapse-field">
                                <div class="field-title">
                                    Герой <span class="field-title-counter"></span>
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
                                        <div class="checkboxes-list-search">
                                            <i class="fa fa-search"></i>
                                            <input type="text" class="checkboxes-list-search-input"
                                                placeholder="Поиск">
                                            <i class="fa fa-close"></i>
                                        </div>
                                        <div class="checkboxes-list-scroll">
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="abaddon" id="hero_106"
                                                    name="hero_id[]" value="106">
                                                <label for="hero_106">Abaddon</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="alchemist" id="hero_117"
                                                    name="hero_id[]" value="117">
                                                <label for="hero_117">Alchemist</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="ancient-apparition" id="hero_93"
                                                    name="hero_id[]" value="93">
                                                <label for="hero_93">Ancient Apparition</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="anti-mage" id="hero_13"
                                                    name="hero_id[]" value="13">
                                                <label for="hero_13">Anti-Mage</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="arc-warden" id="hero_87"
                                                    name="hero_id[]" value="87">
                                                <label for="hero_87">Arc Warden</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="axe" id="hero_32"
                                                    name="hero_id[]" value="32">
                                                <label for="hero_32">Axe</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="bane" id="hero_121"
                                                    name="hero_id[]" value="121">
                                                <label for="hero_121">Bane</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="batrider" id="hero_68"
                                                    name="hero_id[]" value="68">
                                                <label for="hero_68">Batrider</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="beastmaster" id="hero_95"
                                                    name="hero_id[]" value="95">
                                                <label for="hero_95">Beastmaster</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="bloodseeker" id="hero_111"
                                                    name="hero_id[]" value="111">
                                                <label for="hero_111">Bloodseeker</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="bounty-hunter" id="hero_48"
                                                    name="hero_id[]" value="48">
                                                <label for="hero_48">Bounty Hunter</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="brewmaster" id="hero_25"
                                                    name="hero_id[]" value="25">
                                                <label for="hero_25">Brewmaster</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="bristleback" id="hero_74"
                                                    name="hero_id[]" value="74">
                                                <label for="hero_74">Bristleback</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="broodmother" id="hero_107"
                                                    name="hero_id[]" value="107">
                                                <label for="hero_107">Broodmother</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="centaur-warrunner" id="hero_34"
                                                    name="hero_id[]" value="34">
                                                <label for="hero_34">Centaur Warrunner</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="chaos-knight" id="hero_92"
                                                    name="hero_id[]" value="92">
                                                <label for="hero_92">Chaos Knight</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="chen" id="hero_116"
                                                    name="hero_id[]" value="116">
                                                <label for="hero_116">Chen</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="clinkz" id="hero_114"
                                                    name="hero_id[]" value="114">
                                                <label for="hero_114">Clinkz</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="clockwerk" id="hero_39"
                                                    name="hero_id[]" value="39">
                                                <label for="hero_39">Clockwerk</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="crystal-maiden" id="hero_53"
                                                    name="hero_id[]" value="53">
                                                <label for="hero_53">Crystal Maiden</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="dark-seer" id="hero_104"
                                                    name="hero_id[]" value="104">
                                                <label for="hero_104">Dark Seer</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="dark-willow" id="hero_46"
                                                    name="hero_id[]" value="46">
                                                <label for="hero_46">Dark Willow</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="dazzle" id="hero_24"
                                                    name="hero_id[]" value="24">
                                                <label for="hero_24">Dazzle</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="death-prophet" id="hero_38"
                                                    name="hero_id[]" value="38">
                                                <label for="hero_38">Death Prophet</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="disruptor" id="hero_59"
                                                    name="hero_id[]" value="59">
                                                <label for="hero_59">Disruptor</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="doom" id="hero_36"
                                                    name="hero_id[]" value="36">
                                                <label for="hero_36">Doom</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="dragon-knight" id="hero_5"
                                                    name="hero_id[]" value="5">
                                                <label for="hero_5">Dragon Knight</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="drow-ranger" id="hero_40"
                                                    name="hero_id[]" value="40">
                                                <label for="hero_40">Drow Ranger</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="earth-spirit" id="hero_21"
                                                    name="hero_id[]" value="21">
                                                <label for="hero_21">Earth Spirit</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="earthshaker" id="hero_57"
                                                    name="hero_id[]" value="57">
                                                <label for="hero_57">Earthshaker</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="elder-titan" id="hero_44"
                                                    name="hero_id[]" value="44">
                                                <label for="hero_44">Elder Titan</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="ember-spirit" id="hero_52"
                                                    name="hero_id[]" value="52">
                                                <label for="hero_52">Ember Spirit</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="enchantress" id="hero_16"
                                                    name="hero_id[]" value="16">
                                                <label for="hero_16">Enchantress</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="enigma" id="hero_97"
                                                    name="hero_id[]" value="97">
                                                <label for="hero_97">Enigma</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="faceless-void" id="hero_19"
                                                    name="hero_id[]" value="19">
                                                <label for="hero_19">Faceless Void</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="grimstroke" id="hero_112"
                                                    name="hero_id[]" value="112">
                                                <label for="hero_112">Grimstroke</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="gyrocopter" id="hero_3"
                                                    name="hero_id[]" value="3">
                                                <label for="hero_3">Gyrocopter</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="hoodwink" id="hero_7"
                                                    name="hero_id[]" value="7">
                                                <label for="hero_7">Hoodwink</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="huskar" id="hero_49"
                                                    name="hero_id[]" value="49">
                                                <label for="hero_49">Huskar</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="invoker" id="hero_4"
                                                    name="hero_id[]" value="4">
                                                <label for="hero_4">Invoker</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="io" id="hero_47"
                                                    name="hero_id[]" value="47">
                                                <label for="hero_47">Io</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="jakiro" id="hero_75"
                                                    name="hero_id[]" value="75">
                                                <label for="hero_75">Jakiro</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="juggernaut" id="hero_62"
                                                    name="hero_id[]" value="62">
                                                <label for="hero_62">Juggernaut</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="keeper-of-the-light" id="hero_90"
                                                    name="hero_id[]" value="90">
                                                <label for="hero_90">Keeper of the Light</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="kunkka" id="hero_45"
                                                    name="hero_id[]" value="45">
                                                <label for="hero_45">Kunkka</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="legion-commander" id="hero_99"
                                                    name="hero_id[]" value="99">
                                                <label for="hero_99">Legion Commander</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="leshrac" id="hero_30"
                                                    name="hero_id[]" value="30">
                                                <label for="hero_30">Leshrac</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="lich" id="hero_33"
                                                    name="hero_id[]" value="33">
                                                <label for="hero_33">Lich</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="lifestealer" id="hero_37"
                                                    name="hero_id[]" value="37">
                                                <label for="hero_37">Lifestealer</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="lina" id="hero_6"
                                                    name="hero_id[]" value="6">
                                                <label for="hero_6">Lina</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="lion" id="hero_61"
                                                    name="hero_id[]" value="61">
                                                <label for="hero_61">Lion</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="lone-druid" id="hero_17"
                                                    name="hero_id[]" value="17">
                                                <label for="hero_17">Lone Druid</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="luna" id="hero_11"
                                                    name="hero_id[]" value="11">
                                                <label for="hero_11">Luna</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="lycan" id="hero_2"
                                                    name="hero_id[]" value="2">
                                                <label for="hero_2">Lycan</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="magnus" id="hero_109"
                                                    name="hero_id[]" value="109">
                                                <label for="hero_109">Magnus</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="marci" id="hero_128"
                                                    name="hero_id[]" value="128">
                                                <label for="hero_128">Marci</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="mars" id="hero_35"
                                                    name="hero_id[]" value="35">
                                                <label for="hero_35">Mars</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="medusa" id="hero_120"
                                                    name="hero_id[]" value="120">
                                                <label for="hero_120">Medusa</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="meepo" id="hero_70"
                                                    name="hero_id[]" value="70">
                                                <label for="hero_70">Meepo</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="mirana" id="hero_51"
                                                    name="hero_id[]" value="51">
                                                <label for="hero_51">Mirana</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="monkey-king" id="hero_96"
                                                    name="hero_id[]" value="96">
                                                <label for="hero_96">Monkey King</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="morphling" id="hero_41"
                                                    name="hero_id[]" value="41">
                                                <label for="hero_41">Morphling</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="naga-siren" id="hero_66"
                                                    name="hero_id[]" value="66">
                                                <label for="hero_66">Naga Siren</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="nature's-prophet" id="hero_1"
                                                    name="hero_id[]" value="1">
                                                <label for="hero_1">Nature's Prophet</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="necrophos" id="hero_102"
                                                    name="hero_id[]" value="102">
                                                <label for="hero_102">Necrophos</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="night-stalker" id="hero_28"
                                                    name="hero_id[]" value="28">
                                                <label for="hero_28">Night Stalker</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="nyx-assassin" id="hero_64"
                                                    name="hero_id[]" value="64">
                                                <label for="hero_64">Nyx Assassin</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="ogre-magi" id="hero_79"
                                                    name="hero_id[]" value="79">
                                                <label for="hero_79">Ogre Magi</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="omniknight" id="hero_80"
                                                    name="hero_id[]" value="80">
                                                <label for="hero_80">Omniknight</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="oracle" id="hero_110"
                                                    name="hero_id[]" value="110">
                                                <label for="hero_110">Oracle</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="outworld-destroyer" id="hero_94"
                                                    name="hero_id[]" value="94">
                                                <label for="hero_94">Outworld Destroyer</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="pangolier" id="hero_60"
                                                    name="hero_id[]" value="60">
                                                <label for="hero_60">Pangolier</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="phantom-assassin" id="hero_9"
                                                    name="hero_id[]" value="9">
                                                <label for="hero_9">Phantom Assassin</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="phantom-lancer" id="hero_89"
                                                    name="hero_id[]" value="89">
                                                <label for="hero_89">Phantom Lancer</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="phoenix" id="hero_29"
                                                    name="hero_id[]" value="29">
                                                <label for="hero_29">Phoenix</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="primal-beast" id="hero_126"
                                                    name="hero_id[]" value="126">
                                                <label for="hero_126">Primal Beast</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="puck" id="hero_78"
                                                    name="hero_id[]" value="78">
                                                <label for="hero_78">Puck</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="pudge" id="hero_63"
                                                    name="hero_id[]" value="63">
                                                <label for="hero_63">Pudge</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="pugna" id="hero_54"
                                                    name="hero_id[]" value="54">
                                                <label for="hero_54">Pugna</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="queen-of-pain" id="hero_67"
                                                    name="hero_id[]" value="67">
                                                <label for="hero_67">Queen of Pain</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="razor" id="hero_15"
                                                    name="hero_id[]" value="15">
                                                <label for="hero_15">Razor</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="riki" id="hero_26"
                                                    name="hero_id[]" value="26">
                                                <label for="hero_26">Riki</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="rubick" id="hero_18"
                                                    name="hero_id[]" value="18">
                                                <label for="hero_18">Rubick</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="sand-king" id="hero_77"
                                                    name="hero_id[]" value="77">
                                                <label for="hero_77">Sand King</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="shadow-demon" id="hero_122"
                                                    name="hero_id[]" value="122">
                                                <label for="hero_122">Shadow Demon</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="shadow-fiend" id="hero_55"
                                                    name="hero_id[]" value="55">
                                                <label for="hero_55">Shadow Fiend</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="shadow-shaman" id="hero_43"
                                                    name="hero_id[]" value="43">
                                                <label for="hero_43">Shadow Shaman</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="silencer" id="hero_56"
                                                    name="hero_id[]" value="56">
                                                <label for="hero_56">Silencer</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="skywrath-mage" id="hero_100"
                                                    name="hero_id[]" value="100">
                                                <label for="hero_100">Skywrath Mage</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="slardar" id="hero_84"
                                                    name="hero_id[]" value="84">
                                                <label for="hero_84">Slardar</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="slark" id="hero_31"
                                                    name="hero_id[]" value="31">
                                                <label for="hero_31">Slark</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="snapfire" id="hero_71"
                                                    name="hero_id[]" value="71">
                                                <label for="hero_71">Snapfire</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="sniper" id="hero_72"
                                                    name="hero_id[]" value="72">
                                                <label for="hero_72">Sniper</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="spectre" id="hero_14"
                                                    name="hero_id[]" value="14">
                                                <label for="hero_14">Spectre</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="spirit-breaker" id="hero_119"
                                                    name="hero_id[]" value="119">
                                                <label for="hero_119">Spirit Breaker</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="storm-spirit" id="hero_42"
                                                    name="hero_id[]" value="42">
                                                <label for="hero_42">Storm Spirit</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="sven" id="hero_81"
                                                    name="hero_id[]" value="81">
                                                <label for="hero_81">Sven</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="techies" id="hero_83"
                                                    name="hero_id[]" value="83">
                                                <label for="hero_83">Techies</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="templar-assassin" id="hero_20"
                                                    name="hero_id[]" value="20">
                                                <label for="hero_20">Templar Assassin</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="terrorblade" id="hero_86"
                                                    name="hero_id[]" value="86">
                                                <label for="hero_86">Terrorblade</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="tidehunter" id="hero_8"
                                                    name="hero_id[]" value="8">
                                                <label for="hero_8">Tidehunter</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="timbersaw" id="hero_98"
                                                    name="hero_id[]" value="98">
                                                <label for="hero_98">Timbersaw</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="tinker" id="hero_69"
                                                    name="hero_id[]" value="69">
                                                <label for="hero_69">Tinker</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="tiny" id="hero_12"
                                                    name="hero_id[]" value="12">
                                                <label for="hero_12">Tiny</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="treant-protector" id="hero_85"
                                                    name="hero_id[]" value="85">
                                                <label for="hero_85">Treant Protector</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="troll-warlord" id="hero_22"
                                                    name="hero_id[]" value="22">
                                                <label for="hero_22">Troll Warlord</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="tusk" id="hero_76"
                                                    name="hero_id[]" value="76">
                                                <label for="hero_76">Tusk</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="underlord" id="hero_88"
                                                    name="hero_id[]" value="88">
                                                <label for="hero_88">Underlord</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="undying" id="hero_101"
                                                    name="hero_id[]" value="101">
                                                <label for="hero_101">Undying</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="ursa" id="hero_73"
                                                    name="hero_id[]" value="73">
                                                <label for="hero_73">Ursa</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="vengeful-spirit" id="hero_105"
                                                    name="hero_id[]" value="105">
                                                <label for="hero_105">Vengeful Spirit</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="venomancer" id="hero_82"
                                                    name="hero_id[]" value="82">
                                                <label for="hero_82">Venomancer</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="viper" id="hero_91"
                                                    name="hero_id[]" value="91">
                                                <label for="hero_91">Viper</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="visage" id="hero_118"
                                                    name="hero_id[]" value="118">
                                                <label for="hero_118">Visage</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="void-spirit" id="hero_113"
                                                    name="hero_id[]" value="113">
                                                <label for="hero_113">Void Spirit</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="warlock" id="hero_10"
                                                    name="hero_id[]" value="10">
                                                <label for="hero_10">Warlock</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="weaver" id="hero_65"
                                                    name="hero_id[]" value="65">
                                                <label for="hero_65">Weaver</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="windranger" id="hero_103"
                                                    name="hero_id[]" value="103">
                                                <label for="hero_103">Windranger</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="winter-wyvern" id="hero_58"
                                                    name="hero_id[]" value="58">
                                                <label for="hero_58">Winter Wyvern</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="witch-doctor" id="hero_27"
                                                    name="hero_id[]" value="27">
                                                <label for="hero_27">Witch Doctor</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="wraith-king" id="hero_23"
                                                    name="hero_id[]" value="23">
                                                <label for="hero_23">Wraith King</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" data-url="zeus" id="hero_50"
                                                    name="hero_id[]" value="50">
                                                <label for="hero_50">Zeus</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="collapse-field">
                                <div class="field-title">
                                    Слот <span class="field-title-counter"></span>
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
                                            <div class="checkbox">
                                                <input type="checkbox" id="slot_38" name="slot_id[]"
                                                    value="38">
                                                <label for="slot_38">1-я способность</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" id="slot_17" name="slot_id[]"
                                                    value="17">
                                                <label for="slot_17">2-я способность</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" id="slot_20" name="slot_id[]"
                                                    value="20">
                                                <label for="slot_20">3-я способность</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" id="slot_37" name="slot_id[]"
                                                    value="37">
                                                <label for="slot_37">4-я способность</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" id="slot_39" name="slot_id[]"
                                                    value="39">
                                                <label for="slot_39">Башни сил Света</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" id="slot_40" name="slot_id[]"
                                                    value="40">
                                                <label for="slot_40">Башни сил Тьмы</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" id="slot_1" name="slot_id[]"
                                                    value="1">
                                                <label for="slot_1">Броня</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" id="slot_21" name="slot_id[]"
                                                    value="21">
                                                <label for="slot_21">Вард</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" id="slot_26" name="slot_id[]"
                                                    value="26">
                                                <label for="slot_26">Геройская статуя</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" id="slot_2" name="slot_id[]"
                                                    value="2">
                                                <label for="slot_2">Голова</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" id="slot_22" name="slot_id[]"
                                                    value="22">
                                                <label for="slot_22">Голос</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" id="slot_13" name="slot_id[]"
                                                    value="13">
                                                <label for="slot_13">Доп. оружие</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" id="slot_41" name="slot_id[]"
                                                    value="41">
                                                <label for="slot_41">Древние</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" id="slot_14" name="slot_id[]"
                                                    value="14">
                                                <label for="slot_14">Животное</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" id="slot_4" name="slot_id[]"
                                                    value="4">
                                                <label for="slot_4">Загрузочный экран</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" id="slot_27" name="slot_id[]"
                                                    value="27">
                                                <label for="slot_27">Комментатор</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" id="slot_35" name="slot_id[]"
                                                    value="35">
                                                <label for="slot_35">Костюм</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" id="slot_5" name="slot_id[]"
                                                    value="5">
                                                <label for="slot_5">Курьер</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" id="slot_31" name="slot_id[]"
                                                    value="31">
                                                <label for="slot_31">Ландшафт</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" id="slot_34" name="slot_id[]"
                                                    value="34">
                                                <label for="slot_34">Мега-убийства</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" id="slot_33" name="slot_id[]"
                                                    value="33">
                                                <label for="slot_33">Музыка</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" id="slot_29" name="slot_id[]"
                                                    value="29">
                                                <label for="slot_29">Н/Д</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" id="slot_25" name="slot_id[]"
                                                    value="25">
                                                <label for="slot_25">Набор курсоров</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" id="slot_16" name="slot_id[]"
                                                    value="16">
                                                <label for="slot_16">Насмешка</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" id="slot_12" name="slot_id[]"
                                                    value="12">
                                                <label for="slot_12">Ноги</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" id="slot_32" name="slot_id[]"
                                                    value="32">
                                                <label for="slot_32">Облик волка</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" id="slot_3" name="slot_id[]"
                                                    value="3">
                                                <label for="slot_3">Оружие</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" id="slot_30" name="slot_id[]"
                                                    value="30">
                                                <label for="slot_30">Перчатки</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" id="slot_6" name="slot_id[]"
                                                    value="6">
                                                <label for="slot_6">Плечи</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" id="slot_23" name="slot_id[]"
                                                    value="23">
                                                <label for="slot_23">Погода</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" id="slot_8" name="slot_id[]"
                                                    value="8">
                                                <label for="slot_8">Пояс</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" id="slot_19" name="slot_id[]"
                                                    value="19">
                                                <label for="slot_19">Призванное существо</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" id="slot_10" name="slot_id[]"
                                                    value="10">
                                                <label for="slot_10">Разное</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" id="slot_11" name="slot_id[]"
                                                    value="11">
                                                <label for="slot_11">Руки</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" id="slot_36" name="slot_id[]"
                                                    value="36">
                                                <label for="slot_36">Сообщения о серии убийств</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" id="slot_9" name="slot_id[]"
                                                    value="9">
                                                <label for="slot_9">Спина</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" id="slot_24" name="slot_id[]"
                                                    value="24">
                                                <label for="slot_24">Стиль интерфейса</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" id="slot_15" name="slot_id[]"
                                                    value="15">
                                                <label for="slot_15">Тело/голова</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" id="slot_28" name="slot_id[]"
                                                    value="28">
                                                <label for="slot_28">Ульт</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" id="slot_18" name="slot_id[]"
                                                    value="18">
                                                <label for="slot_18">Хвост</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" id="slot_7" name="slot_id[]"
                                                    value="7">
                                                <label for="slot_7">Шея</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="collapse-field">
                                <div class="field-title">
                                    Раритетность <span class="field-title-counter"></span>
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
                                            <input type="checkbox" id="rarity_13" name="rarity[]"
                                                value="13">
                                            <label for="rarity_13">Arcana</label>
                                        </div>
                                        <div class="checkbox">
                                            <input type="checkbox" id="rarity_14" name="rarity[]"
                                                value="14">
                                            <label for="rarity_14">Common</label>
                                        </div>
                                        <div class="checkbox">
                                            <input type="checkbox" id="rarity_15" name="rarity[]"
                                                value="15">
                                            <label for="rarity_15">Immortal</label>
                                        </div>
                                        <div class="checkbox">
                                            <input type="checkbox" id="rarity_16" name="rarity[]"
                                                value="16">
                                            <label for="rarity_16">Legendary</label>
                                        </div>
                                        <div class="checkbox">
                                            <input type="checkbox" id="rarity_17" name="rarity[]"
                                                value="17">
                                            <label for="rarity_17">Mythical</label>
                                        </div>
                                        <div class="checkbox">
                                            <input type="checkbox" id="rarity_18" name="rarity[]"
                                                value="18">
                                            <label for="rarity_18">Rare</label>
                                        </div>
                                        <div class="checkbox">
                                            <input type="checkbox" id="rarity_19" name="rarity[]"
                                                value="19">
                                            <label for="rarity_19">Seasonal</label>
                                        </div>
                                        <div class="checkbox">
                                            <input type="checkbox" id="rarity_20" name="rarity[]"
                                                value="20">
                                            <label for="rarity_20">Uncommon</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="collapse-field">
                                <div class="field-title">
                                    Качество <span class="field-title-counter"></span>
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
                                            <input type="checkbox" id="quality_11" name="quality[]"
                                                value="11">
                                            <label for="quality_11">Autographed</label>
                                        </div>
                                        <div class="checkbox">
                                            <input type="checkbox" id="quality_12" name="quality[]"
                                                value="12">
                                            <label for="quality_12">Base</label>
                                        </div>
                                        <div class="checkbox">
                                            <input type="checkbox" id="quality_15" name="quality[]"
                                                value="15">
                                            <label for="quality_15">Corrupted</label>
                                        </div>
                                        <div class="checkbox">
                                            <input type="checkbox" id="quality_2" name="quality[]"
                                                value="2">
                                            <label for="quality_2">Exalted</label>
                                        </div>
                                        <div class="checkbox">
                                            <input type="checkbox" id="quality_14" name="quality[]"
                                                value="14">
                                            <label for="quality_14">Frozen</label>
                                        </div>
                                        <div class="checkbox">
                                            <input type="checkbox" id="quality_4" name="quality[]"
                                                value="4">
                                            <label for="quality_4">Genuine</label>
                                        </div>
                                        <div class="checkbox">
                                            <input type="checkbox" id="quality_7" name="quality[]"
                                                value="7">
                                            <label for="quality_7">Cursed</label>
                                        </div>
                                        <div class="checkbox">
                                            <input type="checkbox" id="quality_16" name="quality[]"
                                                value="16">
                                            <label for="quality_16">Holo</label>
                                        </div>
                                        <div class="checkbox">
                                            <input type="checkbox" id="quality_13" name="quality[]"
                                                value="13">
                                            <label for="quality_13">Infused</label>
                                        </div>
                                        <div class="checkbox">
                                            <input type="checkbox" id="quality_6" name="quality[]"
                                                value="6">
                                            <label for="quality_6">Auspicious</label>
                                        </div>
                                        <div class="checkbox">
                                            <input type="checkbox" id="quality_1" name="quality[]"
                                                value="1">
                                            <label for="quality_1">Inscribed</label>
                                        </div>
                                        <div class="checkbox">
                                            <input type="checkbox" id="quality_10" name="quality[]"
                                                value="10">
                                            <label for="quality_10">Heroic</label>
                                        </div>
                                        <div class="checkbox">
                                            <input type="checkbox" id="quality_3" name="quality[]"
                                                value="3">
                                            <label for="quality_3">Standard</label>
                                        </div>
                                        <div class="checkbox">
                                            <input type="checkbox" id="quality_8" name="quality[]"
                                                value="8">
                                            <label for="quality_8">Unusual</label>
                                        </div>
                                        <div class="checkbox">
                                            <input type="checkbox" id="quality_5" name="quality[]"
                                                value="5">
                                            <label for="quality_5">Elder</label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="collapse-field">
                                <div class="field-title">
                                    Холд <span class="field-title-counter"></span>
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
                                            <label for="hold_0">Без холда</label>
                                        </div>
                                        <div class="checkbox">
                                            <input type="checkbox" id="hold_1" name="hold[]" value="1">
                                            <label for="hold_1">1 день</label>
                                        </div>
                                        <div class="checkbox">
                                            <input type="checkbox" id="hold_2" name="hold[]" value="2">
                                            <label for="hold_2">2 дня</label>
                                        </div>
                                        <div class="checkbox">
                                            <input type="checkbox" id="hold_3" name="hold[]" value="3">
                                            <label for="hold_3">3 дня</label>
                                        </div>
                                        <div class="checkbox">
                                            <input type="checkbox" id="hold_4" name="hold[]" value="4">
                                            <label for="hold_4">4 дня</label>
                                        </div>
                                        <div class="checkbox">
                                            <input type="checkbox" id="hold_5" name="hold[]" value="5">
                                            <label for="hold_5">5 дней</label>
                                        </div>
                                        <div class="checkbox">
                                            <input type="checkbox" id="hold_6" name="hold[]" value="6">
                                            <label for="hold_6">6 дней</label>
                                        </div>
                                        <div class="checkbox">
                                            <input type="checkbox" id="hold_7" name="hold[]" value="7">
                                            <label for="hold_7">7 дней</label>
                                        </div>
                                        <div class="checkbox">
                                            <input type="checkbox" id="hold_8" name="hold[]" value="8">
                                            <label for="hold_8">8 дней</label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="reset-filters">Сбросить фильтры</div>
                </form>
            </div>
            <div class="right-column">
                <div class="controls">
                    <div class="reload">
                        <svg class="reload-icon">
                            <use xlink:href="/assets/images/sprite.svg?id=274205d7043ac7331d0d0bb072720d70#reload">
                            </use>
                        </svg>
                    </div>
                    <div class="games-navigation skins-navigation__games-navigation">
                        <a href="https://lis-skins.ru/market/csgo/" data-game-identifier="csgo" data-game-id="1"
                            class="games-navigation__link games-navigation__link_csgo ">
                            <img src="https://lis-skins.ru/assets/images/csgo-logo.svg" alt="CS:GO game logo">
                        </a>
                        <a href="https://lis-skins.ru/market/dota2/" data-game-identifier="dota2" data-game-id="4"
                            class="games-navigation__link games-navigation__link_dota2 games-navigation__link_active">
                            <img src="https://lis-skins.ru/assets/images/dota2-logo.svg" alt="Dota 2 game logo">
                        </a>
                        <a href="https://lis-skins.ru/market/rust/" data-game-identifier="rust" data-game-id="5"
                            class="games-navigation__link games-navigation__link_rust ">
                            <img src="https://lis-skins.ru/assets/images/rust-logo.svg" alt="Rust game logo">
                        </a>
                    </div>

                    <div class="search skins-navigation__search" tabindex="1">
                        <input type="text" placeholder="Поиск по скинам" class="inventory-search"
                            autocomplete="off" name="query" value="">
                        <svg class="search-icon">
                            <use xlink:href="/assets/images/sprite.svg?id=274205d7043ac7331d0d0bb072720d70#search">
                            </use>
                        </svg>
                    </div>

                    <div class="sort sort-with-ik-select">
                        <div class="ik_select market-js-sort-select market-js-select price-desc"
                            style="position: relative; display: inline-block; width: auto; vertical-align: top;">
                            <div
                                class="ik_select_link market-js-sort-select market-js-select-link ik_select_link_novalue price-desc">
                                <div class="ik_select_link_text">Цена</div>
                            </div>
                            <div class="ik_select_dropdown market-js-sort-select market-js-select-dd price-desc"
                                style="position: absolute; z-index: 9998; width: 170px; display: none;">
                                <div class="ik_select_list" style="position: relative;">
                                    <div class="ik_select_list_inner" style="height: auto;">
                                        <ul>
                                            <li class="ik_select_option" data-value=""><span
                                                    class="ik_select_option_label">Цена</span></li>
                                            <li class="ik_select_option" data-value="price_desc"><span
                                                    class="ik_select_option_label">Цена</span></li>
                                            <li class="ik_select_option" data-value="price_asc"><span
                                                    class="ik_select_option_label">Цена</span></li>
                                            <li class="ik_select_option" data-value="popularity"><span
                                                    class="ik_select_option_label">Популярность</span></li>
                                            <li class="ik_select_option" data-value="date_desc"><span
                                                    class="ik_select_option_label">Сначала новые</span></li>
                                            <li class="ik_select_option" data-value="date_asc"><span
                                                    class="ik_select_option_label">Сначала старые</span></li>
                                            <li class="ik_select_option" data-value="float_desc"
                                                style="display: none;"><span
                                                    class="ik_select_option_label">Float</span>
                                            </li>
                                            <li class="ik_select_option" data-value="float_asc"
                                                style="display: none;"><span
                                                    class="ik_select_option_label">Float</span>
                                            </li>
                                            <li class="ik_select_option" data-value="hot"><span
                                                    class="ik_select_option_label">Горячее</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <select id="skins-sort" class="skins-market-skins-sort" name="sort_by"
                                style="position: absolute; margin: 0px; padding: 0px; top: 0px; left: -9999px;">
                                <option value="">Цена</option>
                                <option value="price_desc">Цена</option>
                                <option value="price_asc">Цена</option>
                                <option value="popularity">Популярность</option>
                                <option value="date_desc">Сначала новые</option>
                                <option value="date_asc">Сначала старые</option>
                                <option value="float_desc" disabled="disabled">Float</option>
                                <option value="float_asc" disabled="disabled">Float</option>
                                <option value="hot">Горячее</option>
                            </select>
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
                            <div
{{--                                data-classid="{{ $item->classid }}" data-id="{{ $item->id }}"--}}
{{--                                wire:key="{{ $item->id }}"--}}
                                class="item market_item market_item_94806102 item_csgo">
                                <div class="skin-info ">
                                    <div class="info-item hold">
                                        2 days
                                    </div>
                                    <div class="info-item">FN</div>
                                    <div class="info-item">0.040087</div>
                                </div>
                                {{--                            https://lis-skins.ru/market_images/98943_s.png --}}
                                <img src="{{ str_replace('"', '', $item->image) }}" class="image"
                                    alt="{{ $item->name }}" title="{{ $item->name }}">
                                {{--                            https://lis-skins.ru/market/csgo/%E2%98%85-m9-bayonet-gamma-doppler-emerald-factory-new/ --}}
                                <a href="/market/item/{{ $item->slug }}" class="name">
                                    <div class="name-inner">{{ $item->name }}</div>
                                    {{--                                <div class="name-exterior">(Factory New)</div> --}}
                                </a>
                                <div class="bottom">
                                    <div class="price">{{ $item->price_usd }}$</div>
                                </div>

                                <div class="in-cart-icon"></div>
                                <div class="to-cart" data-unlock-at="2 days"><span
                                        wire:click="addToCart({{ $item->classid }})" onclick="changeButton(this)"  style="display: flex">

                                        <i class="fa fa-cart-plus">
                                            <svg height="24" version="1.1" width="24"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:cc="http://creativecommons.org/ns#"
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
                                                    <path d="m6 1041.4h5v5h2v-5h5v-2h-5v-5h-2v5h-5v2z"
                                                        fill="#ecf0f1" />
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


        </div>
    </div>
</div>
<script src="{{ asset('/js/item.js') }}"></script>
