<?php

require_once 'vendor/autoload.php';


use Doctrine\ORM\Tools\Console\ConsoleRunner;

// Adjust this path to your actual bootstrap.php

Dotenv\Dotenv::createUnsafeImmutable(dirname(__DIR__))->load();

$doctrine = new \App\Core\Doctrine();

return ConsoleRunner::createHelperSet($doctrine->em);