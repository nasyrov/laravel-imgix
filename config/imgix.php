<?php

return [

    /**
     * @see https://github.com/imgix/imgix-php
     */

    'domains' => [
        // 'cdn-1.imgix.net',
        // 'cdn-2.imgix.net'
    ],

    'useHttps' => false,

    'signKey' => '',

    'shardStrategy' => \Imgix\ShardStrategy::CRC,

    'includeLibraryParam' => true,

];
