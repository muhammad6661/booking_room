<?php

namespace App\Core;

class View
{


    public function __construct()
    {

    }


    public function renderView(string $view, array $params)
    {
        $isTwig = strpos($view, '.twig');
        if ($isTwig === false) {
            $view .= '.twig';
        }

        return App::$app->twigTemplate->environment->render($view, $params);
    }

    public function renderViewError($error): string
    {
        return $this->renderView('/errors/' . $error.'.twig', []);
    }


}