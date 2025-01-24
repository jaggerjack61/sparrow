<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\PricingItemController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('dashboard', function () {
//     return view('dashboard');
// });

Route::controller(HomeController::class)->group(function () {
    Route::get('dashboard', 'dashboard')->name('dashboard')->middleware('auth');
    Route::get('', 'index')->name('home');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('login', 'showLogin')->name('show-login')->middleware('guest');
    Route::post('login', 'login')->name('login');
    Route::get('logout', 'logout')->name('logout')->middleware('auth');
});

Route::middleware('auth')->group(function () {
    Route::controller(PricingController::class)->group(function () {
        Route::prefix('pricing')->group(function () {
            Route::get('', 'index')->name('pricing.index');
            Route::post('store', 'store')->name('pricing.store');
            Route::get('update', 'update')->name('pricing.update');
            Route::get('toggle/{pricing}', 'toggle')->name('pricing.toggle');
            Route::get('select/{pricing}', 'select')->name('pricing.select');
            Route::post('/pricing/{pricing}/items', 'storeItem')->name('pricing.item.store');
            Route::post('/items/{pricingItem}', 'updateItem')->name('pricing.item.update');
            Route::get('/items/delete/{pricingItem}', 'deleteItem')->name('pricing.item.delete');

        });
    });
    Route::controller(FaqController::class)->group(function () {
        Route::prefix('faq')->group(function () {
            Route::get('', 'index')->name('faq.index');
            Route::post('store', 'store')->name('faq.store');
            Route::post('update', 'update')->name('faq.update');
            Route::get('toggle/{faq}', 'toggle')->name('faq.toggle');
        });
    });
    Route::controller(MessageController::class)->group(function () {
        Route::prefix('message')->group(function () {
            Route::get('', 'index')->name('message.index');
            Route::post('store', 'store')->name('message.store');
            Route::get('show/{message}', 'show')->name('message.show');
            Route::get('toggle/{message}', 'toggle')->name('message.toggle');
        });
    });
});


