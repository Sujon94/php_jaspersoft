<?php
return [
    /*
     |
     |Jasper server url path like "http::{url}/jasperserver
     */
    "server_url" => env('JASPER_SERVER_URL', 'http://127.0.0.1:8080'),

    /*
     * Jasper server credential configuration
     */
    "username" => env('JASPER_SERVER_USERNAME', 'jasperadmin'),
    "password" => env('JASPER_SERVER_PASSWORD', 'jasperadmin')
];
