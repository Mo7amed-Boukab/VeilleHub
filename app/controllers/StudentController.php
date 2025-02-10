<?php 
require_once __DIR__.'/../models/Student.php';

class StudentController extends BaseController {
    private $StudentModel;

    public function __construct() {
        $this->StudentModel = new Student();
    }
    public function showDashboard() {
      if(!isset($_SESSION['user_loged_in_id']) || !isset($_SESSION['user_loged_in_role']) || $_SESSION['user_loged_in_role'] != 'étudiant'){
        header('location: login');
        exit;
      }
        $student_id = $_SESSION['user_loged_in_id'];
        $student_name = $_SESSION['user_loged_in_name'];
        $topics = $this->StudentModel->allMyTopics($student_id);
        $total_myTopics = $this->StudentModel->myTopics($student_id);
        $myValidTopics = $this->StudentModel->myValidTopics($student_id);

      $this->renderDashboard('student', ['student_id' => $student_id,'student_name' => $student_name ,'topics' => $topics, 'total_myTopics' => $total_myTopics, 'myValidTopics' => $myValidTopics]);
    
  }

  public function deleteTopicAction($id) {

      $this->StudentModel->deleteTopic($id);
      header("Location: /dashboard/student");
      exit;
  }

  public function addtopicAction($id) {

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['save'])) {
            $title = $_POST['title'];
            $description = $_POST['description'];
            $student_id = $id;

            $this->StudentModel->addTopic($title, $description, $student_id);
            header("Location: /dashboard/student");
            exit;
        }
    }
  }

  public function editTopicAction($id) {
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (isset($_POST['update'])) {
          $title = $_POST['new_title'];
          $description = $_POST['new_description'];
   
         $this->StudentModel->editTopic($title, $description, $id);
         header("Location: /dashboard/student");
         exit;
      }
   }
   else{
    $topic = $this->StudentModel->topicData($id);
    $this->showDashboard();
    $this->renderDashboard('updateTopicModal', ['topic' => $topic]);
 }
}
  
  

}

