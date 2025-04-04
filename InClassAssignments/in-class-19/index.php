<?php

require __DIR__ . '/vendor/autoload.php'; // Autoload for Dotenv and classes

use Dotenv\Dotenv;
use App\Database;

// 1. Load environment variables
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

// 2. Instantiate and connect to the database
$db = new Database(
    $_ENV['DB_HOST'],
    $_ENV['DB_USER'],
    $_ENV['DB_PASS'],
    $_ENV['DB_NAME']
);
$conn = $db->connect();

// 3. Basic routing logic: check the URI path
$requestUri = $_SERVER['REQUEST_URI'];

if ($requestUri === '/posts') {
    // 4. Fetch data from the posts table
    $stmt = $conn->query("SELECT * FROM posts");
    $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // 5. Return JSON
    header('Content-Type: application/json');
    echo json_encode($posts);
    exit; // Prevent further processing
}

// If we reach here, it means the route is something else
echo "Welcome to my PHP App!";
