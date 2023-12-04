<?php

require_once __DIR__ . '/../vendor/autoload.php';
use \App\Core\Application;
use \App\Controllers\HomeController;
use \App\Controllers\ContactController;
use App\Controllers\RegistrationController;

$app = new Application();

$app->registerControllers([
    HomeController::class,
    ContactController::class,
    RegistrationController::class
]);

$app->run();