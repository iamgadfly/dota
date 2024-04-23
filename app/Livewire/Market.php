<?php

namespace App\Livewire;

use App\Helpers\CartHelper;
use Livewire\Component;
use Livewire\WithPagination;

class Market extends Component
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
//        return view('livewire.click-event', ['items' => \App\Models\Items::inRandomOrder()->whereNotNull('image')->paginate(60)])->extends('layouts.app');
        return view('livewire.market', ['items' => \App\Models\Items::whereNotNull('image')->paginate(60)])->extends('layouts.app');
    }

    public function addToCart($classid, CartHelper $helper)
    {
//        logger('ll', [$classid]);
//        \App\Models\Items::where('classid', $classid)->first()
        $helper->add($classid);
    }

    public function remove($item_id, CartHelper $helper)
    {
        $helper->remove($item_id);
    }

}
