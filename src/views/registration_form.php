<?php
use App\Libraries\formGenerator\TextInput;
use App\Libraries\formGenerator\FormGenerator;
//ob_start();
$formGenerator = new FormGenerator();
$formGenerator->addElement(new TextInput('firstName', 'text', 'First Name', true, $data['firstName'] ?? '', $errors['firstName'] ?? ''));
$formGenerator->addElement(new TextInput('lastName', 'text', 'Last Name', true, $data['lastName'] ?? '', $errors['lastName'] ?? ''));
$formGenerator->addElement(new TextInput('email', 'email', 'Email', true, $data['email'] ?? '', $errors['email'] ?? ''));
$formGenerator->addElement(new TextInput('password', 'password', 'Password', true, '', $errors['password'] ?? ''));
$formHtml = $formGenerator->generateForm('/register');
echo $formHtml;
//ob_end_flush();
?>
