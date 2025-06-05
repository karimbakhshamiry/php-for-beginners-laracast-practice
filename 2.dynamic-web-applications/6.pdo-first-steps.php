<?php

require "utils/topics.php";

$heading = "PDO First Steps";

$nav = [
    "previous" => [
        "show" => true,
        "title" => $topics[4]["title"],
        "url" => $topics[4]["url"]
    ],
    "next" => [
        "title" => $topics[6]["title"],
        "url" => $topics[6]["url"]
    ]
];

require "views/pdo-first-steps.view.php";
