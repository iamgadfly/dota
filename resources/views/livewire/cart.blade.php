<div>
    @php
        $h = new \App\Helpers\CartHelper();
//        dd($cart['items']);
//        dd($h->get());
//    logger('dsd', $h->get());
    @endphp
    @section('content')
        <div style="margin-top: 150px;">
            <div class="w-2/3 mx-auto">
                <div class="bg-white shadow-md rounded my-6">
                    @php
                        @endphp
                    @if(count($cart['items']) > 0)
                        <table class="text-left w-full border-collapse">
                            <thead>
                            <tr>
                                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                    Name
                                </th>
                                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                    Price
                                </th>
                                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                    Actions
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($cart['items'] as $item)
                                <tr class="hover:bg-grey-lighter">
                                    <td class="py-4 px-6 border-b border-grey-light">{{ $item->name }}</td>
                                    <td class="py-4 px-6 border-b border-grey-light">{{ $item->price_usd }}</td>
                                    <td class="py-4 px-6 border-b border-grey-light">
                                        <a wire:click="removeFromCart({{ $item->id }})"
                                           class="text-green-600 font-bold py-1 px-3 rounded text-xs bg-green hover:bg-green-dark cursor-pointer">Remove</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="text-right w-full p-6">
{{--                            test({{ "322" }})--}}
                            <button wire:click="test()"
                                    class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                                Checkout
                            </button>
                        </div>
                    @else
                        <div class="text-center w-full border-collapse p-6">
                            <span class="text-lg">¡Your cart is empty!</span>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <script>
            Livewire.hook('component.initialized', component => {
                console.log("22")
            })
            console.log("322")

        </script>
    @endsection
</div>
