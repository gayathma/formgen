<?php

$mysql_host = "localhost";
$mysql_username = "root";
$mysql_password = "hmhrh";
$mysql_dbname = "Assignment2";

if (!mysql_connect($mysql_host, $mysql_username, $mysql_password) || !mysql_select_db($mysql_dbname)) {
    die(mysql_error());
} else {
    echo "success";
}
?>  