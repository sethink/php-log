<?php

include_once "./src/Log.php";

use sethink\phpLog\Log;


class Demo
{
    public function start()
    {
        while (true) {
            Log::info('info');
            Log::debug('debug');
            Log::warn('warn');
            Log::error('error');
            sleep(2);
        }
    }
}

$demo = new Demo();
$demo->start();