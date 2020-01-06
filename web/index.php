<?php

require_once(__DIR__ . '/../src/includes/db_conn.php');
require_once(__DIR__ . '/../config.php');
require_once(__DIR__ . '/../CSS/style.php');
require_once(__DIR__ . '/../vendor/autoload.php');
require_once(__DIR__ . '/../vendor/awps/font-awesome-php/src/load.php');

$min_length = 3;
$input = !empty($_GET['c']) ? $_GET['c'] : '';
$input = mysqli_real_escape_string($con, $input);
/**
 * Gets the average number from star ratings
 */
// $sql = $con->query("SELECT marvelid FROM reviews");
// $numR = $sql->num_rows;
// $sql = $con->query("SELECT SUM(stars) AS total FROM reviews");
// $rData = $sql->fetch_array();
// $total = $rData['total'];

// $avg = $total / $numR;


if(isset($_POST['submit'])) {
    $title = !empty($_POST['title']) ? $_POST['title'] : '';
    $title = mysqli_real_escape_string($con, $title);
    $body = !empty($_POST['body']) ? $_POST['body'] : '';
    $body = mysqli_real_escape_string($con, $body);
    // $stars = !empty($_POST['stars']) ? $_POST['stars'] : '';
    // $stars = mysqli_real_escape_string($con, $stars);
    $marvelid = !empty($_POST['marvelid']) ? $_POST['marvelid'] : ''; 
    $insert = "INSERT INTO reviews (`title`, `body`, `marvelid`) VALUES ('$title', '$body', '$marvelid')";
    
    mysqli_query($con, $insert) or die('Error : ' . mysqli_error($con));
    print "Added: " . "title: " . $title . "body: " . $body . "marvelid: " . $marvelid . "\n";
    header("Location: http://localhost/ComicsFinder/web/index.php?c=" . $input . "&submit=Search");
}

if (isset($_POST['save'])) {
    print "post" . print_r($_POST) . "\n";
    $uID = $con->real_escape_string($_POST['uID']); //
    print "uID: " . print_r($uID) . "\n";
    $ratedIndex = $con->real_escape_string($_POST['ratedIndex']);
    $ratedIndex++;
    $marvelid = !empty($_POST['marvelid']) ? $_POST['marvelid'] : ''; 

    if (!$uID) {
        mysqli_query($con, "INSERT INTO stars (rateIndex, marvelid) VALUES ('$ratedIndex', '$marvelid')"); // if is a new user then insert the new rating in the db. marvelid needs to be accosiate with the ratedindex.
        $sql = mysqli_query($con, "SELECT id FROM stars ORDER BY id DESC LIMIT 1"); // associate the id with the rating
        $uData = $sql->fetch_assoc();
        $uID = $uData['id'];
    } else {
        mysqli_query($con, "UPDATE stars SET rateIndex='$ratedIndex' WHERE id='$uID'"); // else update the existing stars if the user is the same

        exit(json_encode(array('id' => $uID)));
    }
}

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
</head>
<body>
<div class="container h-100">
    <form method="GET">
    
        <div class="d-flex justify-content-center h-100">
            <h2>Browse your favorite superhero stories</h2>
            <h5>Hulk, X-Men, Wolverine, Wasp (Ultimate), Spider-Man</h5>
            <div class="searchbar">
                <input class="search_input" type="text" name="c" placeholder="3-D Man" />
                <input class="button" type="submit" name= "submit" value="Search"/>
            </div>
        </div>
    </form>
</div>
<?php

if(strlen($input) >= $min_length) {
    $input = htmlspecialchars($input);
    $raw_results = mysqli_query($con, "SELECT `title`, `issue`, `description`, `thumbnail`, `characters`, `thumbnail`, `extension`, `marvelid` 
                                            FROM comics Where (`characters` LIKE '%".$input."%')");


    if (mysqli_num_rows($raw_results) > 0){
        while($results = mysqli_fetch_array($raw_results)) {
            ?>
            <div class="background">
            <div class="results" ><?php 
            print "<p><h3>" .$results['title']. "</h3></p>".
                '<div class="image"><img height="300" width="300" src="' .  $results['thumbnail'] . '.' . $results['extension'] . '"/></div>';
                "<p class='col-md-8'>" .$results['description']. "</p>";           
                ?></div><?php
            
                include '../html/comments.php';
                
                print 
                '<form method="POST">' .
                        '<input class="form-control" type="text" name="title" size="26" placeholder="Title"/>' . "\n<br />" .
                        '<textarea class="form-control" type="text" name="body" placeholder="Comment"></textarea>' . "\n<br />" .
                        '<input class="button" type="submit" name="submit" value="Write a review"/>' .
                        '<input type="hidden" name="marvelid" value="' . $results['marvelid'] . '"/>' .
                        '<input class="button "type="reset" value="Cancel">' .
                    '</form>';
            
            
            $sql1 = mysqli_query($con, "SELECT * FROM reviews WHERE marvelid = '{$results['marvelid']}'");  
            print "<h3>". "Reviews" ."</h3>";
                while($reviews = mysqli_fetch_array($sql1)) {
                          ?><div class="comments"><?php 
                                print "<h4>" .$reviews['title']. "</h4>".  
                                    "<p>" .$reviews['body']. "</p>";
                                    // "<p>" . "Star rate:" .round($avg). "</p>";
                                   
                          ?></div></div><?php
                        } 
        
                    }   
    } else {
        print "No results";
    }   
} else {
    if (!empty($input)) {
        print "Minimum length is " . $min_length;
    }
}
?>
</body>
</html>
