<?php

/*
 * You can place your custom package configuration in here.
 */
return [
    'gmo' => [
        'mode' => env('GMO_API_MODE', 'testing'),
        'security' => [
            'use3ds'        => env('GMO_3DS', false),
            'version'       => env('GMO_3DS_VERSION', 2)
        ],
        'base_url' => [
            'development'   => env('GMO_BASE_URL_DEV', 'https://pt01.mul-pay.jp'),
            'production'    => env('GMO_BASE_URL_PROD', 'https://p01.mul-pay.jp')
        ],
        'creds' => [
            'shop_id'   => env('GMO_SHOP_ID'),
            'shop_pass' => env('GMO_SHOP_PASS'),
            'site_id'   => env('GMO_SITE_ID'),
            'site_pass' => env('GMO_SITE_PASS')
        ]
    ]
];