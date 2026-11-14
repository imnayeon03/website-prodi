<?php

namespace App\Providers;

use App\Support\Menu;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Semua layout memakai data yang sama -> menu didefinisikan sekali (PB-02)
        View::share('site', config('prodi.site'));
        View::composer('partials.header', fn ($v) => $v->with('publicMenu', Menu::public()));
        View::composer('partials.sidebar', fn ($v) => $v->with('adminMenu', Menu::admin(auth()->user())));
    }
}
