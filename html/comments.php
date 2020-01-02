<?php
require_once(__DIR__ . '/../vendor/autoload.php');
require_once(__DIR__ . '/../src/includes/db_conn.php');
require_once(__DIR__ . '/../src/includes/star_interface.php');
?>

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

</body>