<?php 
require_once __DIR__.'/../models/Student.php';

class StudentController extends BaseController {
    private $StudentModel;

    public function __construct() {
        $this->StudentModel = new Student();
    }
    public function showDashboard() {
      $this->renderDashboard('student');
    
  }
  
}

