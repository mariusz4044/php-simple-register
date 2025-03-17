<?php
header("Content-Type: application/json");

//init response
$response = [];

function createErrorResponse(string $message) {
    $response["status"] = "error";
    $response["message"] = $message;
    return json_encode($response);
}

$login = $_POST["login"] ?? null;
$email = $_POST["email"] ?? null;
$password = $_POST["password"] ?? null;
