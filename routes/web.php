<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\TradeController;
use Illuminate\Support\Facades\Route;

Route::controller(PageController::class)->group(function () {
    Route::get('/', 'market');
    Route::get('market', 'market');
    Route::get('contacts', 'contacts');
    Route::get('faq', 'faq');
    Route::get('how-it-works', 'works');
    Route::get('srazu-mnogo', 'mnogo');
    Route::get('guarantees', 'guarantees');
    Route::get('blog', 'blog');
    Route::get('sell', 'sell');
    Route::get('reviews', 'reviews');
    Route::get('rules', 'rules');
    Route::get('oferta', 'oferta');
    Route::get('privacy_policy', 'privacy_policy');
    Route::get('inventory', 'inventory');
    Route::get('profile', 'profile');
    Route::get('security', 'security');
    Route::get('referrals', 'referrals');
});

Route::post('/trade', [TradeController::class, 'trade']);
Route::post('/steam_auth', [TradeController::class, 'steamAuth']);


Route::post('/balance', [TradeController::class, 'balance']);
Route::get('/items', [TradeController::class, 'items']);
Route::post('/create_trade', [TradeController::class, 'create_trade']);

Route::middleware('web')->controller(\App\Http\Controllers\SocialController::class)
    ->group(function () {
        // Steam
        Route::get('/auth/steam', 'redirectToSteam');
        Route::get('/auth/steam/callback', 'handleSteamCallback');
    });


