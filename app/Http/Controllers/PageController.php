<?php

namespace App\Http\Controllers;

use App\Helpers\CartHelper;
use App\Models\Items;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PageController extends Controller
{
    public function market(Request $request)
    {
        return view('layouts.app', ['market', 'test' => true, 'items' => Items::inRandomOrder()->whereNotNull('image')->paginate(60)]);
    }

    public function contacts(Request $request)
    {
        return view('layouts.app', ['contacts']);
    }

    public function faq(Request $request)
    {
        return view('layouts.app', ['faq']);
    }

    public function works(Request $request)
    {
        return view('layouts.app', ['works']);
    }

    public function rules(Request $request)
    {
        return view('layouts.app', ['rules']);
    }

    public function item($slug)
    {
        $item = Items::where('slug', $slug)->first();
        if (is_null($item)){
            return redirect('/404');
        }
        return view('item', ['item', 'item_data' => $item]);
    }

    public function remove(Request $request, CartHelper $helper)
    {
        $helper->remove($request->get('classid'));
    }

    public function remove_all(Request $request, CartHelper $helper)
    {
        $helper->clear();
    }

    public function add(Request $request, CartHelper $helper)
    {
        $helper->add($request->get('classid'));
    }

    public function get_items(CartHelper $helper)
    {
        return response()->json(\App\Models\Items::whereIn('classid', $helper->get()['items'])->get(), 200);
    }
}
