<?php

namespace App\Controllers;

use App\Core\Application;
use App\Core\Route;
use App\Model\ContactModel;

class ContactController
{
    #[Route('GET', '/contact')]
    public function contact()
    {
        $response = ['status' => true];
        return Application::$app->view->render('contact', $response);
    }

    #[Route('POST', '/contact-save')]
    public function contactSave()
    {
        $response = ['status' => true];
        $data = Application::$app->request->getBody();
        $contactModel = new ContactModel();

        $contactModel->loadData($data);
        if ($contactModel->validate()) {
            $response = ['status' => false];
        }

        return Application::$app->view->render('contact', $response);
    }


    public function contactShow()
    {
        $data = Application::$app->request->getBody();
        $email = $data['email'];
        $fullName = $data['full_name'];

        echo 'Email: ' . $email . '<br>';
        echo 'Full Name: ' . $fullName . '<br>';
    }
}