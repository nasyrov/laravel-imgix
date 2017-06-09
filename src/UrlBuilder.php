<?php

namespace Nasyrov\Laravel\Imgix;

use Imgix\UrlBuilder as BaseUrlBuilder;

class UrlBuilder
{
    /**
     * The url builder instance.
     *
     * @var BaseUrlBuilder
     */
    protected $urlBuilder;

    /**
     * Create a new url builder instance.
     *
     * @param BaseUrlBuilder $urlBuilder
     */
    public function __construct(BaseUrlBuilder $urlBuilder)
    {
        $this->urlBuilder = $urlBuilder;
    }

    /**
     * Create an imgix url for the given path.
     *
     * @param string $path
     * @param array $params
     *
     * @return string
     */
    public function createUrl($path, array $params = [])
    {
        return $this->urlBuilder->createURL($path, $params);
    }
}
