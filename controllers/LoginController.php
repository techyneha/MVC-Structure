<?php
require("./models/LoginModel.php");

class LoginController {
	private $model;

	public function __construct(){
		$this->model = new LoginModel();
	}

	public function authenticate(){
		$username = $_GET["username"];
		$password = $_GET["password"];

		$isValidUser = $this->model->isValidUser($username, $password);

		return $isValidUser;
	}
}