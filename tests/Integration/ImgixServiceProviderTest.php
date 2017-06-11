<?php

namespace Nasyrov\Laravel\Imgix\Tests\Integration;

use Imgix\UrlBuilder;
use Nasyrov\Laravel\Imgix\Imgix;
use Nasyrov\Laravel\Imgix\ImgixServiceProvider;

class ImgixServiceProviderTest extends TestCase
{
    /** @test */
    public function it_boots()
    {
        $config = include dirname(__DIR__) . '/../config/imgix.php';
        $this->assertEquals($config, $this->app['config']['imgix']);
    }

    /** @test */
    public function it_registers()
    {
        $this->assertTrue($this->app->bound(UrlBuilder::class));
        $this->assertInstanceOf(UrlBuilder::class, $this->app->make(UrlBuilder::class));

        $this->assertTrue($this->app->bound(Imgix::class));
        $this->assertInstanceOf(Imgix::class, $this->app->make(Imgix::class));
        $this->assertInstanceOf(Imgix::class, $this->app->make(ImgixServiceProvider::ALIAS));
    }
}
