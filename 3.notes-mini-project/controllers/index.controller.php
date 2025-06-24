<?php

$heading = "Welcome to Home Page";

$query = $database->query("select id, value from notes order by id asc;");
$notes = $query->fetchAll();

require('views/index.view.php');