<?php

// TODO: Rate each comic individually. Not it's just get's the first one and applies it in all. 

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
    $ratedIndex = !empty($_POST['rateIndex']) ? $_POST['rateIndex'] : '';
    $ratedIndex = mysqli_real_escape_string($con, $ratedIndex);
    $ratedIndex++;
    $marvelid = !empty($_POST['marvelid']) ? $_POST['marvelid'] : ''; 
    $insert = "INSERT INTO reviews (`title`, `body`, `marvelid`, `rateIndex`) VALUES ('$title', '$body', '$marvelid', '$ratedIndex')";
    mysqli_query($con, $insert) or die('Error : ' . mysqli_error($con));
    print "Added: " . "title: " . $title . "body: " . $body . "marvelid: " . $marvelid . "\n";
    header("Location: http://localhost/ComicsFinder/web/index.php?c=" . $input . "&submit=Search");
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
    <link href="https://fonts.googleapis.com/css?family=Alata&display=swap" rel="stylesheet"> 
</head>
<body>
<div class="container">
    <form method="GET">
    
        <div class="d-flex justify-content-center h-100">
            <div class="title"><h2>Browse your favorite superhero stories</h2></div>
            <div class="subtitle"><h5>Hulk, X-Men, Wolverine, Wasp (Ultimate), Spider-Man</h5></div>
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

    $numberOfColumns = 3;
    $bootstrapColWidth = 12 / $numberOfColumns;
    if (mysqli_num_rows($raw_results) > 0){
        echo '<div class="row">';
        while($results = mysqli_fetch_array($raw_results)) {
            print 
            '<div class="col-md-' .$bootstrapColWidth.'" >' .
            '<div class="subtitle"><p><h3>' .$results['title']. '</h3></p></div>' .
            '<div class="image"><img height="300" width="300" src="' .  $results['thumbnail'] . '.' . $results['extension'] . '"/></div>';
            "<p class='col-md-8'>" . $results['description']. "</p>";
            
            $sql = $con->query("SELECT id FROM reviews");
            $numR = $sql->num_rows;
            
            $sql = $con->query("SELECT SUM(rateIndex) AS total FROM reviews");
            $rData = $sql->fetch_array();
            $total = $rData['total'];
            if ($total != 0) {
                $avg = $total / $numR;
            }
            print
                    '<form method="POST">' .
                        
                        '<div class="comments"><input class="form-control" type="text" name="title" size="26" placeholder="Title" style="width: 290px"/>' . "\n<br />" .
                        '<textarea class="form-control" type="text" name="body" placeholder="Comment" style="width: 290px"></textarea>' . "\n<br /></div>" .
                        '<div class="stars"><i class="fa fa-star fa-2x" data-index="0" id="0"></i>' .
                        '<i class="fa fa-star fa-2x" data-index="1" id="1"></i>' .
                        '<i class="fa fa-star fa-2x" data-index="2" id="2"></i>' .
                        '<i class="fa fa-star fa-2x" data-index="3" id="3"></i>' .
                        '<i class="fa fa-star fa-2x" data-index="4" id="4"></i></div>' .

                        '<input class="btn btn-danger" type="submit" name="submit" value="Post your review"/>' .
                        '<input type="hidden" name="marvelid" value="' . $results['marvelid'] . '"/>' .
                        '<input class="btn btn-light "type="reset" value="Clear">' .
                        '<input type="hidden" id="Clicked" value=""></input>' .
                        // "Rating:" . round($avg) .
                    '</form>';
            


            print '<a href="reviews.php?marvelid=' . $results['marvelid'] . '">Go to the reviews</a>';
                        echo '</div>';
                    }  
                    echo '</div>';
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

        $('.fa-star').on('click', function (){
            ratedIndex = parseInt($(this).data('index'));
            var stars = $(this).attr('id');
            $('#Clicked').val(stars);
        });


        $('.fa-star').mouseleave(function (){
		    resetStarColors();
		    if (ratedIndex != -1)
            setStars(ratedIndex);  // Changing the star rating. 
        });
    });

    function setStars(max) {
        for (var i=0; i <= ratedIndex; i++)
			$('.fa-star:eq('+i+')').css('color', '#666600'); 
    }

	function resetStarColors() {
		$('.fa-star').css('color', '#CCCC00'); // return the colors back black when is refresh
	};

</script>

