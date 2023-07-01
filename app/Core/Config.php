<?php

namespace App\Core;

use Exception;

class Config
{
    public static function get($param)
    {

        $args = explode('.', $param);
        if (count($args) === 0) {
            return null;
        }


        try {
            $configFile = dirname( dirname(__DIR__)) . '/config/' . $args[0] . '.php';
            if (!file_exists($configFile)) {
                return null;
            }

            return include_once $configFile;
        } catch (Exception $e) {
            return null;
        }
    }
}