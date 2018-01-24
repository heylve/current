<?php
require __DIR__ . '/vendor/autoload.php';
use Thybag\SharePointAPI;

$sp = new SharePointAPI('<VALLET-03846@cnamts.fr>','','<sp_wsdl.wsdl>');

$data = $sp->read('Projets-SDMA');
var_dump($data);
