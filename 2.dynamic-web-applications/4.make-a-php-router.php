<?php

require "utils/topics.php";

$heading = "Create a PHP Router";

$nav = [
    "previous" => [
        "show" => true,
        "title" => $topics[2]["title"],
        "url" => $topics[2]["url"]
    ],
    "next" => [
        "title" => $topics[4]["title"],
        "url" => $topics[4]["url"]
    ]
];

require "views/make-a-php-router.view.php";
