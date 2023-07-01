<?php

namespace App\Core;

class Session
{

    protected const FLASH = 'flash';
    protected const ERROR = 'error';
    protected const WARNING = 'warning';
    protected const INFO = 'info';
    protected const SUCCESS = 'success';

    public static array $SESSION = [];


    public function __construct(?string $cacheExpire = null, ?string $cacheLimiter = null)
    {
        if (session_status() === PHP_SESSION_NONE) {
            if ($cacheLimiter !== null) {
                session_cache_limiter($cacheLimiter);
            }

            if ($cacheExpire !== null) {
                session_cache_expire($cacheExpire);
            }

            $this->startSecureSession(); // Start a secure session

            self::$SESSION = &$_SESSION;
        }
    }



    private function startSecureSession(): void
    {
        // Start a secure session using recommended settings
        ini_set('session.use_strict_mode', 1); // Reject session ID if the browser sends no session cookie
        ini_set('session.use_cookies', 1); // Use cookies to store the session ID
        ini_set('session.use_only_cookies', 1); // Only use cookies to store the session ID
        ini_set('session.cookie_secure', 1); // Only transmit the session cookie over secure HTTPS connection
        ini_set('session.cookie_httponly', 1); // Prevent JavaScript access to the session cookie
        session_start();
    }

    public function setFlash($key, $value): void
    {
        if (!$this->has(Session::FLASH)) {
            $this->set(Session::FLASH, []);
        }
        self::$SESSION[Session::FLASH][$key] = $value;
    }


    public function getFlash($key): mixed
    {
        $message = null;
        if (isset(self::$SESSION[Session::FLASH][$key])) {
            $message = self::$SESSION[Session::FLASH][$key];
            $this->removeFlash($key);
        }
        return $message;
    }


    public function removeFlash($key): void
    {
        if (isset(self::$SESSION[Session::FLASH][$key])) {
            unset(self::$SESSION[Session::FLASH][$key]);
        }
    }


    public function has($key): bool
    {
        if (isset(self::$SESSION[$key])) {
            return true;
        }
        return  false;
    }

    public function get($key): mixed
    {
        if ($this->has($key)) {
            return self::$SESSION[$key];
        }
        return  null;
    }

    public function set(string $key, $value): void
    {
        self::$SESSION[$key] = $value;
    }

    public function remove(string $key): void
    {
        if ($this->has($key)){
            unset(self::$SESSION[$key]);
        }
    }

    public function clear(): void
    {
        session_unset();
    }

}