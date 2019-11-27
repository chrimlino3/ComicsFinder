<?php

?>
<html>
<title>v2 Comics</title>
<body>
<h1>v2 Comics</h1>
<?php

require_once(__DIR__ . '../../../../config.php');
require_once(__DIR__ . '../../../../src/includes/db_conn.php');

$ts = time();
$hash = md5($ts . $privatekey . $apikey);
$call = "http://gateway.marvel.com:80/v1/public/characters?ts=" . $ts . "&apikey=" . $apikey . "&hash=" . $hash;

print "Get: " . $call;
$ch = curl_init($call);

if (!is_resource($ch) || get_resource_type($ch) !== 'curl') {
    print "Curl_init failed";
 
    return [];
 }

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
   'Content-Type: application/json',
));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $call);
curl_setopt($ch, CURLOPT_DNS_CACHE_TIMEOUT, 2);

$result = curl_exec($ch);
if (!$result) {
   $curlError = curl_error($ch);
   print "curl_exec failed: $curlError";

   return [];
}
print "<pre>result: " . htmlentities(print_r($result, true)) . "\n";
$data = json_decode($result, true);
print "data: " . print_r($data);
curl_close($ch);

foreach($data as $row) {
   for ($i = 0; $i < count($data); $i++) {
      $marvelid = $data['data']['results'][$i]['id'];
      $name = $data['data']['results'][$i]['name'];
      $description = $data['data']['results'][$i]['description'];
      $thumbnail = $data['data']['results'][$i]['thumbnail']['path'];



      $sql = "INSERT INTO characters (marvelid, name, description, thumbnail) 
              SELECT ('$marvelid', '$name', '$description', '$thumbnail') FROM DUAL
              WHERE NOT EXISTS (SELECT * FROM characters WHERE marvelid = $marvelid AND name = $name AND description = $description AND thumbnail = $thumbnail)";

      if ($con->query($sql) === TRUE) {
         echo "New record created successfully";
      } else {
         echo "Error: " . $sql . "<br>" . $con->error;
      }
   }
}


// $result = mysqli_query($con, $sql);
// print "result: " . $result;

// if($result) {
//    print "New entry";
// } else {
//    if(mysqli_connect_errno() == 'not unique') {
//       echo "Value already exists";
//    }
// }


