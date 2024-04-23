<?php

namespace App\Livewire;

use App\Helpers\CartHelper;
use Livewire\Component;

class Order extends Component
{
    public function render(CartHelper $helper)
    {
        return view('livewire.order', ['items' => \App\Models\Items::whereIn('classid', $helper->get()['items'])->get()]);
    }

    public function remove($item_id)
    {
        logger('dsd', $item_id);
    }
}
