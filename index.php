<?php

// Require the app and run it
var_dump(__DIR__ . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'app.php');
var_dump($_SERVER);

require_once __DIR__ . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'app.php';
$app->run();