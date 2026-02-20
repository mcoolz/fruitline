<?php

spl_autoload_register(function ($class) {
    $prefix = 'App\\';
    $base_dir = __DIR__ . '/../app/';

    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    $relative_class = substr($class, $len);
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    if (file_exists($file)) {
        require $file;
    }
});

// Route static files for built-in PHP server
if (php_sapi_name() === 'cli-server') {
    $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    if (file_exists(__DIR__ . $path) && is_file(__DIR__ . $path)) {
        return false;
    }
}

use App\Core\Router;

$router = new Router();

// Routes
$router->add('index', 'PageController', 'index');
$router->add('about', 'PageController', 'about');
$router->add('products', 'PageController', 'products');
$router->add('gallery', 'PageController', 'gallery');
$router->add('markets', 'PageController', 'markets');
$router->add('process', 'PageController', 'process');
$router->add('contact', 'PageController', 'contact');

// Dispatch
$url = $_SERVER['REQUEST_URI'];
$url = parse_url($url, PHP_URL_PATH);
$router->dispatch($url);
