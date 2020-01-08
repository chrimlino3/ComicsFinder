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


if(isset($_POST['submit'])) {
    print "post" . print_r($_POST) . "\n";
    $title = !empty($_POST['title']) ? $_POST['title'] : '';
    $title = mysqli_real_escape_string($con, $title);
    $body = !empty($_POST['body']) ? $_POST['body'] : '';
    $body = mysqli_real_escape_string($con, $body);
    // $ratedIndex = $con->real_escape_string($_POST['rateIndex']);
    // print "ratedIndex" . print_r($ratedIndex) . "\n";
    // $ratedIndex++;
    $ratedIndex = !empty($_POST['rateIndex']) ? $_POST['rateIndex'] : '';
    $ratedIndex = mysqli_real_escape_string($con, $ratedIndex);
    $ratedIndex++;

    $marvelid = !empty($_POST['marvelid']) ? $_POST['marvelid'] : ''; 
    $insert = "INSERT INTO reviews (`title`, `body`, `marvelid`, `rateIndex`) VALUES ('$title', '$body', '$marvelid', '$ratedIndex')";
    
    mysqli_query($con, $insert) or die('Error : ' . mysqli_error($con));
    print "Added: " . "title: " . $title . "body: " . $body . "marvelid: " . $marvelid . "\n";
    header("Location: http://localhost/ComicsFinder/web/index.php?c=" . $input . "&submit=Search");
}

$sql = $con->query("SELECT id FROM reviews");
$numR = $sql->num_rows;

$sql = $con->query("SELECT SUM(rateIndex) AS total FROM reviews");
$rData = $sql->fetch_array();
$total = $rData['total'];

$avg = $total / $numR;

print $avg;
// $sql = $con->query("SELECT id FROM reviews");
// $numR = $sql->num_rows;
// $sql = "SELECT SUM(rateIndex) AS total FROM reviews";
// $total = $sql['total'];
// print "total: " . print_r($total, true);

// $avg = $total / $numR;

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
                
                print 
                '<form method="POST">' .
                        '<input type="hidden" id="Clicked" name="rateIndex" value=""></input>' .
                        '<i class="fa fa-star fa-2x" data-index="0" id="0"></i>' .
                        '<i class="fa fa-star fa-2x" data-index="1" id="1"></i>' .
                        '<i class="fa fa-star fa-2x" data-index="2" id="2"></i>' .
                        '<i class="fa fa-star fa-2x" data-index="3" id="3"></i>' .
                        '<i class="fa fa-star fa-2x" data-index="4" id="4"></i>' .

                        '<input class="form-control" type="text" name="title" size="26" placeholder="Title"/>' . "\n<br />" .
                        '<textarea class="form-control" type="text" name="body" placeholder="Comment"></textarea>' . "\n<br />" .
                        '<input class="button" type="submit" name="submit" value="Write a review"/>' .
                        '<input type="hidden" name="marvelid" value="' . $results['marvelid'] . '"/>' .
                        '<input class="button "type="reset" value="Cancel">' .
                        print "Rating:" . $avg;
                    '</form>';
            
            
            $sql1 = mysqli_query($con, "SELECT * FROM reviews WHERE marvelid = '{$results['marvelid']}'");  
            print "<h3>". "Reviews" ."</h3>";
                while($reviews = mysqli_fetch_array($sql1)) {
                          ?><div class="comments"><?php 
                                print "<h4>" .$reviews['title']. "</h4>".  
                                    "<p>" .$reviews['body']. "</p>";
                                    "<p>". "Rating: " .$avg . "</p>";
                                   
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
<script
  src="http://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script>

  var ratedIndex = -1, uID = 0;
    $(document).ready(function (){  // every time the page load the stars are reseting. 
        resetStarColors();

        if(localStorage.getItem('fa-star') != null) {
            setStars(parseInt(localStorage.getItem('fa-star'))); // saves in localStorage the number of stars. When refreshes it remembers it.
            uID = localStorage.getItem('uID');
        }

            $('.fa-star').on('click', function () {
                ratedIndex = parseInt($(this).data('index'));
                var ButtonID = $(this).attr('id');
                 $('#Clicked').val(ButtonID);
        });

        $('.fa-star').mouseleave(function (){
		    resetStarColors();
		    if (ratedIndex != -1)
             setStars(ratedIndex);  // Changing the star rating. 
        });

	});

    function setStars(max) {
        for (var i=0; i <= ratedIndex; i++)
				$('.fa-star:eq('+i+')').css('color', 'red'); 
    }

	function resetStarColors() {
		$('.fa-star').css('color', 'black'); // return the colors back black when is refresh
	};

</script>

