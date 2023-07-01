<?php

namespace App\Core;

use App\Models\Entity\User;

class Auth
{
    public static function login(User $user, $rememberMe = false): void
    {

        App::$app->session->set('user_auth', $user);
    }

    public static function getUser()
    {
        return App::$app->session->get('user_auth');
    }

    public static function logout(): void
    {
        if (App::$app->session->get('user_auth')) {
            App::$app->session->set('user_auth', '');
        }
    }

    public static function checkAuth(): bool
    {
        $user = App::$app->session->get('user_auth');
        if ($user) {
            return true;
        }
        return false;
    }
}