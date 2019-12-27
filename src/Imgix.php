<?php

namespace Nasyrov\Laravel\Imgix;

use Imgix\UrlBuilder;

class Imgix
{
    /**
     * The imgix url builder instance.
     *
     * @var UrlBuilder
     */
    protected $urlBuilder;

    /**
     * Create a new imgix instance.
     *
     * @param UrlBuilder $urlBuilder
     */
    public function __construct(UrlBuilder $urlBuilder)
    {
        $this->urlBuilder = $urlBuilder;
    }

    /**
     * Create an imgix url for the given path.
     *
     * @param string $path
     * @param array  $params
     *
     * @return string
     */
    public function createUrl($path, array $params = [])
    {
        return $this->urlBuilder->createURL($path, $params);
    }
}
