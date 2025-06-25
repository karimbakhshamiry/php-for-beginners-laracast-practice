<?php

$session_user_id = 1;

require('utils/Response.php');
require('utils/functions.php');
require('utils/Database.php');

$config = require('config.php');
$database_config = $config["database"];

$database = new Database($database_config);

require('router.php');
