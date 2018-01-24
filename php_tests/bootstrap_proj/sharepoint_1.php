<?php

$username = 'VALLET-03846@cnamts.fr';
$password = '';
$url = "http://w11440101shp/sites/Projets-SDMA/Gestion_Visiteurs/_layouts/15/start.aspx#/";
try {
    $authCtx = new AuthenticationContext($Url);
    $authCtx->acquireTokenForUser($username,$password);
    $ctx = new ClientContext($Url,$authCtx);
    printTasks($ctx);
}
catch (Exception $e) {
    echo 'Authentication failed: ',  $e->getMessage(), "\n";
}
function printTasks(ClientContext $ctx){

	$listTitle = 'Tasks';
	$web = $ctx->getWeb();
        $list = $web->getLists()->getByTitle($listTitle);
	$items = $list->getItems();
        $ctx->load($items);
        $ctx->executeQuery();
	foreach( $items->getData() as $item ) {
	    print "Task: '{$item->Title}'\r\n";
	}
}
?>
<!-- view rawSPOFirstExample.php hosted with ❤ by GitHub
Key points:

SPOClient class represents a REST Service client for the specified SharePoint Online (SPO) site
The signIn method performs a claims-based authentication. You can find more details about remote authentication in Remote authentication in SharePoint Online post.
The following examples demonstrates how to perform the remaining CRUD operations on SharePoint list data. -->
//
// require_once 'SPOClient.php';
// $username = 'username@tenant.onmicrosoft.com';
// $password = 'password';
// $url = "https://tenant.sharepoint.com/";
// $client = new SPOClient($url);
// $client->signIn($username,$password);
// //Get Tasks list
// $listTitle = 'Tasks';
// $list = $client->getList($listTitle);
//
// //Create a Task item
// $itemProperties = array('Title' => 'Order Approval', 'Body' => 'Order approval task');
// $taskItem = $list->addItem($itemProperties);
// print "Task '{$taskItem->Title}' has been created succesfully.\r\n";
// $itemId = $taskItem->Id;
// //Update a Task item
// $itemProperties = array('PercentComplete' => 1);
//$list->updateItem($itemId,$itemProperties);
//Delete a Task item
//$list->deleteItem($itemId);
//?> -->
