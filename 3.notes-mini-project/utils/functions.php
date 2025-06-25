<?php

// dump and die
function dd($message)
{
    echo "<pre>";
    var_dump($message);
    echo "</pre>";
    die();
}



// abort and redirect user to speicific page according http status code

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


function authorize($data, $key, $user_id, $http_status_code = Response::UNAUTHORIZED, $title = null, $note = null)
{
    if ($data[$key] !== $user_id) {
        abort($http_status_code, $title, $note);
    }
}
