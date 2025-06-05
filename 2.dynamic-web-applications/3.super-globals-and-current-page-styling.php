<?php

require "utils/topics.php";

$heading = "Super Globals and Current Page Styling";

$nav = [
    "previous" => [
        "show" => true,
        "title" => $topics[1]["title"],
        "url" => $topics[1]["url"]
    ],
    "next" => [
        "title" => $topics[3]["title"],
        "url" => $topics[3]["url"]
    ]
];

require "views/super-globals-and-current-page-styling.view.php";
