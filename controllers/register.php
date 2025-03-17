<?php
header("Content-Type: application/json");

function createResponse(string $message, string $status = 'success'): string  {
    $response = [];
    $response["status"] = $status;
    $response["message"] = $message;
    return json_encode($response);
}

$post_data = json_decode(file_get_contents("php://input"), true);

$login = $post_data["login"] ?? null;
$email = $post_data["email"] ?? null;
$password = $post_data["password"] ?? null;

if(!$login || !$email || !$password) {
    echo createResponse("Please fill all the required fields.", "error");
    exit();
}

if(!str_contains($email, "@")) {
    echo createResponse("Please provide valid email address.", "error");
    exit();
}

echo createResponse("Register successfully.");

