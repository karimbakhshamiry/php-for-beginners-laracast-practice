<?php

$session_user_id = 1;

$note_routes = require("routes.php");
$config = require('config.php');
$database_config = $config["database"];

require('utils/Response.php');
require('utils/functions.php');
require('utils/Database.php');


$database = new Database($database_config);

require('router.php');
