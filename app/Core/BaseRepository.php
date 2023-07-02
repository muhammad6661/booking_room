<?php

namespace App\Core;

class BaseRepository
{
    protected Doctrine $doctrine;

    public  function __construct()
    {
        $this->doctrine = Doctrine::getInstance();
    }
}