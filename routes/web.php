<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\TradeController;
use Illuminate\Support\Facades\Route;

Route::controller(PageController::class)->group(function () {
    // Route::get('/', 'market');
    Route::post('/remove', 'remove');
    Route::post('/remove_all', 'remove_all');
    Route::post('/add', 'add');
    Route::get('/get_items', 'get_items');
});

Route::get('/', \App\Livewire\Market::class);
Route::get('/contacts', \App\Livewire\Contacts::class)->name('contacts');
Route::get('/faq', \App\Livewire\Faq::class)->name('faq');
Route::get('/how-it-works', \App\Livewire\Works::class)->name('works');
Route::get('/srazu-mnogo', \App\Livewire\Mnogo::class)->name('mnogo');
Route::get('/guarantees', \App\Livewire\Guarantees::class)->name('guarantees');

Route::get('/blog', \App\Livewire\Blog::class)->name('blog');
Route::get('/sell', \App\Livewire\Sell::class)->name('sell');

Route::get('/reviews', \App\Livewire\Reviews::class)->name('reviews');
Route::get('/rules', \App\Livewire\Rules::class)->name('rules');
Route::get('/oferta', \App\Livewire\Oferta::class)->name('oferta');

Route::get('/privacy_policy', \App\Livewire\PrivacyPolicy::class)->name('privacy_policy');
Route::get('/inventory', \App\Livewire\Inventory::class)->name('inventory');

Route::get('/profile', \App\Livewire\Profile::class)->name('profile');
Route::get('/security', \App\Livewire\Security::class)->name('security');
Route::get('/referrals', \App\Livewire\Referrals::class)->name('referrals');

Route::get('market/item/{slug}', \App\Livewire\Item::class)->name('item');

Route::get('/cart', \App\Livewire\Cart::class)->name('cart');
Route::get('/market', \App\Livewire\Market::class)->name('market');

//Route::get('click-event', \App\Livewire\Market::class);

Route::post('/trade', [TradeController::class, 'trade']);
Route::post('/steam_auth', [TradeController::class, 'steamAuth']);

Route::post('/balance', [TradeController::class, 'balance']);
Route::get('/items', [TradeController::class, 'items']);

// ->middleware('auth');
Route::post('/create_trade', [TradeController::class, 'create_trade']);
Route::post('/trade_status', [TradeController::class, 'trade_status']); // ->middleware('auth');
Route::post('/save_trade_url', [TradeController::class, 'save_trade_url']);
//->middleware('auth')

Route::middleware('web')->controller(\App\Http\Controllers\SocialController::class)
    ->group(function () {
        // Steam
        Route::get('/auth/steam', 'redirectToSteam');
        Route::get('/auth/steam/callback', 'handleSteamCallback');
    });
