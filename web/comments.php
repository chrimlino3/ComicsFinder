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

        $('#Clicked').each(function (index, element) { // 0 object HTMLInputElement]
            alert(element);
        });                                                            // each comic needs to have a unique id in order to be clicked seperately.

        $('.fa-star').on('click', function () {
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
				$('.fa-star:eq('+i+')').css('color', 'red'); 
    }

	function resetStarColors() {
		$('.fa-star').css('color', 'black'); // return the colors back black when is refresh
	};

</script>
