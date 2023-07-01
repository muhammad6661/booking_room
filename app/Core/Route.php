<?php

namespace  App\Core;

use ReflectionMethod;
use ReflectionException;
class Route
{
    public Request $request;
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public static array $routes = [];

    /**
     * @param $path
     * @param $callback
     * @return void
     */
    public function get($path, $callback): void
    {
        self::$routes['get'][$path] = $callback;
    }

    /**
     * @param $path
     * @param $callback
     * @return void
     */
    public function post($path, $callback)
    {
        self::$routes['post'][$path] = $callback;
    }

    /**
     * @return mixed
     */
    public function resolve(): mixed
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();

        $matches = $this->matchRoutes($path, $method);
        if ($matches === false) {
            return  $path;
            return  App::$app->view->renderViewError('400');
        }

        $callback = $matches['callback'];

        if (is_callable($callback)) {
            return call_user_func($callback);
        }
        if (is_array($callback)) {
            $controller = new $callback[0]();
            $callback[0] = $controller;
        }

        return $this->invokeControllerAction($callback, $matches['params']);
    }

    /**
     * @param $requestUrl
     * @param $method
     * @return array|false
     */
    public function matchRoutes($requestUrl, $method): bool|array
    {
        $routes = self::$routes;

        if (isset($routes[$method])) {
            foreach ($routes[$method] as $route => $callback) {
                $pattern = preg_quote($route, '/');
                $pattern = preg_replace('/\\\{(\w+)\\\}/', '([^\/]+)', $pattern);
                $pattern = '/^' . $pattern . '$/';

                if (preg_match($pattern, $requestUrl, $matches)) {
                    $params = [];
                    preg_match_all('/\{(\w+)\}/', $route, $paramMatches);
                    $paramNames = $paramMatches[1];
                    array_shift($matches); // Remove the first element (full match)
                    foreach ($matches as $index => $match) {
                        $paramName = $paramNames[$index];
                        $params[$paramName] = $match;
                    }

                    return [
                        'callback' => $callback,
                        'params' => $params,
                    ];
                }
            }
        }

       return false;
    }

    /**
     * @param $callback
     * @param $argsValue
     * @return mixed
     */

    public function invokeControllerAction($callback, $argsValue): mixed
    {
        if (count($callback) != 2) {
            return App::$app->view->renderViewError(400);
        }

        $controllerName = $callback[0];
        $methodName = $callback[1];

        if (!method_exists($controllerName, $methodName)) {
            return  App::$app->view->renderViewError(400);
        }

        try {
            $args = $this->getSignatureFunc($controllerName, $methodName, $argsValue);
        } catch (ReflectionException $e) {
            return $e;
        }
        return call_user_func_array($callback, $args);
    }


    /**
     * @param $controllerName
     * @param $methodName
     * @param $params
     * @return array
     * @throws ReflectionException
     */
    public function getSignatureFunc($controllerName, $methodName, $params): array
    {
        $reflection = new ReflectionMethod($controllerName, $methodName);
        $methodParams = $reflection->getParameters();
        $args = [];

        foreach ($methodParams as $param) {
            $paramType = $param->getType();
            $paramName = $param->getName();
            if ($paramType && !$paramType->isBuiltin()) {
                $paramClassName = $paramType->getName();
                if (class_exists($paramClassName)) {
                    $args[] = new $paramClassName();
                    continue;
                }
            }

            if (isset($params[$paramName])) {
                $args[] = $params[$paramName];
            } else {
                $args[] = null;
            }
        }
        return $args;
    }


}