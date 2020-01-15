 <?php

require_once(__DIR__ . '/../src/includes/db_conn.php');
require_once(__DIR__ . '/../config.php');
require_once(__DIR__ . '/../CSS/style.php');

$results = !empty($_GET['marvelid']) ? $_GET['marvelid'] : ''; 

$sql1 = mysqli_query($con, "SELECT * FROM reviews WHERE marvelid = '$results'");  


?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Alata&display=swap" rel="stylesheet"> 
</head>
<body>
<?php
 print '<a href="index.php">Go back</a>';
 print
 "<h3>". "Reviews" ."</h3>".
 '<div class="card">';
    while($reviews = mysqli_fetch_array($sql1)) {
                    print "<h4>" .$reviews['title']. "</h4>".  
                        "<p>" .$reviews['body']. "</p>";
            } 
            echo '</div>';
?>
</body>
</html>