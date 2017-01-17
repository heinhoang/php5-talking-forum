<?php
//Start Session
session_start();

//Include Configuration
require_once('config/config.php');

//Helper Function Files
require_once('helpers/system_helper.php');
require_once('helpers/format_helper.php');
require_once('helpers/db_helper.php');

//Autoload Classes in 'libraries/'
// Because the __autoload function is a magic function, it will not be called directly by you, the programmer. Instead, it is called behind the scenes by PHP
// you just need to do like this: `new YourClass;` and it will be trigger
function __autoload($class_name){
	require_once('libraries/'.$class_name . '.php');
}