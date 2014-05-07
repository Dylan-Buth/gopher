<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default FileSystem Driver
    |--------------------------------------------------------------------------
    |
    | Supported: "s3"
    |
    */

    'default' => 's3',

    /*
    |--------------------------------------------------------------------------
    | FileSystem Connections
    |--------------------------------------------------------------------------
    |
    */

    'connections' => [

        's3' => [
            'driver' => 's3',
            'key'    => 'your-access-key',
            'secret' => 'your-secret-key',
            'bucket' => 'your-bucket-name'
        ]

    ]

];