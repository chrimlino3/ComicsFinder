<?php

DEFINE ('DB_USER', "Local");
DEFINE ('DB_PASSWORD', 'root');
DEFINE ('DB_HOST', '127.0.0.1');
DEFINE ('DB_NAME', 'marveldata');

$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or 
die ('Could not connect with database: ' . mysqli_connect_error());
    mysqli_select_db($con, DB_NAME);
?>