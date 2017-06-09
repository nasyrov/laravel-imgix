<?php

if (!function_exists('imgix')) {
    /**
     * Generate an Imgix URL for the given path.
     *
     * @param string $path
     * @param array $params
     *
     * @return string
     */
    function imgix($path, array $params = [])
    {
        return app('imgix')->createURL($path, $params);
    }
}
