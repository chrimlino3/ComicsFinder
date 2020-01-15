 <?php

require_once(__DIR__ . '/../src/includes/db_conn.php');
require_once(__DIR__ . '/../config.php');

$results = !empty($_GET['marvelid']) ? $_GET['marvelid'] : ''; 

$sql1 = mysqli_query($con, "SELECT * FROM reviews WHERE marvelid = '$results'");  

 print
 '<div class="card">'.
    "<h3>". "Reviews" ."</h3>";
    while($reviews = mysqli_fetch_array($sql1)) {
                    print "<h4>" .$reviews['title']. "</h4>".  
                        "<p>" .$reviews['body']. "</p>";
                        // "<p>". "Rating: " .$avg . "</p>";  
            } 
