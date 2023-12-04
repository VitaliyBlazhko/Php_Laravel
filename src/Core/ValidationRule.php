<?php

namespace App\Core;

#[\Attribute(\Attribute::TARGET_PROPERTY)]
class ValidationRule
{
    public function __construct(private array $rules = [])
    {
    }

    public function validate(string $value): bool
    {
        foreach ($this->rules as $rule => $ruleValue) {
            switch ($rule) {
                case 'required':
                    if (empty($value)) {
                        return false;
                    }
                    break;
                case 'minLength':
                    if (strlen($value) < $ruleValue) {
                        return false;
                    }
                    break;
                case 'email':
                    if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
                        return false;
                    }
                    break;
                case 'password':
                    if (!preg_match('/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{' . $ruleValue . ',}$/', $value)) {
                        return false;
                    }
                    break;
                default:
                    return false;
            }
        }
        return true;
    }

    public function getRules(): array
    {
        return $this->rules;
    }
}