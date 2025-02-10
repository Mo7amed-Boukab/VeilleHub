<?php 
require_once __DIR__.'/../models/Teacher.php'; 


class TeacherController extends BaseController {
    private $TeacherModel;

    public function __construct() {
        $this->TeacherModel = new Teacher();
    }

    public function showDashboard() {
     if(!isset($_SESSION['user_loged_in_id']) || !isset($_SESSION['user_loged_in_role']) || $_SESSION['user_loged_in_role'] != 'enseignant'){
      header('location: login');
      exit;
    }
      $teacher_id = $_SESSION['user_loged_in_id'];
      $teacher_name = $_SESSION['user_loged_in_name'];

      $allStudents = $this->TeacherModel->allAccountStudents();
      $allStudents = $this->TeacherModel->allAccountStudents();
      $total_students = $this->TeacherModel->totalStudent();
      $total_topics = $this->TeacherModel->totalTopics();
      $topics = $this->TeacherModel->allTopics();
      $this->renderDashboard('teacher', ['teacher_id' => $teacher_id, 'teacher_name' => $teacher_name, 'allStudents' => $allStudents, 'topics' => $topics, 'total_students' => $total_students, 'total_topics' => $total_topics]);
    }
    public function valideAccountAction($id) {
      $this->TeacherModel->valideAccount($id);
      $this->showDashboard();  
  }
  
    public function regeterAccountAction($id) {
      $this->TeacherModel->regeterAccount($id);
      $this->showDashboard(); 
  }

  public function valideTopicAction($id) {
   $this->TeacherModel->valideTopic($id);
   $this->showDashboard();  
}

  public function regeterTopicAction($id) {
   $this->TeacherModel->regeterTopic($id);
   $this->showDashboard();  
}

  public function deleteTopicAction($id) {

   $this->TeacherModel->deleteTopic($id);
   $this->showDashboard(); 
  }
}

