<?php

//Requires the NuSOAP library
require __DIR__ . '/vendor/autoload.php';
//require_once('lib/nusoap.php');

$username = 'VALLET-03846@cnamts.fr';
$password = '';
$rowLimit = '150';

/* A string that contains either the display name or the GUID for the list.
 * It is recommended that you use the GUID, which must be between curly
 * braces ({}).
 */
$listName = "http://w11440101shp/sites/Projets-SDMA/";

/* Local path to the Lists.asmx WSDL file (localhost). You must first download
 * it manually from your SharePoint site (which should be available at
 * yoursharepointsite.com/subsite/_vti_bin/Lists.asmx?WSDL)
 */
$wsdl = "http://w11440101shp/sites/Projets-SDMA/_vti_bin/DspSts.asmx?WSDL ";

//Basic authentication. Using UTF-8 to allow special characters.
$client = new nusoap_client($wsdl, true);
$client->setCredentials($username,$password);
$client->soap_defencoding='UTF-8';

//XML for the request. Add extra fields as necessary
$xml ='
<GetListItems xmlns="http://schemas.microsoft.com/sharepoint/soap/">
<listName>'.$listName.'</listName>
<rowLimit>'.$rowLimit.'</rowLimit>
</GetListItems>
';

//Invoke the Web Service
$result = $client->call('GetListItems', $xml);
print_r($result);
//Error check
if(isset($fault)) {
  echo("<h2>Error</h2>". $fault);
}

//Extracting and preparing the Web Service response for display
$responseContent = utf8_decode(htmlspecialchars(substr($client->response,strpos($client->response, "<"),strlen($client->response)-1)));

//Displaying the request and the response, broken down by header and XML content
echo "<h2>Request</h2><pre>" . utf8_decode(htmlspecialchars($client->request, ENT_QUOTES)) . "</pre>";
echo "<h2>Response header</h2><pre>" . utf8_decode(htmlspecialchars(substr($client->response,0,strpos($client->response, "<")))) . "</pre>";
echo "<h2>Response content</h2><pre>".$responseContent."</pre>";

//Uncomment for debugging info:
//echo("<h2>Debug</h2><pre>" . htmlspecialchars($client->debug_str, ENT_QUOTES) . "</pre>");
unset($client);
?>
