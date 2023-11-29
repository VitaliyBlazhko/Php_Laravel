<?php

namespace App\Libraries\formGenerator;



class TextInput extends FormElement
{

    public function render(): string
    {
        return "<input type='{$this->type}' placeholder='{$this->placeholder}' name='{$this->name}' />";
    }
}