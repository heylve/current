<?php
include("LIB_parse.php");
$string="the quick brown fox";
echo "the original string: $string \n";
$parsed_txt=split_string($string,"quick",BEFORE,INCL);
echo $parsed_txt."\n";
$parsed_txt=split_string($string,"quick",AFTER,EXCL);
echo $parsed_txt."\n";


?>
