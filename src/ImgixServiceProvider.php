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
        $configFile = dirname(__DIR__) . '/config/imgix.php';

        $this->mergeConfigFrom($configFile, static::ALIAS);

        $this->publishes([
            $configFile => config_path('imgix.php'),
        ], static::ALIAS);
    }

    /**
     * Register any application services.
     */
    public function register()
    {
        $this->app->singleton(UrlBuilder::class, function () {
            return new UrlBuilder(
                config('imgix.domain'),
                config('imgix.useHttps', false),
                config('imgix.signKey', ''),
                config('imgix.includeLibraryParam', true)
            );
        });

        $this->app->singleton(Imgix::class, function ($app) {
            return new Imgix($app[ UrlBuilder::class ]);
        });

        $this->app->alias(Imgix::class, static::ALIAS);
    }
}
