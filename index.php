<?php 
require("./controllers/TestController.php");
require("./controllers/CollegeController.php");
require("./controllers/CourseController.php");
require("./controllers/HomeController.php");
require("./controllers/LoginController.php");
require("./routes.php");
require("./lib/utils.php");

$url = $_GET["route"];
//echo $url."<br>";

if($url === "") {
	//echo "Inside Empty Url"."<br>";
	$url = "base";
}
//echo "Modified Url".$url."<br>"	;
$mappedString = $routes[$url];
if($mappedString  === null){
	require('./views/not_found.php');
	die();
}

$loginController = new LoginController();
$isValidUser = $loginController->authenticate();
if(!$isValidUser) {
	require("./views/login_failure.php");
	die();
}

//echo $mappedString;
$parts = explode("/", $mappedString);
$className = $parts[0];
$methodName = $parts[1];

$ctrlObj = new $className();
$ctrlObj->{$methodName}();
