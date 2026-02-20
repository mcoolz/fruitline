<?php

namespace App\Core;

class Controller {
    protected function render($view, $data = []) {
        extract($data);

        // Define helpers
        $asset = function($path) {
            return '/assets/' . ltrim($path, '/');
        };

        ob_start();
        include __DIR__ . "/../Views/pages/$view.php";
        $content = ob_get_clean();

        include __DIR__ . "/../Views/layouts/main.php";
    }
}
