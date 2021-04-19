<?php 
require("./controllers/TestController.php");
require("./controllers/CollegeController.php");
require("./controllers/CourseController.php");
require("./routes.php");
require("./lib/utils.php");


$url = $_GET["route"];
//echo $url;
if($url === "") {
	$url = "base";
}
$mappedString = $routes[$url];
$parts = explode("/", $mappedString);
$className = $parts[0];
$methodName = $parts[1];

$ctrlObj = new $className();
$ctrlObj->{$methodName}();



//echo "<pre>";
//print_r($_SERVER);
//print_r($_SERVER["REQUEST_URI"]);
//$contextPath  = "/".explode("/", $_SERVER["REQUEST_URI"])[1];
//print_r($contextPath);
// $contextPath = $_SERVER

// function baseUrl($url){
// 	global $contextPath;
// 	return $contextPath.$url;
// }