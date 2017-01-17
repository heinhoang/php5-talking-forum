<?php
//DB Params
define("DB_HOST", getenv('IP')); // or "localhost"
define("DB_USER", getenv('C9_USER')); // or "root"
define("DB_PASS", "");
define("DB_NAME", "php5_talkingspace");

define("SITE_TITLE", "Welcome To TalkingSpace!");

//Paths
define ('BASE_URI', 'http://'.$_SERVER['SERVER_NAME'].'/talkingspace/');