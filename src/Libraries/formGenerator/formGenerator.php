<?php


require __DIR__ . '/vendor/autoload.php';
use App\Libraries\formGenerator\Button;
use App\Libraries\formGenerator\Checkbox;
use App\Libraries\formGenerator\FormGenerator;
use App\Libraries\formGenerator\TextInput;


$formGenerator = new FormGenerator();
$formGenerator->addElement(new TextInput('username', true));
$formGenerator->addElement(new TextInput('email', true));
$formGenerator->addElement(new Checkbox('subscribe'));
$formGenerator->addElement(new Button('submit'));

$formGenerator->generateForm();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($formGenerator->validateForm()) {
        echo "Form is valid. Submitted data: <pre>" . print_r($_POST, true) . "</pre>";
    } else {
        echo "Form is not valid. Please fill in all required fields.";
    }
}