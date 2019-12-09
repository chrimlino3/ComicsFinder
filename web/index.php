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
                                            FROM comics Where (`characters` LIKE '%".$input."%')");

    if (mysqli_num_rows($raw_results) > 0){
        while($results = mysqli_fetch_array($raw_results)) {
            '<div class="results">' .
            print "<p><h3>" .$results['title']. "</h3></p>".
                  "<p class='col-md-8'>" .$results['description']. "</p>".
                  '<div class="image"><img height="300" width="300" src="' .  $results['thumbnail'] . '.' . $results['extension'] . '"/></div>'.
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
'<div class="postreview ml-8">' .
    print '<form method="POST">' .
        '<input class="form-control" type="text" name="title" placeholder="Title"/>' . "\n<br />" .
        '<input class="form-control" type="text" name="body" placeholder="Comment"/>' . "\n<br />" .
        '<input class="button" type="submit" name="submit" value="Write a review"/>' .
        '<input type = "reset" value="Cancel">' .
        '</form>' .
        '</div>';

$select = "SELECT FROM reviews, comics WHERE `marvelid` = `comicid`");
$sql = mysqli_query($con, "UPDATE reviews SET `marvelid` = `comicid`");
if (mysqli_num_rows($sql) > 0) {
    
}

if(isset($_POST['submit'])) {
    $title = !empty($_POST['title']) ? $_POST['title'] : '';
    $title = mysqli_real_escape_string($con, $title);
    $body = !empty($_POST['body']) ? $_POST['body'] : '';
    $body = mysqli_real_escape_string($con, $body);

    $insert = mysqli_query($con, "INSERT INTO reviews (`title`, `body`) VALUES ('$title', '$body')");
    $result = mysqli_query($con, $insert);
    
} else {

    header("Location: web/index.php");
}

    $sql1 = mysqli_query($con, "SELECT title, body FROM reviews");
    echo "<meta http=equiv='refresh' content='0'";
    while($reviews = mysqli_fetch_array($sql1)) {
        print "<p><h3>" .$reviews['title']. "</h3></p>".
              "<p class='col-md-8'>" .$reviews['body']. "</p>";
    }