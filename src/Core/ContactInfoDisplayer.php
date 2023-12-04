<?php

namespace App\Core;

class ContactInfoDisplayer
{
    public static function retrieve(): array
    {

        return Application::$app->request->getBody();
    }
    public static function display()
    {
        $data = Application::$app->request->getBody();

        $email = $data['email'] ?? '';
        $fullName = $data['full_name'] ?? '';

        $info = 'Email: ' . $email . '<br>';
        $info .= 'Full Name: ' . $fullName . '<br>';

        return $info;
    }


}