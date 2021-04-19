<?php
require_once("../models/college/CollegeModel.php");

class CollegeController{

	public function __construct(){
		$this->collegeModel = new CollegeModel();
	}

	public function list(){
		$rows = $this->collegeModel->retreiveAll();
		require("../views/college/list_college.php");
	}

	public function createForm(){
		require("../views/college/create_form.php");
	}

	public function create(){
		$newName = $_GET["name"];
		$newAddress = $_GET["address"];
		$newPhone = $_GET["phone"];

		$id = rand(100,1000)."";

		$this->collegeModel->create($id, $newName, $newAddress, $newPhone);
		header('Location:/controllers/CollegeController.php?action=list',302);
	}

	public function updateForm(){
		$id = $_GET["id"]; 
		$row = $this->collegeModel->retreiveAllwhere($id);
		require("../views/college/update_form.php");
	}

	public function update(){
		$newName = $_GET["name"];	
		$newAddress = $_GET["address"];
		$newPhone = $_GET["phone"];
		$id = $_GET["id"];

		$this->collegeModel->update($newName, $newAddress, $newPhone, $id);
		header('Location:/controllers/CollegeController.php?action=list',302);
	}

	public function delete(){
		$id = $_GET["id"];
		$this->collegeModel->deleteWhere($id);
		header('Location:/controllers/CollegeController.php?action=list',302);
	}
}


$action = $_GET["action"];
//echo $action;

$collegeCtrl = new CollegeController();
$collegeCtrl->{$action}();
