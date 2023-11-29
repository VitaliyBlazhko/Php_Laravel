<?php

namespace App\Libraries\formGenerator;


use App\Libraries\formGenerator\FormElementInterface;

abstract class FormElement implements FormElementInterface
{
    public function __construct(
        protected string $name,
        protected string $type,
        protected string $placeholder,
        protected bool   $isRequired = false,
    )
    {}

    abstract public function render();


    public function validate(): bool
    {
        if($this->isRequired && empty($_POST[$this->name])){
            return false;
        }
        return true;
    }
}