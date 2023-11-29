<?php

namespace App\Libraries\formGenerator;

interface FormElementInterface
{
    public function render();
    public function validate();

}