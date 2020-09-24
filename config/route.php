<?php
$config = [
    [
        'method' => ['GET'],
        'route' => '/important/date',
        'handler' => '\App\Controller\IndexController#getImportantDate',
    ],
    [
        'method' => ['POST'],
        'route' => '/upload',
        'handler' => '\App\Controller\ImageController#upload',
    ],
];