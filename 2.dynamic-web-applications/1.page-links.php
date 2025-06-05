<?php
require "utils/topics.php";
$heading = "Page Links";
$nav = [
    "next" => [
        "title" => $topics[1]["title"],
        "url" => $topics[1]["url"]
    ]
];
require "views/page-link.view.php";