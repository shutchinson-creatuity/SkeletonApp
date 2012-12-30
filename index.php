<?php

# Error Reporting; Erase in live environment
ini_set('display_errors', 1);
error_reporting(-1);

# Load the library
require_once __DIR__ . '/vendor/autoload.php';

$app = new \Bones\Bones;
