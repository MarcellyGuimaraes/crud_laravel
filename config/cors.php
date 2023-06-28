<?php

return [

/*
|--------------------------------------------------------------------------
| Cross-Origin Resource Sharing (CORS) Configuration
|--------------------------------------------------------------------------
|
| Here you may configure your settings for cross-origin resource sharing
| or "CORS". This determines what cross-origin operations may execute
| in web browsers. You are free to adjust these settings as needed.
|
| To learn more: https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
|
*/

'paths' => ['*'],

'allowed_methods' => ['GET', 'POST', 'PUT', 'DELETE', 'OPTIONS'],

'allowed_origins' => ['191.252.110.200/', 'http://localhost:8080/'],

'allowed_origins_patterns' => [],

'allowed_headers' => ['Api-Token', 'Origin', 'Content-Type', 'Accept', 'Authorization', 'X-Request-With', 'X-Requested-With', 'X-CSRF-TOKEN', 'Referer', 'sec-ch-ua', 'sec-ch-ua-mobile', 'sec-ch-ua-platform', '*'],
'exposed_headers' => [],

'max_age' => 200,

'supports_credentials' => true,

];