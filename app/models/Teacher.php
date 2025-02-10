
<?php 
require_once __DIR__.'/../config/db.php';

class Teacher extends Database {
    public function __construct() {
        parent::__construct();
    }

    public function allAccountStudents() {
      $query = "SELECT * FROM users WHERE role = 'étudiant';";
      $stmt = $this->conn->prepare($query);
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function valideAccount($student_id) {
          $query = $this->conn->prepare("UPDATE users SET statut = 'approuvé' WHERE id = ?");
          return  $query->execute([$student_id]);      
    }
    public function regeterAccount($student_id) {
          $query = $this->conn->prepare("UPDATE users SET statut = 'rejeté' WHERE id = ?");
          return  $query->execute([$student_id]);      
    }
    public function allTopics() {
     $stmt = $this->conn->prepare("SELECT topics.*, users.username AS student_name FROM topics JOIN users ON topics.student_id = users.id");
     $stmt->execute();
     return $stmt->fetchAll(PDO::FETCH_ASSOC);
 }
    public function totalStudent() {
     $stmt = $this->conn->prepare("SELECT COUNT(*) AS total_students FROM users");
     $stmt->execute();
     return $stmt->fetch(PDO::FETCH_ASSOC);
 }
 public function totalTopics() {
  $stmt = $this->conn->prepare("SELECT COUNT(*) AS total_topics FROM topics WHERE statut = 'en attente'");
  $stmt->execute();
  return $stmt->fetch(PDO::FETCH_ASSOC);
}
    public function valideTopic($topic_id) {
     $stmt = $this->conn->prepare("UPDATE topics SET statut = 'approuvé' WHERE id = ?");
     return $stmt->execute([$topic_id]);
 }
    public function regeterTopic($topic_id) {
     $stmt = $this->conn->prepare("UPDATE topics SET statut = 'rejeté' WHERE id = ?");
     return $stmt->execute([$topic_id]);
 }
    public function deleteTopic($topic_id) {
     $stmt = $this->conn->prepare("DELETE FROM topics WHERE id = ?");
     return $stmt->execute([$topic_id]);
 }

    
}


