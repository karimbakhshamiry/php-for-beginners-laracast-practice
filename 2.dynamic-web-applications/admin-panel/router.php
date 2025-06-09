<?php

$url = parse_url($_SERVER["REQUEST_URI"])["path"];

$routes = [
    "/" => "controllers/index.php",
    "/projects" => "controllers/projects.php",
    "/team" => "controllers/team.php",
];

// dd($url);
if(array_key_exists($url, $routes)) {
    require $routes[$url];
} else {
    abort();
}