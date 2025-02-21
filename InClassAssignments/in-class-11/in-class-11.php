<?php
header('Content-Type: application/json');

// Simulated data
$data = [
    "status" => "success",
    "message" => "Data fetched successfully!",
    "users" => [
        ["id" => 1, "name" => "Alice"],
        ["id" => 2, "name" => "Bob"],
        ["id" => 3, "name" => "Charlie"]
    ]
];

echo json_encode($data);
?>
