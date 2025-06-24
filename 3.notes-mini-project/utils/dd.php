<?php

function dd($message)
{
    echo "<pre>";
    var_dump($message);
    echo "</pre>";
    die();
}
