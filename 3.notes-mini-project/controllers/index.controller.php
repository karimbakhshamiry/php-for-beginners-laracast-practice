<?php

$heading = "Welcome to Home Page";

$query = $database->query("SELECT id, title, done FROM notes WHERE user_id = :user_id ORDER BY id DESC;", ["user_id" => $session_user_id]);
$notes = $query->find();

require('views/index.view.php');
