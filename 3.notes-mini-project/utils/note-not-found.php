<?php

function note_not_found()
{
    http_response_code(404);
    require("views/note-not-found.view.php");
    die();
}
