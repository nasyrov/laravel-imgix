<?php

namespace Nasyrov\Laravel\Imgix;

use Illuminate\Support\ServiceProvider;
use Imgix\ShardStrategy;
use Imgix\UrlBuilder as BaseUrlBuilder;

class ImgixServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/imgix.php' => config_path('imgix.php'),
        ], 'laravel-imgix');
    }

    /**
     * Register any application services.
     */
    public function register()
    {
        $this->app->singleton(BaseUrlBuilder::class, function () {
            return new BaseUrlBuilder(
                config('imgix.domains', []),
                config('imgix.useHttps', false),
                config('imgix.signKey', ''),
                config('imgix.shardStrategy', ShardStrategy::CRC),
                config('imgix.includeLibraryParam', true)
            );
        });

        $this->app->singleton(UrlBuilder::class, function ($app) {
            return new UrlBuilder($app[BaseUrlBuilder::class]);
        });

        $this->app->alias(UrlBuilder::class, 'imgix');
    }
}
