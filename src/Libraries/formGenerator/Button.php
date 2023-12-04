<?php

namespace App\Libraries\formGenerator;

class Button extends FormElement
{
    public function validate(): bool
    {

        return true;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getErrorMessage(): string
    {

        return '';
    }

    public function render(): string
    {
        return "<button type='submit' name='{$this->name}'>{$this->name}</button>";
    }
}