<?php

require "utils/topics.php";

$heading = "Extract a PHP Database Class";

$nav = [
    "previous" => [
        "show" => true,
        "title" => $topics[5]["title"],
        "url" => $topics[5]["url"]
    ],
    "next" => [
        "title" => $topics[7]["title"],
        "url" => $topics[7]["url"]
    ]
];

require "views/extract-a-php-database-class.view.php";
