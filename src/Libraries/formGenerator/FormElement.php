<?php

namespace App\Libraries\formGenerator;


use App\Libraries\formGenerator\FormElementInterface;

abstract class FormElement implements FormElementInterface
{
    protected string $name;
    protected string $type;
    protected string $placeholder;
    protected bool $isRequired;
    protected string $value = '';
    protected string $errorMessage = '';

    public function __construct(string $name, string $type, string $placeholder, bool $isRequired, string $value = '', string $errorMessage = '')
    {
        $this->name = $name;
        $this->type = $type;
        $this->placeholder = $placeholder;
        $this->isRequired = $isRequired;
        $this->value = $value;
        $this->errorMessage = $errorMessage;
    }

    // Додайте реалізацію методів інтерфейсу
    // render(), validate(), getName(), getErrorMessage()
}