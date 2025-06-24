<?php

$routes = [
    "/3.notes-mini-project" => "controllers/index.controller.php",
    "/3.notes-mini-project/note" => "controllers/note.controller.php"
];

// dd(parse_url($_SERVER["REQUEST_URI"]));
$path = rtrim(parse_url($_SERVER["REQUEST_URI"])["path"],"/");


if(array_key_exists($path, $routes)) {
    require($routes[$path]);
} else {
    abort();
}

