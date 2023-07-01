<?php

namespace App\Core;

class Hash
{
    public static function hashPassword($pass, $algo = PASSWORD_BCRYPT): string
    {
        return password_hash($pass, $algo);
    }

    public static function checkPassword($pass, $hashPass): bool
    {
        return password_verify($pass, $hashPass);
    }
}