<?php

require_once __DIR__ . '/Controllers/postController.php';

use Controllers\postController;


$requestUri = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

$requestUri = parse_url($requestUri, PHP_URL_PATH);

if ($requestMethod === 'GET' && $requestUri === '/posts') {
    $controller = new postController();
    $controller->index();
} else {
    header("HTTP/1.0 404 Not Found");
    echo json_encode(['error' => 'Route not found', 'uri' => $requestUri]);
}
