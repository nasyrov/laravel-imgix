<?php

namespace Nasyrov\Laravel\Imgix\Tests\Unit\Facades;

use Nasyrov\Laravel\Imgix\Facades\Imgix as ImgixFacade;
use Nasyrov\Laravel\Imgix\Imgix;
use Nasyrov\Laravel\Imgix\Tests\Integration\TestCase;

class ImgixTest extends TestCase
{
    /** @test */
    public function it_provides_facade()
    {
        $this->assertInstanceOf(Imgix::class, ImgixFacade::getFacadeRoot());
    }
}
