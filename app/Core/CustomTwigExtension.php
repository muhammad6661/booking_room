<?php

namespace App\Core;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;
class CustomTwigExtension extends AbstractExtension
{
    public function getFunctions(): array
    {
        return [
            new TwigFunction('dump', [$this, 'dump']),
        ];
    }

    public function dump(...$params)
    {
        dd($params);
    }
}