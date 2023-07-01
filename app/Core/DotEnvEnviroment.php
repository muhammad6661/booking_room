<?php

namespace App\Core;

class DotEnvEnviroment
{
   public static function loadEnv()
    {
        $dotenv = getRoot().'/.env';
        if (!is_readable($dotenv)) {
            throw new \RuntimeException(sprintf('%s file is not readable', $dotenv));
        }

        $lines = file($dotenv, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($lines as $line) {

            if (strpos(trim($line), '#') === 0) {
                continue;
            }

            list($name, $value) = explode('=', $line, 2);
            $name = trim($name);
            $value = trim($value);

            if (!array_key_exists($name, $_SERVER) && !array_key_exists($name, $_ENV)) {
                putenv(sprintf('%s=%s', $name, $value));
                $_ENV[$name] = $value;
                $_SERVER[$name] = $value;
            }
        }
    }
}