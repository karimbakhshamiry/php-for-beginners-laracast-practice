<?php

$config = require("config.php");
$db_config = $config["database"];

$database = new Database($db_config);
$id = $_GET["id"];

dd(
    $database
    ->query(
        "select * from activities where id = :id",
        // DONT EVER ADD USERS INPUT DIRECTLY INSIDE YOUR SQL QUERY, ALWAYS ADD IT AS PARAMETER, SO YOU CAN AVOID SQL INJECTION
        ["id" => $id]
    )
    ->fetch()
);
