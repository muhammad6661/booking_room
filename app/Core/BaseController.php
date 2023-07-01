<?php

namespace App\Core;

use JetBrains\PhpStorm\NoReturn;
use Rakit\Validation\Validator;

class BaseController
{
    /**
     * @param string $view
     * @param array $params
     * @return string
     */
    public function render(string $view, array $params = []): string
    {
        return App::$app->view->renderView($view, $params);
    }


    public function redirect($url): void
    {
        header("Location: $url" ,true, 301);
        exit();
    }

    /**
     * @param $url
     * @param $error
     * @return void
     */
    public function redirectWithError($url, $error)
    {
        App::$app->session->setFlash('errors', [$error]);

        $this->redirect($url);
    }

    public function addFlash($key, $value): void
    {
        App::$app->session->setFlash($key, [$value]);
    }

    public function abort($code): string
    {
        return App::$app->view->renderViewError($code);
    }

    public function setSession($key, $value): void
    {
        App::$app->session->set($key, $value);
    }

    public function getSession($key)
    {
        return App::$app->session->get($key);
    }

    public function validate(Request $request, $arrayValidate, $arrayMessage = []): void
    {
        $validator = new Validator();
        $validation = $validator->validate($request->all(), $arrayValidate, $arrayMessage);
        if ($validation->fails())
        {
            App::$app->session->setFlash('errors', $validation->errors()->all());
            $this->redirect($request->getCurrentURL());
        }

    }
}