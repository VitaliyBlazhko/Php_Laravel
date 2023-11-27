

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Phone number entry form</title>
</head>
<body>
    <form action="" method="post">
        <label for="phone_number">Enter id number (10 digits):</label><br>
        <input type="tel" id="phone_number" name="phone_number" pattern="[0-9]{10}" required><br><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>

<?php

require __DIR__ . '/../vendor/autoload.php';




use App\NumberValidator;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phoneNumber = $_POST['phone_number'];
}

$validator = NumberValidator::validate($phoneNumber);
if($validator == 1){
    echo 'Successfully';
}else{
    throw new Exception('Fail');
}




