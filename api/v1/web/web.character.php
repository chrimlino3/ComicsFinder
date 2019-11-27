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
      $id = $data['data']['results'][$i]['id'];
      $name = $data['data']['results'][$i]['name'];
      $description = $data['data']['results'][$i]['description'];
      $thumbnail = $data['data']['results'][$i]['thumbnail']['path'];
   }
}
$result = mysqli_query($con, "INSERT INTO characters (id, name, description, thumbnail) VALUES ('$id', '$name', '$description', '$thumbnail')");

if($result) {
   print "New entry";
} else {
   if(mysqli_connect_errno() == 'not unique') {
      echo "Value already exists";
   }
}

// $comics = $data['data']['results'][$i]['comics']['items'][0];
      //    echo "New record created";
      // } else {
      //    echo "Error: " . $sql . "<br>" . mysqli_error($con);
      // }
// $description = $data['description'];
// $thumbnail = $data ['thumbnail']['extension'];
// $comics = $data['comics']['available'];

