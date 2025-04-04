<?php
// Turn on error reporting (helpful during development)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Start a session if needed (for login, etc.)
// session_start();

// Include the core files (the autoloader approach is better, but for simplicity we’ll manually include them).
require_once 'app/core/Database.php';
require_once 'app/core/Controller.php';

// Retrieve the URL parameter
$url = isset($_GET['url']) ? $_GET['url'] : '';

// Break the URL by "/" into segments
$urlParts = explode('/', $url);

// The first part of the URL is the controller name; fallback is 'ProductController'
$controllerName = !empty($urlParts[0]) ? ucfirst($urlParts[0]) . 'Controller' : 'ProductController';

// The second part is the method name; fallback is 'index'
$methodName = isset($urlParts[1]) && !empty($urlParts[1]) ? $urlParts[1] : 'index';

// Remaining parts (if any) would be arguments
$args = array_slice($urlParts, 2);

// Full path to the controller file
$controllerFile = 'app/controllers/' . $controllerName . '.php';

if (file_exists($controllerFile)) {
    // Require the controller
    require_once $controllerFile;
    // Instantiate the controller
    $controller = new $controllerName();

    // Check if the method exists
    if (method_exists($controller, $methodName)) {
        // Call the method with arguments
        call_user_func_array([$controller, $methodName], $args);
    } else {
        echo "Method '$methodName' not found in controller '$controllerName'.";
    }
} else {
    echo "Controller '$controllerName' not found.";
}
