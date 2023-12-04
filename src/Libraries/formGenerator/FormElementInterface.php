<?php

namespace App\Libraries\formGenerator;

interface FormElementInterface
{
    public function render(): string;
    public function validate(): bool;
    public function getName(): string;
    public function getErrorMessage(): string;
}