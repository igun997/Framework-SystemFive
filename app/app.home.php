<?php
defined('ACCESS') OR exit('No direct script access allowed');
$var->layout->insert_views("home",(object) array("db"=>$var->db,"sistemApp"=>$var->sistemApp,"layout"=>$var->layout));