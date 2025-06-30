<?php
$path = rtrim(parse_url($_SERVER["REQUEST_URI"])["path"],"/");


if (array_key_exists($path, $note_routes)) {
    require($note_routes[$path]);
} else {
    abort();
}

