<?php

?>
<html>
<title>Characters</title>
<body>
<h1>Characters</h1>
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
$results = json_decode($result, true);
print "data: " . print_r($results);
curl_close($ch);

foreach($results['data']['results'] as $row) {
   print "row: " . print_r($row, true) . "\n";
         $marvelid = mysqli_real_escape_string($con, $row['id']);
         $name = mysqli_real_escape_string($con, $row['name']);
         $description = mysqli_real_escape_string($con, $row['description']);
         $thumbnail = mysqli_real_escape_string($con, $row['thumbnail']['path']);
         $extension = mysqli_real_escape_string($con, $row['thumbnail']['extension']);

         $check = mysqli_query($con, "SELECT * FROM characters WHERE `marvelid` = '$marvelid'");

         $checkrows=mysqli_num_rows($check);

         if($checkrows > 0) {
            print "Entry exists. " . $marvelid . ' => ' . $name . "\n";
            
         } else {
            $sql = "INSERT INTO characters (`marvelid`, `name`, `description`, `thumbnail`, `extension`) VALUES ('$marvelid', '$name', '$description', '$thumbnail', '$extension')";
            $result = mysqli_query($con, $sql) or die(mysqli_error($con));
            print "Entry added in database: " . $marvelid . ' => ' . $name . "\n";
      }
   }