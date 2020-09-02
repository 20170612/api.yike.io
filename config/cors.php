<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Laravel CORS
    |--------------------------------------------------------------------------
    |
    | allowedOrigins, allowedHeaders and allowedMethods can be set to array('*')
    | to accept any value.
    |
    */

    'allow-credentials'  => env('CORS_ALLOW_CREDENTIAILS', false), // set "Access-Control-Allow-Credentials" 👉 string "false" or "true".
    'allow-headers'      => ['Content-Type', 'Accept', 'Authorization'], // ex: Content-Type, Accept, X-Requested-With
    'expose-headers'     => [],
    'origins'            => ['http://element.linzhou-china.com', 'https://element.linzhou-china.com'], // ex: http://localhost
    'methods'            => ['*'], // ex: GET, POST, PUT, PATCH, DELETE
    'max-age'            => env('CORS_ACCESS_CONTROL_MAX_AGE', 0),
    'laravel'            => [
        'allow-route-perfix' => env('CORS_LARAVEL_ALLOW_ROUTE_PERFIX', '*'), // The perfix is using \Illumante\Http\Request::is method. 👉
        'route-group-mode'   => env('CORS_LARAVEL_ROUTE_GROUP_MODE', false),
    ]
];
