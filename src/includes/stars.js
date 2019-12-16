// function addRating(marvelid, stars) {
//     var xhttp = new XMLHttpRequest();

//     xhttp.onreadystatechange = function() {
//         if (this.readyState == 4 && this.status == 200) {

//             showData('index.php');

//             if (this.responseText != "success") {
//                 alert(this.responseText);
//             }
//         }
//     };

//     xhttp.open("POST", "index.php", true);
//     xhttp.setRequestHeader("Content-type",
//             "application/x-www-form-urlencoded");
//     var parameters = "index=" + stars + "&marvelid="
//             + marvelid;
//     xhttp.send(parameters);
// }
