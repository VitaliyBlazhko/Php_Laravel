<?php

namespace App;
use App\MyLogger;


class NumberValidator {

    public static function validate($number) {

        $number = preg_replace('/\D/', '', $number);
        $logger = new MyLogger('validator');
        $logger->logInfo('validate number: ' . $number);



        if (strlen($number) === 10) {
            return true;

        } else {
            $logger->logError('don`t validate number: ' . $number);
            return false;
        }
    }
}