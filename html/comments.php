<?php
require_once(__DIR__ . '/../vendor/autoload.php');
?>

<!DOCTYPE html>
<head>
</head>
<body>



<div class="row">
<div class="col-sm-12">
<form method="POST" id="ratingForm">
<div class="form-group">
<h4>Comments</h4>
<button name="stars" type="button" class="btn btn-warning btn-sm rateButton" aria-label="Left Align">
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
<input class="form-control" type="text" name="title" size="26" placeholder="Title"/><br />
<textarea class="form-control" type="text" name="body" placeholder="Comment"></textarea><br />
<input class="button" type="submit" name="submit" value="Write a review"/>
<input type="hidden" name="marvelid" value="<?$results['marvelid']?>"/>
<input class="button "type="reset" value="Cancel"> .
</form>  
</div>  
</div>
</div>

</body>