<?php
//Our MySQL user account.
define('MYSQL_USER', 'egozlylo_zolashop'); 
//Our MySQL password.
define('MYSQL_PASSWORD', 'egozola1422'); 
//The server that MySQL is located on.
define('MYSQL_HOST', 'localhost');
 
//The name of our database.
define('MYSQL_DATABASE', 'egozlylo_zolajs');

$mysqli = mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DATABASE); 
mysqli_set_charset($mysqli,"utf8");
?>