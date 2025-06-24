<?php

$url = parse_url($_SERVER["REQUEST_URI"])["path"];

$routes = [
    "/2.dynamic-web-applications/admin-panel/" => "controllers/index.php",
    "/2.dynamic-web-applications/admin-panel/projects" => "controllers/projects.php",
    "/2.dynamic-web-applications/admin-panel/team" => "controllers/team.php",
    "/2.dynamic-web-applications/admin-panel/db" => "controllers/db.php",
];

// dd($url);
if(array_key_exists($url, $routes)) {
    require $routes[$url];
} else {
    abort();
}