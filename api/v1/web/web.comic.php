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
$call = "http://gateway.marvel.com:80/v1/public/comics?ts=" . $ts . "&apikey=" . $apikey . "&hash=" . $hash;

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
      $title = mysqli_real_escape_string($con, $data['data']['results'][$i]['title']);
      $issue = mysqli_real_escape_string($con, $data['data']['results'][$i]['issueNumber']);
      $description = mysqli_real_escape_string($con, $data['data']['results'][$i]['description']);
      $thumbnail = mysqli_real_escape_string($con, $data['data']['results'][$i]['thumbnail']['path']);

      $characters = [];
      for($k = 0; $k < count($data['data']['results'][$i]['characters']['items']); $k++) {
         $characters[] = mysqli_real_escape_string($con, $data['data']['results'][$i]['characters']['items'][$k]['name']);
      }
      $serialize_characters = serialize($characters);

      print "characters: " . print_r($serialize_characters, true) . "\n";   

      $check = mysqli_query($con, "SELECT * FROM comics WHERE `marvelid` = '$marvelid'");
      $checkrows = mysqli_num_rows($check);

      if($checkrows > 0) {
         print "Entry exists. " . $marvelid . "\n";
         
      } else {
         $sql = "INSERT INTO comics ( `marvelid`, `title`, `issue`, `description`, `thumbnail`, `characters`) VALUES ('$marvelid', '$title', '$issue', '$description', '$thumbnail', '$serialize_characters')";
         $result = mysqli_query($con, $sql) or die(mysqli_error($con));
         print "Entry added. " . $marvelid . "\n";
      }
   }
}
