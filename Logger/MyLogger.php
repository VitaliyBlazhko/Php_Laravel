<?php

namespace App;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class MyLogger {
    private Logger $log;

    public function __construct($logName) {
        $logFile = __DIR__ . '/../app.log';
        $this->log = new Logger($logName);
        $this->log->pushHandler(new StreamHandler($logFile, Logger::DEBUG));
    }

    public function logInfo($message): void
    {
        $this->log->info($message);
    }

    public function logError($message): void
    {
        $this->log->error($message);
    }

}


