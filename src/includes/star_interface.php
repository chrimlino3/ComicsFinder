<?php
require_once(__DIR__ . '/../../vendor/autoload.php');
require_once(__DIR__ . '/../../web/index.php');
?>

<script>




// var rating = {
//     highlight : function(selected){
  
//       var stars = document.getElementsByClassName("stars");
//       for (var i=0; i<stars.length; i++) {
//         if (i < selected) {
//           stars[i].classList.add("over");
//         } else {
//           stars[i].classList.remove("over");
//         }
//       }
//     },
  
//     save : function(rating){
  
//       // FETCH RATING DATA
//       var data = new FormData();
//       data.append('req', "save");
//       data.append('ratingForm', document.getElementById("ratingForm").value);
//       data.append('rating', rating);
  
//       // AJAX
//       var xhr = new XMLHttpRequest();
//       xhr.open('POST', "comments.php", true);
//       xhr.onload = function(){
//         if (this.response=="OK") {
//           alert("Rating Saved.");
//         } else {
//           alert("Error saving rating.");
//         }
//       };
//       xhr.send(data);
//     }
//   };
  </script>