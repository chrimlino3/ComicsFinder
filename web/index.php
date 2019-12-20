<?php

require_once(__DIR__ . '/../src/includes/db_conn.php');
require_once(__DIR__ . '/../config.php');
require_once(__DIR__ . '/../CSS/style.php');
require_once(__DIR__ . '/../vendor/autoload.php');
require_once(__DIR__ . '/../vendor/awps/font-awesome-php/src/load.php');
// require_once(__DIR__ . '/../src/includes/stars.js');

$icons = new Awps\FontAwesome();
$icons->getArray('fa-stars');

$min_length = 3;
$input = !empty($_GET['c']) ? $_GET['c'] : '';
$input = mysqli_real_escape_string($con, $input);

if(isset($_POST['submit'])) {
    print_r($_POST);
    $title = !empty($_POST['title']) ? $_POST['title'] : '';
    $title = mysqli_real_escape_string($con, $title);
    $body = !empty($_POST['body']) ? $_POST['body'] : '';
    $body = mysqli_real_escape_string($con, $body);
    $stars = !empty($_POST['stars']) ? $_POST['stars'] : '';
    $stars = mysqli_real_escape_string($con, $stars);

    $marvelid = !empty($_POST['marvelid']) ? $_POST['marvelid'] : ''; 
    $insert = mysqli_query($con, "INSERT INTO reviews (`title`, `body`, `marvelid`, `stars`) VALUES ('$title', '$body', '$marvelid', $stars)"); 
    print "Added: " . "title: " . $title . "body: " . $body . "marvelid: " . $marvelid . "\n";
    header("Location: http://localhost/ComicsFinder/web/index.php?c=" . $input . "&submit=Search");
}

?>
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

    $results = mysqli_query($con, "INSERT INTO reviews (`stars`) VALUES ('$stars')");

    if (mysqli_num_rows($raw_results) > 0){
        while($results = mysqli_fetch_array($raw_results)) {
            ?>
            <div class="background">
            <div class="results" ><?php 
            print "<p><h3>" .$results['title']. "</h3></p>".
                '<div class="image"><img height="300" width="300" src="' .  $results['thumbnail'] . '.' . $results['extension'] . '"/></div>';
                "<p class='col-md-8'>" .$results['description']. "</p>";           
                ?></div><?php
                
                print '<div class="row">' .
                    '<div class="col-sm-12">' .
                    '<form method="POST" id="ratingForm">' .
                    '<div class="form-group">' .
                    '<h4>Comments</h4>' .
                    '<button name="stars" type="button" class="btn btn-warning btn-sm rateButton" aria-label="Left Align">' .
                    '<span class="glyphicon glyphicon-star" aria-hidden="true"></span>' .
                    '</button>' .
                    '<button name="stars" type="button" class="btn btn-default btn-grey btn-sm rateButton" aria-label="Left Align">' .
                    '<span class="glyphicon glyphicon-star" aria-hidden="true"> </span>' .
                    '</button>' .
                    '<button name="stars" type="button" class="btn btn-default btn-grey btn-sm rateButton" aria-label="Left Align">' .
                    '<span class="glyphicon glyphicon-star" aria-hidden="true"></span>' .
                    '</button>' .
                    '<button name="stars" type="button" class="btn btn-default btn-grey btn-sm rateButton" aria-label="Left Align">' .
                    '<span class="glyphicon glyphicon-star" aria-hidden="true"></span>' .
                    '</button>' .
                    '<button name="stars" type="button" class="btn btn-default btn-grey btn-sm rateButton" aria-label="Left Align">' .
                    '<span class="glyphicon glyphicon-star" aria-hidden="true"></span>' .
                    '</button>';

                    '<input class="form-control" type="text" name="title" size="26" placeholder="Title"/>' . "\n<br />" .
                    '<textarea class="form-control" type="text" name="body" placeholder="Comment"></textarea>' . "\n<br />" .
                    '<input class="button" type="submit" name="submit" value="Write a review"/>' .
                    '<input type="hidden" name="marvelid" value="' . $results['marvelid'] . '"/>' .
                    '<input class="button "type="reset" value="Cancel">' .
                '</form>' . 
                '</div>' . 
                '</div'.
                '<div>';
            
            
            $sql1 = mysqli_query($con, "SELECT * FROM reviews WHERE marvelid = '{$results['marvelid']}'");  
                while($reviews = mysqli_fetch_array($sql1)) {
                    print "<h3>". "Reviews" ."</h3>";
                          ?><div class="comments"><?php 
                                print "<h4>" .$reviews['title']. "</h4>".  
                                    "<p>" .$reviews['body']. "</p>";
                                    "<p>" .$reviews['stars']. "</p>"
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
