<?php

$heading = "Welcome to Home Page";

$query = $database->query("SELECT id, value FROM notes WHERE user_id = :user_id ORDER BY id ASC;", ["user_id" => $session_user_id]);
$notes = $query->fetchAll();

require('views/index.view.php');
