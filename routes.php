<?php

$routes = array();
$routes["test"]= "TestController/test";
$routes["test/do"]= "TestController/doSomething";

//logout
$routes["logout"] = "LoginController/logout";

// Home
$routes["base"] = "HomeController/index";

// colleges
$routes["colleges"] = "CollegeController/list";
$routes["colleges/createForm"] = "CollegeController/createForm";
$routes["colleges/create"] = "CollegeController/create";
$routes["colleges/updateForm"] = "CollegeController/updateForm";
$routes["colleges/update"] = "CollegeController/update";
$routes["colleges/delete"] = "CollegeController/delete";

//course
$routes["courses"] = "CourseController/list";
$routes["courses/createForm"] = "CourseController/createForm";
$routes["courses/create"] = "CourseController/create";
$routes["courses/updateForm"] = "CourseController/updateForm";
$routes["courses/update"] = "CourseController/update";
$routes["courses/delete"] = "CourseController/delete";