<?php

require_once(__DIR__ . '../../../src/includes/db_conn.php');
require_once(__DIR__ . '../../../config.php');

$input = !empty($_GET['c']) ? $_GET['c'] : '';
// $url = 'http://gateway.marvel.com:80/v1/public/characters?' . $input;

?>
<form method="GET">
<p>Get superhero details<p>
    <input name="c" value="Agent Zero" type="text" size="25"/>
    <input type="submit" name= "submit" value="Search"/>
</form>
<?php

$min_length = 3;

if(strlen($input) >= $min_length) {
    $input = htmlspecialchars($input);

 $input = mysqli_real_escape_string($con, $input);

 $raw_results = mysqli_query($con, "SELECT `name`, `description`, `thumbnail`, `extension` FROM characters Where (`name` LIKE '%".$input."%')") or die(mysqli_error($con));

 if (mysqli_num_rows($raw_results) > 0){
    while($results = mysqli_fetch_array($raw_results)) {
        print "<p><h3>" .$results['name']. "</h3></p>";
        print "<p>" .$results['description']. "</p>";
        echo '<img height="300" width="300" src="' .  $results['thumbnail'] . '.' . $results['extension'] . '"/>';
    }
}
else {
    print "No results";
}

} else {
    print "Minimum length is " . $min_length;
}
