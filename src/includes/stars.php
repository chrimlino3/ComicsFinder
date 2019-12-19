<?php
require_once(__DIR__ . '/star_interface.php');
?>

<script>
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