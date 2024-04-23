<?php

namespace App\Helpers;

use Symfony\Component\HttpFoundation\Session\Session;

class CartHelper
{
    public $session;
    public function __construct()
    {
        $this->session = new Session();
        if ($this->get() === null) {
            $this->set($this->empty());
        }

    }

    public function add($item_id): void
    {
        $cart = $this->get();
        // dd($cart);
        array_push($cart['items'], $item_id);
        $this->set($cart);
    }

    public function remove(int $classid)
    {
        $cart = $this->get();
        unset($cart['items'][array_search($classid, $cart['items'])]);
        $this->set($cart);

    }

    public function clear(): void
    {
        $this->set($this->empty());
    }

    public function empty(): array
    {
        return [
            'items' => [],
        ];
    }

    public function get(): ?array
    {
        return $this->session->get('cart');
    }

    private function set($cart): void
    {
        $this->session->set('cart', $cart);
    }
}
