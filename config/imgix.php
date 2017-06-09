<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Sharding
    |--------------------------------------------------------------------------
    |
    | Domain sharding enables you to spread image requests across multiple
    | domains. This allows you to bypass the requests-per-host limits of
    | browsers.
    |
    | Available Settings:
    | - \Imgix\ShardStrategy::CRC
    | - \Imgix\ShardStrategy::CYCLE
    |
    */

    'sharding' => \Imgix\ShardStrategy::CRC,

    /*
    |--------------------------------------------------------------------------
    | Domains
    |--------------------------------------------------------------------------
    |
    | It's recommended to use 2-3 domain shards maximum if you are going
    | to use domain sharding.
    |
    */

    'domains' => [
        // 'cdn-1.imgix.net',
        // 'cdn-2.imgix.net'
    ],

    /*
    |--------------------------------------------------------------------------
    | HTTPS
    |--------------------------------------------------------------------------
    |
    */

    'useHttps' => false,

    /*
    |--------------------------------------------------------------------------
    | Signed URLs
    |--------------------------------------------------------------------------
    |
    | To produce a signed URL, you must enable secure URLs on your source
    | and then provide your signature key to the URL builder.
    |
    */

    'signKey' => '',

];
