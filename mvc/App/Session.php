<?php

namespace App;

class Session
{
    public static function init()
    {
        ini_set('session.gc_maxlifetime', 3600 * 24 * 30);
        ini_set('session.cookie_lifetime', 3600 * 24 * 30);
        session_start();
    }

    public static function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    public static function get($key)
    {
        if (isset($_SESSION[$key]))
            return $_SESSION[$key];
    }

    public static function destroy()
    {
        // unset($_SESSION);
        session_destroy();
    }
}
