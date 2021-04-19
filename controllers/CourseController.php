<?php
require_once("./models/course/CourseModel.php");

class CourseController{

	public function __construct(){
		$this->courseModel = new CourseModel();
	}

	public function list(){
		$rows = $this->courseModel->retreiveAll();
		require("./views/course/list_course.php");
	}

	public function createForm(){
		require("./views/course/create_form.php");
	}

	public function create(){
		$code = $_GET['code'];
		$duration = $_GET['duration'];
		$title = $_GET['title'];

		$this->courseModel->create($code, $duration, $title);
		//header('Location:/web-php/controllers/CourseController.php?action=list',302);
		redirect('/courses');
	}

	public function updateForm(){
		$code = $_GET['code'];
		$row = $this->courseModel->retreiveAllWhere($code);
		require("./views/course/update_form.php");
	}

	public function update(){
		$duration = $_GET['duration'];
		$title = $_GET['title'];
		$code = $_GET['code'];

		$this->courseModel->update($duration, $title, $code);
		redirect('/courses');
	}

	public function delete(){
		$code = $_GET["code"];
		$this->courseModel->deleteWhere($code);
		redirect('/courses');
	}
}

//$action = $_GET["action"];
//echo $action;

// $courseCtrl = new CourseController();
// $courseCtrl->{$action}();