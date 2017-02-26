<?php 
defined('ACCESS') OR exit('No direct script access allowed');
$db = new BukaDB;
$sistemApp = new sistemApp;
$layout = new layout;
$url = explode("/",$var);
if(@$url[1] == null)
{
    $layout->insert_app("home",(object) array("db"=>$db,"sistemApp"=>$sistemApp,"layout"=>$layout));
}else{
    //add pages
}
