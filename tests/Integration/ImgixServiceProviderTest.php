<?php

namespace Nasyrov\Laravel\Imgix\Tests\Integration;

class ImgixServiceProviderTest extends TestCase
{
    /** @test */
    public function it_boots()
    {
        $config = include dirname(__DIR__) . '/../config/imgix.php';
        $this->assertEquals($config, $this->app['config']['imgix']);
    }
}
