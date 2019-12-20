<?php
require_once(__DIR__ . '/../../vendor/autoload.php');
require_once(__DIR__ . '/../../web/index.php');
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