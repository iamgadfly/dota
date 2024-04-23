@section('content')
<div>
    @foreach ($items as $item)
        <div data-classid="{{ $item->classid }}" data-id="{{ $item->id }}" wire:key="{{ $item->id }}"
            class="item market_item market_item_94806102 item_csgo">
            <div class="skin-info ">
                <div class="info-item hold">
                    2 days
                </div>
                <div class="info-item">FN</div>
                <div class="info-item">0.040087</div>
            </div>
            <img src="{{ str_replace('"', '', $item->image) }}" class="image" alt="{{ $item->name }}"
                title="{{ $item->name }}">

            <a href="/market/item/{{ $item->slug }}" class="name">
                <div class="name-inner">{{ $item->name }}</div>

            </a>
            <div class="bottom">
                <div class="price">{{ $item->price_usd }}$</div>
            </div>

            <div class="in-cart-icon"></div>
            <div class="to-cart" data-unlock-at="2 days">
                <button wire:click="test()" style="display: flex">

                    <i class="fa fa-cart-plus">
                        <svg height="24" version="1.1" width="24" xmlns="http://www.w3.org/2000/svg"
                            xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/"
                            xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#">
                            <g transform="translate(0 -1028.4)">
                                <path
                                    d="m22 12c0 5.523-4.477 10-10 10-5.5228 0-10-4.477-10-10 0-5.5228 4.4772-10 10-10 5.523 0 10 4.4772 10 10z"
                                    fill="#27ae60" transform="translate(0 1029.4)" />
                                <path
                                    d="m22 12c0 5.523-4.477 10-10 10-5.5228 0-10-4.477-10-10 0-5.5228 4.4772-10 10-10 5.523 0 10 4.4772 10 10z"
                                    fill="#2ecc71" transform="translate(0 1028.4)" />
                                <path d="m6.0001 1042.4h4.9999v5h2v-5h5v-2h-5v-5h-2v5h-4.9999v2z" fill="#27ae60" />
                                <path d="m6 1041.4h5v5h2v-5h5v-2h-5v-5h-2v5h-5v2z" fill="#ecf0f1" />
                            </g>
                        </svg>
                    </i>
                    &nbsp; В корзину
                </button>
            </div>
        </div>
    @endforeach

    <nav>
        <ul class="pagination">

            <li class="page-item disabled" aria-disabled="true" aria-label="prev">
                <span class="page-link" aria-hidden="true">‹</span>
            </li>


            <li class="page-item active" aria-current="page"><span class="page-link">{{ $items->currentPage() }}</span>
            </li>

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
                    rel="next" aria-label="next"></a>
            </li>
        </ul>
    </nav>
</div>
@endsection
