<?php

namespace Nasyrov\Laravel\Imgix;

use Illuminate\Support\ServiceProvider;

class ImgixServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            dirname(__DIR__) . '/config/imgix.php' => config_path('imgix.php'),
        ], 'laravel-imgix');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
