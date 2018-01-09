<?php
$url  = 'http://www.example.com/a-large-file.zip';
$path = '/path/to/a-large-file.zip';
$fp = fopen($path, 'w');
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_FILE, $fp);
$data = curl_exec($ch);
curl_close($ch);
fclose($fp);


?>