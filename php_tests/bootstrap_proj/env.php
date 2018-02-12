<?php
$ip = getenv('REMOTE_ADDR');
$name = getenv('COMPUTERNAME');
$user= getenv('USERNAME');
$path = getenv('PATH');
echo $user;
echo "\n".$path;
$localdata=getenv('USERPROFILE');
echo "local data".$localdata."\n";


?>
