<?php

function abort($code = 404, $title = null, $subtitle = null)
{
    ["title" => $default_title, "subtitle" => $default_subtitle] = Response::$messages[$code];

    // the following variable is used in the view
    $abort_title = $title ?? $default_title;
    $abort_subtitle = $subtitle ?? $default_subtitle;
    http_response_code($code);
    require("views/$code.view.php");
    die();
}
