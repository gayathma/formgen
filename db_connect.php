<?php

$mysql_host = "localhost";
$mysql_username = "root";
$mysql_password = "gaya";
$mysql_dbname = "formgen";


if (!mysql_connect($mysql_host, $mysql_username, $mysql_password) || !mysql_select_db($mysql_dbname)) {
    die(mysql_error());
} 
?>  