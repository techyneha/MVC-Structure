<?php 
require("./controllers/TestController.php");
require("./controllers/CollegeController.php");
require("./controllers/CourseController.php");
require("./controllers/HomeController.php");
require("./controllers/LoginController.php");
require("./routes.php");
require("./lib/utils.php");

class FrontController {

	private const LOGIN_KEY = "LOGIN_KEY";

	public function processRoute() {
		global $routes;
		$url = $_GET["route"];

		$resourcesRoute = $this->mappedRoute($routes,$url);
		//if no mapping is found
		if(!$resourcesRoute) {
			require("./views/not_found.php");
			die();
		}

		$loggedInUser = $this->loggedInUser();
		// if loggedIn user is null
		if(!$loggedInUser) {
			$validUser = $this->authenticateRequest();
			//not a valid user
			if(!$validUser) {
				$queryString = $_SERVER["QUERY_STRING"];
				$qString = str_replace("route=", "", $queryString);
				require("./views/login_failure.php");
				die();
			}

			$this->updateLoggedInUser($validUser);
		}

		$this->executeRoute($resourcesRoute);

	}

	private function mappedRoute($routes, $url){
		$url = ($url === "") ? "base" : $url;
		$mappedString = $routes[$url];

		return ($mappedString ? $mappedString : null);
	}

	private function loggedInUser(){
		session_start();
		return isset($_SESSION[self::LOGIN_KEY]) ? true : false;
	}

	private function authenticateRequest(){
		$loginController = new LoginController();
		$validUser = $loginController->authenticate();
		return $validUser ? true : false;
	}

	private function updateLoggedInUser($loginValue){
		$_SESSION[self::LOGIN_KEY] = $loginValue;
	}

	private function executeRoute($resourcesRoute){
		$parts = explode("/", $resourcesRoute);
		$className = $parts[0];
		$methodName = $parts[1];
		$ctrlObj = new $className();
		$ctrlObj->{$methodName}();
	}
}

$frontController = new FrontController();
$frontController->processRoute();

