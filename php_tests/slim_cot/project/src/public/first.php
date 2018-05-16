<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../../../vendor/autoload.php';

$app = new \Slim\App();
$app->get('/toto/', function (Request $req,  Response $response,  $args = []) {
	
	//	    return $res->withStatus(400)->write('Bad Request');
	
	        $response->getBody()->write("Hello je suis toto<b>llll</b>");

	        return $response;
});
$app->get('/lol', function ($req, $res, $args) {
	  return $res->withStatus(302)->withHeader('Location', 'your-new-uri');
});
$app->get('/hello/{name}', function (Request $request, Response $response, array $args) {
	    $name = $args['name'];
	        $response->getBody()->write("Hello, $name");

	        return $response;
});
$app->run();

?>
