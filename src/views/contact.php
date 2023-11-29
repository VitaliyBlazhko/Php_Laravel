<h1>Contact</h1>

<?php

use App\Libraries\formGenerator\FormGenerator;
use App\Libraries\formGenerator\TextInput;
use App\Libraries\formGenerator\Checkbox;
use App\Libraries\formGenerator\Button;
use App\Controllers\ContactController;

if ($status): ?>

    <?php


    $formGenerator = new FormGenerator();

    $formGenerator->addElement(new TextInput('email', 'email', 'email'));
    $formGenerator->addElement(new TextInput('full_name', 'text', 'FullName'));
    $formGenerator->addElement(new Button('button', 'submit', ''));
    $formGenerator->generateForm();

    ?>


<?php else:

    $contactShow = new ContactController();
    $contactShow->contactShow();
    ?>

    <h2> Success</h2>
<?php endif; ?>
