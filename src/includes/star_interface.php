<?php
require_once(__DIR__ . '/../../vendor/autoload.php');
require_once(__DIR__ . '/../../web/index.php');

?> 
    <div class="row">
    <div class="col-sm-12">
    <form id="ratingForm" method="POST">
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

    <input name="stars" type="hidden" class="form-control" id="stars" name="stars" value=<?$stars?>>
    <input type="hidden" name="marvelid" class="form-control" name="marvelid" value= <?$results['marvelid']?>>
    </div>
    <div class="form-group">
    <label for="usr"></label>
    <input type="text" class="form-control" id="title" name="title" placeholder="Title" required>
    </div>
    <div class="form-group">
    <label for="body"></label>
    <textarea class="form-control" rows="5" id="body" name="body" placeholder="Comment" required></textarea>
    </div>
    <div class="form-group">
    <button type="submit" class="btn btn-info" id="saveReview">Save Review</button> <button type="button" class="btn btn-info" id="cancelReview">Cancel</button>
    </div>
    </form>
    </div>
    </div> 

<?php
require_once(__DIR__ . '/star_interface.php');
?>
<script type="text/javascript" src="/../../vendor/autoload.php">
var $ = jQuery;
$('#ratingForm').on('submit', function(event){
    event.preventDefault();
    var formData = $(this).serialize();
    $.ajax({
        type: 'POST',
        url: 'web/index.php',
        data: formData,
        success: function(response){
            $('#ratingForm')[0].reset();
            window.setTimeout(function(){window.location.reload()}, 1000)
        }
    }); 
});

</script>
<?