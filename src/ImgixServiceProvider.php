<?php

namespace Nasyrov\Laravel\Imgix;

use Illuminate\Support\ServiceProvider;
use Imgix\ShardStrategy;
use Imgix\UrlBuilder;

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
        $this->app->singleton(UrlBuilder::class, function () {
            return new UrlBuilder(
                config('imgix.domains', []),
                config('imgix.useHttps', false),
                config('imgix.signKey', ''),
                config('imgix.shardStrategy', ShardStrategy::CRC),
                config('imgix.includeLibraryParam', true)
            );
        });

        $this->app->alias(UrlBuilder::class, 'imgix');
    }
}
