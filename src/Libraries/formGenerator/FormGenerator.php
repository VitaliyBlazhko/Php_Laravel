<?php

namespace App\Libraries\formGenerator;

use App\Libraries\formGenerator\FormElement;

class FormGenerator
{
    private array $elementsForm = [];

    public function addElement(FormElement $element): void
    {
        $this->elementsForm[] = $element;
    }

    public function generateForm($action = '/contact-save'): void
    {
        $html = "<form method='POST' action='{$action}'>";
        foreach ($this->elementsForm as $element){
            $html .= $element->render();
        }
        $html .= "</form>";
        echo $html;
    }

    public function validateForm(): bool
    {
        foreach ($this->elementsForm as $element){
            if(!$element->validate()) {
                return false;
            }
        }
        return true;
    }
}