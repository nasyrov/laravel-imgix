<?php

namespace Nasyrov\Laravel\Imgix\Tests\Unit;

use Imgix\UrlBuilder;
use Mockery;
use Nasyrov\Laravel\Imgix\Imgix;
use PHPUnit\Framework\TestCase;

class ImgixTest extends TestCase
{
    /** @var \Imgix\UrlBuilder|\Mockery\Mock */
    protected $urlBuilder;

    /** @var \Nasyrov\Laravel\Imgix\Imgix */
    protected $imgix;

    protected function setUp()
    {
        $this->urlBuilder = Mockery::mock(UrlBuilder::class);
        $this->imgix      = new Imgix($this->urlBuilder);
    }

    protected function tearDown()
    {
        Mockery::close();
    }

    /** @test */
    public function it_creates_url()
    {
        $expectedArgs = [
            $path = 'test.jpg',
            $params = ['w' => 100, 'h' => 100],
        ];

        $expectedReturn = 'http://test.imgix.net/bridge.png?h=100&w=100';

        $this->urlBuilder
            ->shouldReceive('createURL')
            ->withArgs($expectedArgs)
            ->once()
            ->andReturn($expectedReturn);

        $response = $this->imgix->createUrl($path, $params);

        $this->assertEquals($expectedReturn, $response);
    }
}
