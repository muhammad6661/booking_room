<?php


return [

    'smtp' => [
        'transport' => 'smtp',
        'host' => getenv('MAIL_HOST', 'smtp.mailgun.org'),
        'port' => getenv('MAIL_PORT', 587),
        'encryption' => getenv('MAIL_ENCRYPTION', 'tls'),
        'username' => getenv('MAIL_USERNAME'),
        'password' => getenv('MAIL_PASSWORD'),
        'timeout' => null,
        'auth_mode' => null,
    ],
];