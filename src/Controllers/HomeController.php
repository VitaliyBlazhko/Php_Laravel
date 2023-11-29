<?php

namespace App\Controllers;

use App\Core\Application;
use App\Core\Route;

class HomeController
{
    #[Route('GET', '/')]
    #[Route('GET', '/home')]
    public function home()
    {
        return Application::$app->view->render('home');
    }
}