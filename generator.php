<?php

if (isset($_POST)) {
    $function_name = $_POST['function'];

    if ($function_name == 'generate') {
        generate();
    }
}

function generate() {
    //save and retrieve data from the database
    require 'db_connect.php';

    include('result.php');
}
