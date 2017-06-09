<?php

namespace Nasyrov\Laravel\Imgix\Tests\Unit;

use Imgix\UrlBuilder as BaseUrlBuilder;
use Mockery;
use Nasyrov\Laravel\Imgix\UrlBuilder;
use PHPUnit\Framework\TestCase;

class UrlBuilderTest extends TestCase
{
    /** @var \Imgix\UrlBuilder|\Mockery\Mock */
    protected $baseUrlBuilder;

    /** @var \Nasyrov\Laravel\Imgix\UrlBuilder */
    protected $urlBuilder;

    protected function setUp()
    {
        $this->baseUrlBuilder = Mockery::mock(BaseUrlBuilder::class);
        $this->urlBuilder = new UrlBuilder($this->baseUrlBuilder);
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

        $this->baseUrlBuilder
            ->shouldReceive('createURL')->withArgs($expectedArgs)
            ->once()
            ->andReturn($expectedReturn);

        $response = $this->urlBuilder->createUrl($path, $params);

        $this->assertEquals($expectedReturn, $response);
    }
}
