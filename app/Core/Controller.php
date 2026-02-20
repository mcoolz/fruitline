<?php

namespace App\Core;

class Controller {
    protected function render($view, $data = []) {
        extract($data);

        $basePath = dirname($_SERVER['SCRIPT_NAME']);
        $baseUrl = ($basePath === '/' || $basePath === '\\') ? '' : $basePath;

        // Define helpers
        $asset = function($path) use ($baseUrl) {
            return $baseUrl . '/assets/' . ltrim($path, '/');
        };

        $url = function($path) use ($baseUrl) {
            return $baseUrl . '/' . ltrim($path, '/');
        };

        ob_start();
        include __DIR__ . "/../Views/pages/$view.php";
        $content = ob_get_clean();

        include __DIR__ . "/../Views/layouts/main.php";
    }
}
