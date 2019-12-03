<style>

.button {
    background-color: #FFFF00;
    display: inline;
    border: solid 1px;
    color: black;
    padding: 5px 5px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 15px;
    
}

input {
    padding: 5px 5px;
}

.searchbar {
    display: flex;
    justify-content: center;

}

.results, h3, p {
    display: flex;
    justify-content: center;
    margin-bottom: 0px;
}

.image {
    padding-left: 30%;
}


</style>

<?php

require_once(__DIR__ . '/../src/includes/db_conn.php');
require_once(__DIR__ . '/../config.php');

$input = !empty($_GET['c']) ? $_GET['c'] : '';

?>
<div class="container h-100">
    <form method="GET">
    <div class="d-flex justify-content-center h-100">
        <p>Broswe your favorite superhero stories<p>
        <div class="searchbar">
            <input class="search_input" type="text" name="c" placeholder="3-D Man" />
            <input class="button" type="submit" name= "submit" value="Search"/>
        </div>
    </div>
    </form>
</div>
<?php

$min_length = 3;

if(strlen($input) >= $min_length) {
    $input = htmlspecialchars($input);

 $input = mysqli_real_escape_string($con, $input);

 $raw_results = mysqli_query($con, "SELECT `title`, `issue`, `description`, `thumbnail`, `characters`, `thumbnail`, `extension` FROM comics Where (`characters` LIKE '%".$input."%')") or die(mysqli_error($con));

 if (mysqli_num_rows($raw_results) > 0){
    while($results = mysqli_fetch_array($raw_results)) {
        '<div class="results">' .
            print "<p><h3>" .$results['title']. "</h3></p>";
            print "<p>" .$results['description']. "</p>";
            print '<div class="image"><img height="300" width="300" src="' .  $results['thumbnail'] . '.' . $results['extension'] . '"/></div>';
            print "<p>" .$results['characters']. "</p>";
        '</div>';
    }
}
else {
    print "No results";
}

} else {
    print "Minimum length is " . $min_length;
}
