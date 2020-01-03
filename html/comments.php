<!DOCTYPE html>
<html>
<head>
	<title></title>
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
  src="http://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
<script>
  var ratedIndex = -1;

		$(document).ready(function (){
			resetStarColors();

			$('.fa-star').on('click', function() {
				ratedIndex = parseInt($(this).data('index'));
			})

		$('fa-star').mouseover(function () {
			resetStarColors();

			var currentIndex = parseInt($(this).data('index'));

			for (var i=0; i <= currentIndex; i++)
				$('.fa-star:eq('+i+')').css('color', 'green');
		})
        $('.fa-star').mouseleave(function (){
		    resetStarColors();

		    if (ratedIndex != -1)
			for (var i=0; i <= ratedIndex; i++)
				$('.fa-star:eq('+i+')').css('color', 'red');
		
});

	});

	function resetStarColors() {
		$('.fa-star').css('color', 'black');
	};

</script>

</body>
</html>



<!--
// require_once(__DIR__ . '/../vendor/autoload.php');
// require_once(__DIR__ . '/../src/includes/db_conn.php');
// require_once(__DIR__ . '/../src/includes/star_interface.php');
// ?>

<!DOCTYPE html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

</head>
<body>
<div class="row">
<div class="col-sm-12">
<form method="POST" id="ratingForm">
<div class="form-group">
<h4>Comments</h4>
<button name="stars" type="button" class="btn btn-default btn-sm rateButton" aria-label="Left Align">
<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
</button>
<button name="stars" type="button" class="btn btn-default btn-grey btn-sm rateButton" aria-label="Left Align">
<span class="glyphicon glyphicon-star" aria-hidden="true"> </span>
</button>
<button name="stars" type="button" class="btn btn-default btn-grey btn-sm rateButton" aria-label="Left Align">
<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
</button>
<button name="stars" type="button" class="btn btn-default btn-grey btn-sm rateButton" aria-label="Left Align">
<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
</button>
<button name="stars" type="button" class="btn btn-default btn-grey btn-sm rateButton" aria-label="Left Align">
<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
</button>
</div>  
</div>
</div>

</body> -->