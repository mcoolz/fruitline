<?php

namespace App\Core;

class Router {
    protected $routes = [];

    public function add($route, $controller, $action) {
        $this->routes[$route] = ['controller' => $controller, 'action' => $action];
    }

    public function dispatch($url) {
        // Remove base path from URL
        $basePath = dirname($_SERVER['SCRIPT_NAME']);
        if ($basePath !== '/' && $basePath !== '\\') {
            $url = substr($url, strlen($basePath));
        }

        $url = trim($url, '/');
        if (empty($url)) {
            $url = 'index';
        }

        if (array_key_exists($url, $this->routes)) {
            $controllerName = "App\\Controllers\\" . $this->routes[$url]['controller'];
            $action = $this->routes[$url]['action'];

            if (class_exists($controllerName)) {
                $controller = new $controllerName();
                if (method_exists($controller, $action)) {
                    return $controller->$action();
                }
            }
        }

        http_response_code(404);
        echo "404 Not Found";
    }
}
