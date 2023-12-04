<?php

namespace App\Controllers;


use App\Core\Application;
use App\Core\Route;
use App\Model\UserModel;

class RegistrationController
{
    #[Route('GET', '/registration_form')]
    public function registration_form()
    {
        return Application::$app->view->render('registration_form');
    }

    public function register()
    {
        $data = Application::$app->request->getBody();
        $user = new UserModel();
        // ... (аналогічний код валідації та обробки даних)
        if (!empty($errors)) {
            include_once '../views/registration_form.php';
        } else {
            // Логіка збереження користувача
            // Потім можна перенаправити користувача на іншу сторінку або відобразити повідомлення про успішну реєстрацію
        }
    }
}