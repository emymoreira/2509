<?php

namespace App\SystemServices;

use Psr\Log\LogLevel;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class MonologFactory{

    private static $logger;

    public static function getInstance(){
        if(self::$logger == null){
            self::$logger = new Logger('MEUAPP');
            self::$logger->pushHandler(new StreamHandler('meuslogs.log', LogLevel::DEBUG));
            return self::$logger;
        }else{
            return self::$logger;
        }
    }

}