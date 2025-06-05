<?php

require "utils/topics.php";

$heading = "Create a MySQL Database";

$nav = [
    "previous" => [
        "show" => true,
        "title" => $topics[3]["title"],
        "url" => $topics[3]["url"]
    ],
    "next" => [
        "title" => $topics[5]["title"],
        "url" => $topics[5]["url"]
    ]
];

require "views/create-a-mysql-database.view.php";
