<?php

use App\Classes\LocalState;

return [
    'version' => '1.0',
    'showQuote' => true,
    'stateBuilder' => LocalState::class,
    'defaultRole' => 'admin',
    'dateFormat' => 'd-m-Y',
    'dateTimeFormat' => 'd-m-Y H:i:s',
    'facebook' => 'https://facebook.com/fuisorteado',
    'googleplus' => 'https://plus.google.com/fuisorteado',
    'twitter' => 'https://twitter.com/fuisorteado',
    'ravenKey' => env('RAVEN_DSN', null),
    'cacheLifetime' => env('CACHE_LIFETIME', 60),
    'ensoApiToken' => env('ENSO_API_TOKEN', null),
    'extendedDocumentTitle' => false,
];
