<?php
/*
Plugin Name: Tic tac toe by Nosferius
Plugin URI:  http://localhost/tictactoe/
Description: Play tic tac toe from within WordPress
Version:     0.1
Author:      Stefan de Jong
Author URI:  http://djstefandejong.nl
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: my-toolset
*/

// Errors to browser
error_reporting(E_ALL);
ini_set('display_errors', 'on');

// Load libraries
$config = parse_ini_file('config.php');
require_once('lib/model/model.php');
require_once('lib/controller/controller.php');
require_once('lib/controller/postHandler.php');

$postHandler = new postHandler();
$postHandler->run();

$Controller = new controller();
$action     = "";

// If there's an action tell the controller
if(isset($_GET["action"])){
    $action = $_GET["action"];
}

//$Controller->setAction($action);
//echo $Controller->run();