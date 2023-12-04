<?php

namespace App\Libraries\formGenerator;

use App\Libraries\formGenerator\FormElement;

class FormGenerator
{
    private array $elementsForm = [];

    public function addElement(FormElementInterface $element): void
    {
        $this->elementsForm[] = $element;
    }

    public function generateForm($action = '/contact-save'): string
    {
        $html = "<form method='POST' action='{$action}'>";
        foreach ($this->elementsForm as $element) {
            $html .= $element->render();
        }
        $html .= "</form>";
        echo $html;
        return '';
    }

    public function validateForm(): bool
    {
        foreach ($this->elementsForm as $element) {
            if (!$element->validate()) {
                return false;
            }
        }
        return true;
    }

    public function getValidationErrors(): array
    {
        $errors = [];
        foreach ($this->elementsForm as $element) {
            if (!$element->validate()) {
                $errors[$element->getName()] = $element->getErrorMessage();
            }
        }
        return $errors;
    }
}