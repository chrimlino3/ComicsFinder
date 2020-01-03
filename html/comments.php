<?php 
require_once(__DIR__ . '/../src/includes/db_conn.php');
/**
 * Using jquery and ajax for selecting stars and saving them in db. 
 */
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
</head>
<body>
<div>
	<i class="fa fa-star fa-2x" data-index="0"></i>
	<i class="fa fa-star fa-2x" data-index="1"></i>
	<i class="fa fa-star fa-2x" data-index="2"></i>
	<i class="fa fa-star fa-2x" data-index="3"></i>
	<i class="fa fa-star fa-2x" data-index="4"></i>
</div>

<script
  src="http://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script>

  var stars = -1, marvelid = 0;
    $(document).ready(function (){
        resetStarColors();

        if(localStorage.getItem('stars') != null)
            setStars(parseInt(localStorage.getItem('stars'))); //saves in localStorage the number of stars. When refreshes it remembers it.

        $('.fa-star').on('click', function () {
            stars = parseInt($(this).data('index'));
            localStorage.setItem('stars', stars);
            saveToTheDB();
        })

		$('.fa-star').mouseover(function () {
			resetStarColors();
			var currentIndex = parseInt($(this).data('index'));
			setStars(currentIndex);
		})

        $('.fa-star').mouseleave(function (){
		    resetStarColors();
		    if (stars != -1)
             setStars(stars);
        });

	});

    function saveToTheDB() {
        $.ajax({
            url: "web/index.php",
            method: "POST",
            dataType: "json",
            data: {
                save: 1,
                marvelid: marvelid,
                stars: stars
            }, success: function (r) {
                marvelid = r.marvelid
            }
        });
    }

    function setStars(max) {
        for (var i=0; i <= stars; i++)
				$('.fa-star:eq('+i+')').css('color', 'red'); 
    }

	function resetStarColors() {
		$('.fa-star').css('color', 'black'); // return the colors back black when is refresh
	};

</script>
</body>
</html>
