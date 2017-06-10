<?php

namespace Nasyrov\Laravel\Imgix\Tests\Unit\Facades;

use Nasyrov\Laravel\Imgix\Facades\Imgix;
use Nasyrov\Laravel\Imgix\ImgixServiceProvider;
use Nasyrov\Laravel\Imgix\Tests\Integration\TestCase;

class ImgixTest extends TestCase
{
    /** @test */
    public function it_can_initialise()
    {
        $this->assertInstanceOf('Nasyrov\Laravel\Imgix\Imgix', Imgix::getFacadeRoot());
        $this->assertSame($this->app[ImgixServiceProvider::ALIAS], Imgix::getFacadeRoot());
    }
}
