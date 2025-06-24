<?php

function abort($http_status_code = 404)
{
    http_response_code($http_status_code);
    require("controllers/not-found.controller.php");
    die();
}
