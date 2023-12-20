<?php
namespace App\Logging;

use Monolog\Logger;

class DbLogger{

/**
 * Create a custom Monolog instance.
 *
 *
 * @param  array  $config
 * @return \Monolog\Logger
 */
    public function __invoke(array $config){
        $logger = new Logger("DbLoggingHandler");
        return $logger->pushHandler(new DbLoggingHandler());
    }
}
