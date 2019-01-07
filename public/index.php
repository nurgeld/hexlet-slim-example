<?php

require __DIR__ . '/../vendor/autoload.php';

$configuration = [
    'settings' => [
        'displayErrordetails' => true,
    ],
];

$app = new \Slim\App($configurations);

$app->get('/', function ($request, $response) {
    return $response->write('Welcome to Slim!');
});

$app->run();
