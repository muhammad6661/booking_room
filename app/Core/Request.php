<?php

namespace App\Core;

class Request
{

    /**
     * @return string
     */
    public function getPath()
    {
        $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?? '/';
        $params = strpos($path, "?");
        if ($params === false) {
            return $path;
        }

        return substr($path, 0, $params);
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

    public function all(): array
    {
        $body = [];
        if ($this->getMethod() === 'get')
        {

            foreach ($_GET as $key => $value) {
                $body[$key] = filter_input(INPUT_GET, $key, FILTER_SANITIZE_SPECIAL_CHARS);
            }
        }

        if ($this->getMethod() === 'post')
        {
            foreach ($_POST as $key => $value) {
                $body[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
            }
        }

        return $body;
    }

    public function get($key, $default = null):mixed
    {
        $body = $this->all();
        if (isset($body[$key]))
        {
            return  $body[$key];
        }
        return  $default;
    }

    public function getCurrentURL()
    {
        return $_SERVER['REQUEST_URI'];
    }

}