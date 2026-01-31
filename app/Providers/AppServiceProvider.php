<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // FIX HTTPS untuk Railway / Reverse Proxy
        if (
            request()->header('x-forwarded-proto') === 'https' ||
            str_contains((string) request()->header('x-forwarded-proto'), 'https')
        ) {
            $_SERVER['HTTPS'] = 'on';
            URL::forceScheme('https');
        }
    }
}
