<?php //pref.php
include "passwords.php";
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = $dbpw;
$dbname = 'forms';

mysql_connect($dbhost, $dbuser, $dbpass);
mysql_select_db($dbname);


?>