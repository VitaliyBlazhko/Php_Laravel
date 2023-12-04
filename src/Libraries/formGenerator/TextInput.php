<?php

namespace App\Libraries\formGenerator;



class TextInput extends FormElement
{

    public function validate(): bool
    {

        return isset($_POST[$this->name]) && !empty($_POST[$this->name]);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getErrorMessage(): string
    {
        return $this->errorMessage;
    }

    public function render(): string
    {
        return "<input type='{$this->type}' placeholder='{$this->placeholder}' name='{$this->name}' />";
    }
}