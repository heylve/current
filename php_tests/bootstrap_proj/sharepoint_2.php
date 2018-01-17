<?php
require __DIR__ . '/vendor/autoload.php';
use Thybag\SharePointAPI;
//$sp = new SharePointAPI('LUC.VALLET@cpam-loireatlantique.cnamts.fr', '', 'http://w11440101shp/sites/Projets-SDMA/_vti_bin/DspSts.asmx?WSDL');
$sp = new SharePointAPI('VALLET-03846', 'BepiColombo', './sp_wsdl.wsdl','NTML');
//$sp->getLists();
//$sp->query('/Projets-SDMA')->limit(10)->get();
$sp->getLists();
print_r($sp);
 ?>
