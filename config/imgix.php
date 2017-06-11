<?php

return [

    /**
     * @see https://github.com/imgix/imgix-php
     */

    'domains' => [
        'test.imgix.net',
    ],

    'useHttps' => false,

    'signKey' => '',

    'shardStrategy' => \Imgix\ShardStrategy::CRC,

    'includeLibraryParam' => true,

];
