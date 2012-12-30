<?php

require_once dirname(__DIR__) . '/lib/Bones/Loader/AutoLoader.php';

$autoloader = new \Bones\Loader\AutoLoader('Bones', dirname(__DIR__) . '/lib/');
$autoloader->register();
