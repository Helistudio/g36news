<?php

namespace App\Logging;

// use Illuminate\Log\Logger;
use DB;
use Illuminate\Support\Facades\Auth;
use Monolog\Logger;
use Monolog\Handler\AbstractProcessingHandler;

class DbLoggingHandler extends AbstractProcessingHandler
{

    /**
     *
     * Reference:
     * https://github.com/markhilton/monolog-mysql/blob/master/src/Logger/Monolog/Handler/MysqlHandler.php
     */
    public function __construct($level = Logger::DEBUG, $bubble = true)
    {
        $this->table = 'logs';
        parent::__construct($level, $bubble);
    }

    protected function write(array $record): void
    {
        $data = array(
            'message' => $record['message'],
            'context' => json_encode($record['context'], JSON_UNESCAPED_UNICODE + JSON_UNESCAPED_SLASHES),
            'level' => $record['level'],
            'level_name' => $record['level_name'],
            'channel' => $record['channel'],
            'record_datetime' => $record['datetime']->format('Y-m-d H:i:s'),
            'extra' => json_encode($record['extra']),
            'formatted' => $record['formatted'],
            'remote_addr' => (isset($_SERVER['REMOTE_ADDR'])) ? $_SERVER['REMOTE_ADDR'] : '127.0.0.1',
            'user_agent' => (isset($_SERVER['HTTP_USER_AGENT'])) ?$_SERVER['HTTP_USER_AGENT']:'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0',
            'created_at' => date("Y-m-d H:i:s"),
        );
        DB::connection('cms')->table($this->table)->insert($data);
    }
}
