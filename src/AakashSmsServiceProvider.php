<?php

namespace SachinKiranti\AakashSms;

use Illuminate\Support\ServiceProvider;

class AakashSmsServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/aakash-sms.php' => config_path('aakash-sms.php'),
        ], 'aakash-sms');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/aakash-sms.php', 'aakash-sms'
        );
    }

}