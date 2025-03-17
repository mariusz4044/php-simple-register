<?php
$request_uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

switch ($request_uri) {
    case '/register':
        require "./controllers/register.php";
    break;

    default:
        echo "Rouinting doasn't exist!";
}