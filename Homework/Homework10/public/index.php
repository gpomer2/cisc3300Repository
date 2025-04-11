<?php
// This is your main entry point. Everything passes through index.php.
// Start your session here if needed.
session_start();

// Define the root path for the application
define('ROOT', dirname(__DIR__));

// Include the App (router) core file
require_once ROOT . '/app/core/App.php';
require_once ROOT . '/app/core/Database.php';

// Create the application instance (router) and run
$app = new App();
