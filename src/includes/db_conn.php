<?php

require_once(__DIR__ . '/../../config.php');

$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or 
die ('Could not connect with database: ' . mysqli_connect_error());
    mysqli_select_db($con, DB_NAME);
?>