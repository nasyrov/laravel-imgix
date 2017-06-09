<?php

return [

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
    | Use Https
    |--------------------------------------------------------------------------
    |
    */

    'useHttps' => false,

    /*
    |--------------------------------------------------------------------------
    | Sign Key
    |--------------------------------------------------------------------------
    |
    | To produce a signed URL, you must enable secure URLs on your source
    | and then provide your signature key to the URL builder.
    |
    */

    'signKey' => '',

    /*
    |--------------------------------------------------------------------------
    | Sharding Strategy
    |--------------------------------------------------------------------------
    |
    | Domain sharding enables you to spread image requests across multiple
    | domains. This allows you to bypass the requests-per-host limits of
    | browsers.
    |
    | Available settings:
    | - \Imgix\ShardStrategy::CRC
    | - \Imgix\ShardStrategy::CYCLE
    |
    */

    'shardStrategy' => \Imgix\ShardStrategy::CRC,

    /*
    |--------------------------------------------------------------------------
    | Sharding Strategy
    |--------------------------------------------------------------------------
    |
    */

    'includeLibraryParam' => true,

];
