<?php
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $uri = str_replace('.php', '', $uri);
    $uri = explode('/', $uri);

    switch ($uri[2]) {
        case 'index':
            require __DIR__ . '/../controller/index.controller.php';
            break;
        case 'book':
            require __DIR__ . '/../controller/book.controller.php';
            break;
        default:
            http_response_code(404);
            require_once __DIR__ . '/../views/404.php';
    }
