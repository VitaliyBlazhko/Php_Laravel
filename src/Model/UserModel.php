<?php

namespace App\Model;

use App\Core\Application;
use App\Core\Request;
use App\Core\ValidationRule;

class UserModel
{


    #[ValidationRule(['required' => true, 'minLength' => 2])]
    public string $firstName;

    #[ValidationRule(['required' => true, 'minLength' => 2])]
    public string $lastName;

    #[ValidationRule(['required' => true, 'email' => true])]
    public string $email;

    #[ValidationRule(['required' => true, 'password' => 6])]
    public string $password;

    public function hydrate(array $data): void
    {

        foreach ($data as $key => $value) {
            if (property_exists($this, $key)) {
                $this->{$key} = $value;
            }
        }
    }

}