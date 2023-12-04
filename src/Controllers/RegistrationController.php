<?php

namespace App\Controllers;


use App\Core\Application;
use App\Core\Route;
use App\Model\UserModel;
use App\Core\Validator;

class RegistrationController
{
    #[Route('GET', '/registration_form')]
    public function registration_form()
    {
        return Application::$app->view->render('registration_form');
    }

    #[Route('POST', '/register')]
    public function register()
    {
        $data = Application::$app->request->getBody();

        $user = new UserModel();

        $user->hydrate($data);

        $errors = Validator::validate($user);

        if (!empty($errors)) {
            var_dump($errors);
        } else {
            echo 'error';
        }
    }
}