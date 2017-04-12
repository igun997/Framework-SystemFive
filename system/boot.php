<?php

// Definisikan konstanta yg mengarah ke root folder
define('ROOT', str_replace('system', '', __DIR__));
define('ACCESS',true);
defined('ACCESS') OR exit('No direct script access allowed');
require ROOT . 'system/core.class.php';
$db = new BukaDB;
$sistemApp = new sistemApp;
$layout = new layout;
//Default Route
$layout->insert_app("index");

