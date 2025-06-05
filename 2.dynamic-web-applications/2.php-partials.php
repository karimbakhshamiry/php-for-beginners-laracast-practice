<?php
require "utils/topics.php";

$heading = "PHP Partials";
$nav = [
    "previous" => [
        "show" => true,
        "title" => $topics[0]["title"],
        "url" => $topics[0]["url"]
    ],
    "next" => [
        "title" => $topics[2]["title"],
        "url" => $topics[2]["url"]
    ]
];


require "views/php-partials.view.php";