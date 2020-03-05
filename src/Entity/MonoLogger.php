<?php
declare(strict_types=1);

namespace App\Entity;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class MonoLogger
{
    private $logger;

    public function __construct($loggerName)
    {
        $this->logger = new Logger($loggerName);
    }

    public function log($string) {

        $this->logger->pushHandler(new StreamHandler('../logs/info.log'));
        $this->logger->debug($string);
    }
}