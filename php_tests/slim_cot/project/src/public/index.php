<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../../../vendor/autoload.php';


$config['displayErrorDetails'] = true;
$config['addContentLengthHeader'] = false;

$config['db']['host']   = 'localhost';
$config['db']['user']   = 'root';
$config['db']['pass']   = '';
$config['db']['dbname'] = 'cotations';




$app = new \Slim\App(["settings" => $config]);

$container = $app->getContainer();

$container['db'] = function ($config) {
	$db = $config['db'];
	$pdo = new PDO('mysql:host=' . $db['host'] . ';dbname=' . $db['dbname'],
		$db['user'], $db['pass']);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
	return $pdo;
};

$container['logger'] = function($c) {
	$logger = new \Monolog\Logger('my_logger');
	$file_handler = new \Monolog\Handler\StreamHandler('../logs/app.log');
	$logger->pushHandler($file_handler);
	return $logger;
};

$app->get('/hello/{name}', function (Request $request, Response $response, array $args) {
	$name = $args['name'];
	$response->getBody()->write("Hello, $name");
	$this->logger->addInfo('Something interesting happened');
	//$this->db->query("select  * from ccam;");
	return $response;
});



$app->run();

?>
