<?php

require "utils/topics.php";

$heading = "Environment and Configuration Flexibility";

$nav = [
    "previous" => [
        "show" => true,
        "title" => $topics[6]["title"],
        "url" => $topics[6]["url"]
    ],
    "next" => [
        "title" => $topics[8]["title"],
        "url" => $topics[8]["url"]
    ]
];

require "views/environment-and-configuration-flexibility.view.php";
