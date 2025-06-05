<?php

require "utils/topics.php";

$heading = "Environment and Configuration Flexibility";

$nav = [
    "previous" => [
        "show" => true,
        "title" => $topics[7]["title"],
        "url" => $topics[7]["url"]
    ],
    "next" => [
        "title" => "Notes - Mini Project",
        "url" => "/3.notes-mini-project/index.php"
    ]
];

require "views/sql-injection-vulnerabilities-explained.view.php";
