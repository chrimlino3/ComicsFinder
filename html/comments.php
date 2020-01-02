<?php
require_once(__DIR__ . '/../vendor/autoload.php');
require_once(__DIR__ . '/../web/index.php');
require_once(__DIR__ . '/../src/includes/db_conn.php');
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
</div>  
</div>
</div>

</body>