<?php

namespace App\Model;
use App\Core\ValidationRule;

class UserModel
{
    #[ValidationRule('required')]
    #[ValidationRule('minLength', 2)]
    public string $firstName;

    #[ValidationRule('required')]
    #[ValidationRule('minLength', 2)]
    public string $lastName;

    #[ValidationRule('required')]
    #[ValidationRule('email')]
    public string $email;

    #[ValidationRule('required')]
    #[ValidationRule('minLength', 6)]
    #[ValidationRule('password', 6)] // Параметр довжини для пароля
    public string $password;
}