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
      $marvelid = mysqli_real_escape_string($con, $data['data']['results'][$i]['id']);
      $name = mysqli_real_escape_string($con, $data['data']['results'][$i]['name']);
      $description = mysqli_real_escape_string($con, $data['data']['results'][$i]['description']);
      $thumbnail = mysqli_real_escape_string($con, $data['data']['results'][$i]['thumbnail']['path']);

      $check = mysqli_query($con, "SELECT * FROM characters WHERE `marvelid` = '$marvelid' and `name` = '$name' and `description` = '$description' and `thumbnail` = '$thumbnail'");
      $checkrows=mysqli_num_rows($check);

      if($checkrows>0) {
         print "Entry exists. ";
      } else {
         $sql = "INSERT IGNORE INTO characters (`marvelid`, `name`, `description`, `thumbnail`) VALUES ('$marvelid', '$name', '$description', '$thumbnail')";

         $result = mysqli_query($con, $sql) or die('Error querying database.');
      }
      print "Entry added. ";
   }
}
