<?php

namespace Nasyrov\Laravel\Imgix;

use Illuminate\Support\ServiceProvider;
use Imgix\ShardStrategy;
use Imgix\UrlBuilder;

class ImgixServiceProvider extends ServiceProvider
{
    const ALIAS = 'imgix';

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        $this->publishes([
            dirname(__DIR__) . '/config/imgix.php' => config_path('imgix.php'),
        ], 'imgix');
    }

    /**
     * Register any application services.
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

        $this->app->singleton(Imgix::class, function ($app) {
            return new Imgix($app[UrlBuilder::class]);
        });

        $this->app->alias(Imgix::class, static::ALIAS);
    }
}
