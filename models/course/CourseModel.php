<?php

class CourseModel{

    private $conn;

    public function __construct(){
        $this->conn = new PDO("mysql:host=localhost;dbname=collegedb","root","nayan@");
    }

    function create($code, $duration, $title){
    $this->conn->query("INSERT INTO course (CODE, DURATION, TITLE) VALUES('$code', '$duration', '$title')");
    }

    function retreiveAll(): array{
        $res = $this->conn->query("SELECT * FROM course");
        return $res->fetchAll(PDO::FETCH_ASSOC);
    }

    function retreiveAllwhere($code):array {
        $res = $this->conn->query("SELECT * FROM course WHERE CODE = $code");
        return $res->fetch(PDO::FETCH_ASSOC);
    }

    function update($duration, $title, $code){
        $this->conn->query("UPDATE course SET DURATION = '$duration', TITLE = '$title'  WHERE CODE = $code");
    }

    function deleteAll(){
        $this->conn->query("DELETE FROM course");
    }

    function deleteWhere($code){
        $this->conn->query("DELETE FROM course WHERE CODE = $code");
    }
}



