<?php

namespace App\Livewire;

use App\Helpers\CartHelper;
use App\Models\Items;
use Livewire\Component;

class Item extends Component
{
    public $item;

    public function mount($slug)
    {
        $this->item = Items::where('slug', $slug)->first();
    }

    public function render()
    {
        return view('livewire.item', ['item']);
    }

    public function addToStart($classid, CartHelper $helper)
    {
        logger('$classid', [$classid]);
    }
}
