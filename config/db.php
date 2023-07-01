<?php

return [
        'driver' => 'pdo_' . getenv('DB_CONNECTION'),
        'host' => getenv('DB_HOST', '127.0.0.1'),
        'port' => getenv('DB_PORT', '5432'),
        'dbname' => getenv('DB_DATABASE', ''),
        'user' => getenv('DB_USERNAME', ''),
        'password' => getenv('DB_PASSWORD', ''),
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
        'schema' => 'public',
        'sslmode' => 'prefer',
];