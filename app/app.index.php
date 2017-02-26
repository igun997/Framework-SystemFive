<?php
defined('ACCESS') OR exit('No direct script access allowed');
$db = new BukaDB;
$sistemApp = new sistemApp;
$layout = new layout;
$uri = trim ($_SERVER['REQUEST_URI'], '/');
$url_segments = explode('/', $uri);

$layout->insert_views("index",(object) array("db"=>$db,"sistemApp"=>$sistemApp,"layout"=>$layout,"title"=>"MVC","uri"=>$uri));
