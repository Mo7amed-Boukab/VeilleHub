<?php 
require_once __DIR__.'/../models/Teacher.php'; 


class TeacherController extends BaseController {
    private $TeacherModel;

    public function __construct() {
        $this->TeacherModel = new Teacher();
    }

    public function showDashboard() {
        $allStudents = $this->TeacherModel->allAccountStudents();
        $this->renderDashboard('teacher', ['allStudents' => $allStudents]);
    }
    public function valideAccountAction($id) {
      $this->TeacherModel->valideAccount($id);
      $this->showDashboard();  
  }
    public function regeterAccountAction($id) {
      $this->TeacherModel->regeterAccount($id);
      $this->showDashboard();  
  }
}

