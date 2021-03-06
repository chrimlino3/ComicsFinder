<?php 
/**
 * Using jquery and ajax for selecting stars and saving them in db. 
 * TODO: Make uID work: it results to 0.
 * TODO: Insert marvelid in the stars table and accosiate the rating with each comic. 
 */
require_once(__DIR__ . '/../src/includes/db_conn.php');

// $raw_results = mysqli_query($con, "SELECT `title`, `issue`, `description`, `thumbnail`, `characters`, `thumbnail`, `extension`, `marvelid` 
//                                             FROM comics Where (`characters` LIKE '%".$input."%')");
//                                             $results = mysqli_fetch_array($raw_results);

if (isset($_POST['save'])) {
    print "post" . print_r($_POST) . "\n";
    $uID = $con->real_escape_string($_POST['uID']); //
    print "uID: " . print_r($uID);
    $ratedIndex = $con->real_escape_string($_POST['ratedIndex']);
    $ratedIndex++;
    // $marvelid = !empty($_POST['marvelid']) ? $_POST['marvelid'] : ''; 

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
<div>
	<i class="fa fa-star fa-2x" data-index="0"></i>
	<i class="fa fa-star fa-2x" data-index="1"></i>
	<i class="fa fa-star fa-2x" data-index="2"></i>
	<i class="fa fa-star fa-2x" data-index="3"></i>
    <i class="fa fa-star fa-2x" data-index="4"></i>
    <input type="hidden" name="marvelid" value="' . <?$results['marvelid']?> . '"/>
</div>

<script
  src="http://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script>

  var ratedIndex = -1, uID = 0;
    $(document).ready(function (){
        resetStarColors();

        if(localStorage.getItem('ratedIndex') != null) {
            setStars(parseInt(localStorage.getItem('ratedIndex'))); //saves in localStorage the number of stars. When refreshes it remembers it.
            iID = localStorage.getItem('uID');
        }
        $('.fa-star').on('click', function () {
            ratedIndex = parseInt($(this).data('index'));
            localStorage.setItem('ratedIndex', ratedIndex);
            saveToTheDB();
        })

		$('.fa-star').mouseover(function () {
			resetStarColors();
			var currentIndex = parseInt($(this).data('index'));
			setStars(currentIndex);
		})

        $('.fa-star').mouseleave(function (){
		    resetStarColors();
		    if (ratedIndex != -1)
             setStars(ratedIndex);
        });

	});

    function saveToTheDB() {
        $.ajax({
            url: "comments.php",
            method: "POST",
            dataType: "json",
            data: {
                save: 1,
                uID: uID,
                ratedIndex: ratedIndex
            }, success: function (r) {
                uID = r.id
                localStorage.setItem('uID', uID);
            }
        });
    }

    function setStars(max) {
        for (var i=0; i <= ratedIndex; i++)
				$('.fa-star:eq('+i+')').css('color', 'red'); 
    }

	function resetStarColors() {
		$('.fa-star').css('color', 'black'); // return the colors back black when is refresh
	};

</script>
</body>
</html>
