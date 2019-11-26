<?php

require_once(__DIR__ . '../../../../src/includes/db_conn.php');

$characters = "

CREATE TABLE IF NOT EXISTS characters (
id INT(11) NOT NULL AUTO INCREMENT, 
name VARCHAR(225) NOT NULL
)";

$query = mysqli_query($con, $characters);
if($query === TRUE) {
    echo "User table created";
} else {
    echo "User table not created";
}