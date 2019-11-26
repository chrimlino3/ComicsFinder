<?php

?>
<html>
<title>v2 Comics</title>
<body>
<h1>v2 Comics</h1>
<?php

require_once(__DIR__ . '../../../../config.php');

$ts = time();
$hash = md5($ts . $privatekey . $apikey);
$call = "http://gateway.marvel.com:80/v1/public/characters/183/comics?ts=" . $ts . "&apikey=" . $apikey . "&hash=" . $hash;

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
print '<textarea rows=20 col=100>';
print "result: " . print_r($result, true) . "\n";
curl_close($ch);