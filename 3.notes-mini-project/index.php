<?php

require('utils/dd.php');
require('utils/abort.php');
require('utils/Database.php');

$config = require('config.php');
$database_config = $config["database"];

$database = new Database($database_config);

require('router.php');
