<?php

$mysql_host = "localhost";
$mysql_username = "root";
$mysql_password = "hesh";
$mysql_dbname = "FormGen";


$conn = new mysqli($mysql_host, $mysql_username, $mysql_password);

// Check connection
if ($conn->connect_error) {
    die('Failed : ' . $conn->connect_error);
} else {
    echo 'Connection Success';
}
?>  