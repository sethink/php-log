<?php

namespace sethink\phpLog;


class Log
{

    public static function info($data)
    {
        self::render_data($data, 'info');
    }


    public static function debug($data)
    {
        self::render_data($data, 'debug');
    }

    public static function warn($data)
    {
        self::render_data($data, 'warn');
    }


    public static function error($data)
    {
        self::render_data($data, 'error');
    }


    private static function render_data($data, $type)
    {
        $log = '';

        $render = date('Y-m-d H:i:s', time()) . ':--------' . json_encode($data,JSON_UNESCAPED_UNICODE);
        switch ($type) {
            case 'info':
                $log = "\033[37m" . '[info] ' . $render . "\033[0m";
                break;
            case 'debug':
                $log = "\033[36m" . '[debug]' . $render . "\033[0m";
                break;
            case 'warn':
                $log = "\033[33m" . '[warn] ' . $render . "\033[0m";
                break;
            case 'error':
                $log = "\033[31m" . '[error]' . $render . "\033[0m";
                break;

        }


        echo $log . PHP_EOL;
    }

}