<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set('Europe/Dublin');

define('ROOTDIR',dirname(__FILE__));
//define('HKEY','28934adhifbaskaasady411a2a');
define('HKEY','dfghad3uahiu345132ljnlsdfd');

require 'vendor/autoload.php';

try {   
    require 'config/database.php';    
    require 'lib/Helper.php';   

} catch (Exception $e) {
    header("Access-Control-Allow-Origin: *");
    echo '{"error":{"text":'. 'Unable to start up the web service. ' . $e->getMessage() .'}}';
    die();    
}


$configuration = [
    'settings' => [
        'displayErrorDetails' => true,
        'debug' => true
    ],
];

$c = new \Slim\Container($configuration);
$app = new \Slim\App($c);


include 'controllers/UserController.php';
//include 'controllers/CategoryController.php';
include 'config/middleware.php';
include 'config/dependencies.php';


$app->run();

?>