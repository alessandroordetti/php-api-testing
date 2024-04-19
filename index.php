<?php

require "vendor/autoload.php";

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$parts = explode("/", $path);

$resources = $parts[2];

$id = $parts[3] ?? null;

echo $resources. ", " . $id;

echo $_SERVER['REQUEST_METHOD'];

if($resources != "tasks"){
    http_response_code(404);
    exit;
}