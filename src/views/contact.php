<h1>Contact</h1>

<?php

use App\Libraries\formGenerator\FormGenerator;
use App\Libraries\formGenerator\TextInput;
use App\Libraries\formGenerator\Checkbox;
use App\Libraries\formGenerator\Button;
use App\Controllers\ContactController;
use App\Core\ContactInfoDisplayer;

if ($status): ?>

    <?php


    $formGenerator = new FormGenerator();

    $formGenerator->addElement(new TextInput('email', 'email', 'email', true));
    $formGenerator->addElement(new TextInput('full_name', 'text', 'FullName', true));
    $formGenerator->addElement(new Button('button', 'submit', '', true));
    $formGenerator->generateForm();

    ?>


<?php else:

    $data = $params['data'] ?? [];
//dd($data);
    echo ContactInfoDisplayer::display($data);
    ?>

    <h2> Success</h2>
<?php endif; ?>
