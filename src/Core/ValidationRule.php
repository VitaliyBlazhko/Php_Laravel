<?php

namespace App\Core;

class ValidationRule
{
    public function __construct(private string $rule, private mixed $value = null)
    {
    }

    public function validate(string $value): bool
    {
        switch ($this->rule) {
            case 'required':
                return !empty($value);
            case 'minLength':
                return strlen($value) >= $this->value;
            case 'email':
                return filter_var($value, FILTER_VALIDATE_EMAIL);
            case 'password':
                return preg_match('/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{' . $this->value . ',}$/', $value);
            default:
                return false;
        }
    }

}