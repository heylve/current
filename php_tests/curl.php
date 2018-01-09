<?php
$url  = 'http://files.data.gouv.fr/sirene/sirene_2017352_E_Q.zip';
$path = './a-large-file.zip';
$fp = fopen($path, 'w');
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_FILE, $fp);
$data = curl_exec($ch);
curl_close($ch);
fclose($fp);


?>