6. Create a PHP application that when a url of “/html” is accessed, some HTML code is returned and displayed. If “/json” is accessed, some JSON code is returned and displayed. Include screenshots for each page.

<?php
// Check if a route is passed via the query parameter
$route = isset($_GET['route']) ? $_GET['route'] : '';

// Route based on the 'route' parameter
if ($route === 'html') {
    header('Content-Type: text/html');
    echo '<html>
            <head>
                <title>HTML Page</title>
            </head>
            <body>
                <h1>Hello, this is HTML!</h1>
            </body>
          </html>';
} elseif ($route === 'json') {
    header('Content-Type: application/json');
    echo json_encode(['message' => 'Hello, this is JSON!']);
} else {
    // For any other request, return a 404 error
    header("HTTP/1.0 404 Not Found");
    echo '404 Not Found';
}
?>