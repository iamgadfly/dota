<?php

namespace App\Livewire;

use App\Helpers\CartHelper;
use Livewire\Component;
use Livewire\WithPagination;

class Items extends Component
{
    use WithPagination;

    public $search;

    protected $updatesQueryString = ['search'];

    public function mount(): void
    {
        $this->search = request()->query('search', $this->search);
    }

    public function render()
    {
//        return view('layouts.app', ['market', 'items' => \App\Models\Items::inRandomOrder()->whereNotNull('image')->paginate(60)]);
        return view('market', ['items' => \App\Models\Items::inRandomOrder()->whereNotNull('image')->paginate(60)]);
//        return view('layouts.app', ['market', 'test' => true, 'items' => \App\Models\Items::inRandomOrder()->whereNotNull('image')->paginate(60)]);
    }

    public function addToCart(int $productId, CartHelper $helper): void
    {
        logger('item322', [$productId]);
        $helper->add(\App\Models\Items::where('id', $productId)->first());
    }

    public function test()
    {
        logger('logger', [true]);
    }

}
