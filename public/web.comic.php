<?php

?>
<html>
<title>Comics</title>
<body>
<h1>Comics</h1>
<?php

require_once(__DIR__ . '/../config.php');
require_once(__DIR__ . '/../src/includes/db_conn.php');

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

foreach($data['data']['results'] as $row) {
      $marvelid = mysqli_real_escape_string($con, $row['id']);
      $title = mysqli_real_escape_string($con, $row['title']);
      $issue = mysqli_real_escape_string($con, $row['issueNumber']);
      $description = mysqli_real_escape_string($con, $row['description']);
      $thumbnail = mysqli_real_escape_string($con, $row['thumbnail']['path']);
      $extension = mysqli_real_escape_string($con, $row['thumbnail']['extension']);

      foreach($row['characters']['items'] as $value) {
         $characters = mysqli_real_escape_string($con, $value['name']);
         print "characters: " . $characters . "\n";
      }

      $check = mysqli_query($con, "SELECT * FROM comics WHERE `marvelid` = '$marvelid'");
      $checkrows = mysqli_num_rows($check);

      if($checkrows > 0) {
         print "Entry exists. " . $marvelid . ' => ' . $title . "\n";
         
      } else {
         $sql = "INSERT INTO comics ( `marvelid`, `title`, `issue`, `description`, `thumbnail`, `characters`, `extension`) VALUES ('$marvelid', '$title', '$issue', '$description', '$thumbnail', '$characters', '$extension')";
         $result = mysqli_query($con, $sql) or die(mysqli_error($con));
         print "Entry added in database: " . $marvelid . " => " . $title . "\n";
      }
   }
