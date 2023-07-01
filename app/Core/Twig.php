<?php

namespace App\Core;

use Symfony\Component\Asset\Packages;
use Symfony\Bridge\Twig\Extension\AssetExtension;
use Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;
use Twig\TokenParser\ApplyTokenParser;

class Twig
{
    public FilesystemLoader $filesystemLoader;
    public Environment $environment;

    public function __construct()
    {
        $this->filesystemLoader = new FilesystemLoader(VIEW_PATH);
        $this->environment = new Environment($this->filesystemLoader, [
            'debug' => true,
            'cache' => STORAGE_PATH . '/cache',
        ]);
        $this->environment->addGlobal('errors', App::$app->session->getFlash('errors'));
        $this->environment->addGlobal('success_message', App::$app->session->getFlash('success_message'));
        $this->environment->addGlobal('user_auth', App::$app->session->get('user_auth'));
        $this->environment->addGlobal('current_url', App::$app->request->getPath());
        $this->environment->addExtension(new CustomTwigExtension());

    }


}