<?php

namespace App\Livewire;

use App\Cart\CartFacade;
use App\Helpers\CartHelper;
use Livewire\Component;

class Cart extends Component
{
    public $cart;

    public function mount(CartHelper $helper): void
    {
        $this->cart = $helper->get();
    }
    public function render()
    {
        return view('livewire.cart');
    }
    public function removeFromCart($productId, CartHelper $helper): void
    {
        CartFacade::remove($productId);
        $this->cart = $helper->get();
    }
    public function checkout(CartHelper $helper): void
    {
        $helper->clear();
        $this->cart =  $helper->get();
    }

    public function test()
    {
        logger('logger', ['dsdsdsd']);
    }
}
