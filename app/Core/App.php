<?php

namespace App\Core;

class App
{

    public Request $request;
    public Route $route;
    public Twig $twigTemplate;
    public View $view;
    public BaseController $baseController;

    public static App $app;

    public Session $session;

    public function __construct()
    {
        self::$app = $this;
        $this->session = new Session();
        $this->request = new Request();
        $this->route = new Route($this->request);
        $this->twigTemplate = new Twig();
        $this->view = new View();
        $this->baseController = new BaseController();
    }


    /**
     * @return void
     */
    public function run(): void
    {
        echo $this->route->resolve();
    }

}