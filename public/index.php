<?php

require_once __DIR__ . '/../vendor/autoload.php';
use \App\Core\Application;
use \App\Controllers\HomeController;
use \App\Controllers\ContactController;

$app = new Application();

$app->registerControllers([
    HomeController::class,
    ContactController::class
]);

$app->run();