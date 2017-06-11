<?php

use Nasyrov\Laravel\Imgix\ImgixServiceProvider;

if (!function_exists('imgix')) {
    /**
     * Generate an imgix url for the given path.
     *
     * @param string $path
     * @param array  $params
     *
     * @return string
     */
    function imgix($path, array $params = [])
    {
        return app(ImgixServiceProvider::ALIAS)->createURL($path, $params);
    }
}
