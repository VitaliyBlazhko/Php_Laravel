<?php

namespace App\Libraries\formGenerator;

use App\Libraries\formGenerator\FormElement;

class Checkbox extends FormElement
{


    public function render(): string
    {
        return "<input type='checkbox' name='{$this->name}' />";
    }
}