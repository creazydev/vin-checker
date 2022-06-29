<?php

require_once 'src/controllers/DefaultController.php';
require_once 'src/controllers/AuthController.php';
require_once 'src/controllers/AdminController.php';

class Routing
{
    public static $routes;
    public static $session_cookie_name = "session_id";

    private static $authFreeRoutes = array('login', 'register');

    public static function get($url, $controller)
    {
        self::$routes[$url] = $controller;
    }

    public static function post($url, $controller)
    {
        self::$routes[$url] = $controller;
    }

    public static function run($url)
    {
        $action = explode("/", $url)[0];

        if (!array_key_exists($action, self::$routes)) {
            $action = 'index';
        }

        $controller = self::$routes[$action];
        $object = new $controller;

        if (!in_array($action, self::$authFreeRoutes) && !self::isAuthenticated()) {
            Routing::run('login');
        } elseif (in_array($action, self::$authFreeRoutes) && self::isAuthenticated()) {
            Routing::run('index');
        } else {
                $object->$action();
            }
        }

        public
        static function isAuthenticated(): bool
        {
            return isset($_COOKIE[self::$session_cookie_name]);
        }
    }
