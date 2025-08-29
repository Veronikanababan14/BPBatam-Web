<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Layanan;             // tambahkan ini
use Illuminate\Support\Facades\View; // tambahkan ini

class AppServiceProvider extends ServiceProvider
{
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
        // Bagikan semua layanan ke semua view
        $allLayanans = Layanan::all();
        View::share('allLayanans', $allLayanans);
    }
}
