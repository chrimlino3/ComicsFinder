<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php

require_once(__DIR__ . '/../src/includes/db_conn.php');
require_once(__DIR__ . '/../config.php');
require_once(__DIR__ . '/../CSS/style.php');

$min_length = 3;
$input = !empty($_GET['c']) ? $_GET['c'] : '';
$input = mysqli_real_escape_string($con, $input);

?>
<div class="container h-100">
    <form method="GET">
    <div class="d-flex justify-content-center h-100">
        <h2>Broswe your favorite superhero stories</h2>
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

    $raw_results = mysqli_query($con, "SELECT `title`, `issue`, `description`, `thumbnail`, `characters`, `thumbnail`, `extension` 
                                        FROM comics Where (`characters` LIKE '%".$input."%')") or die(mysqli_error($con));

if (mysqli_num_rows($raw_results) > 0){
    while($results = mysqli_fetch_array($raw_results)) {
        '<div class="results">' .
        print "<p>__________________________________________</p>";
        print "<p><h3>" .$results['title']. "</h3></p>";
        print "<p class='col-md-8'>" .$results['description']. "</p>";
        print '<div class="image"><img height="300" width="300" src="' .  $results['thumbnail'] . '.' . $results['extension'] . '"/></div>';
        '</div>';
    }
} else {
    print "No results";
}
} else {
    if (!empty($input)) {
        print "Minimum length is " . $min_length;
    }
}

$title = !empty($_GET['title']) ? $_GET['title'] : '';
print "title: " . print_r($title, true);

$body = !empty($_GET['body']) ? $_GET['body'] : ''; 
print "body: " . print_r($body, true);

$title = mysqli_real_escape_string($con, $title);
$body = mysqli_real_escape_string($con, $body);

$reviews = mysqli_query($con, "INSERT INTO reviews (`title`,`body`) VALUES ('$title','$body')") or die(mysqli_error($con));
        print "reviews: " . print_r($reviews, true) . "\n";
        print "Entry added in database: " . $title . " => " . $body . "\n";

    '<div class="postreview ml-8">' .
        print '<form method="POST">' .
        print '<input class="form-control" type="text" name="title" placeholder="Best comic ever"/>' . "\n<br />" .
        print '<input class="form-control" type="text" name="body" placeholder="Best comic ever"/>' . "\n<br />" .
        print '<input class="button" type="submit" name="submit" value="Write a review"/>' .
        print '</form>' .
    '</div>';

while($reviews = mysqli_fetch_array($con, $reviews)) {
    print "<p>__________________________________________</p>";
    print "<p><h3>" .$reviews['title']. "</h3></p>)";
    print "<p class='col-md-8'>" .$reviews['body']. "</p>";

}

    
?>
</body>
</html>
