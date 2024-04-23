<div>
    <div class="cart-grid">
        <div class="cart-items-scrollable">
            <div class="cart-items market-cart-items">

                @if (!empty($cart_items))
                    @foreach ($cart_items as $item)
                        <div class="small-item" data-id="{{ $item->id }}">
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
                            <div class="item-remove" wire:click="remove({{$item->id}})"></div>
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
                        <div class="item-value cart-info-total-count">3</div>
                    </div>
                    <div class="cart-info-summary-item summary-total">
                        <div class="item-title">Всего</div>
                        <div class="item-value"><span class="cart-info-total-sum">8 278.40</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 255.15 300">
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
                        </div>
                    </div>
                </div>
            </div>
            <div class="buy-button" data-buying-text="Покупаем">Купить</div>
            <div class="clear-cart">Очистить корзину</div>

            <div class="cart-info-rules">
                Покупая скины, я соглашаюсь с <a href="/privacy_policy/" target="_BLANK">политикой
                    конфиденциальности</a> и <a href="/rules/" target="_BLANK">правилами
                    использования</a></div>
        </div>
    </div>
</div>
