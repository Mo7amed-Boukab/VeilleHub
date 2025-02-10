<?php 
require_once __DIR__.'/../config/db.php';

class Student extends Database {
    public function __construct() {
        parent::__construct();
    }
    public function addTopic($titre, $description, $student_id) {
      $stmt = $this->conn->prepare("INSERT INTO topics (titre, description, student_id) VALUES (?, ?, ?)");
      $stmt->execute([$titre, $description, $student_id]);
  }
  
  public function deleteTopic($topic_id) {
   $stmt = $this->conn->prepare("DELETE FROM topics WHERE id = ?");
   return $stmt->execute([$topic_id]);
}

  public function allMyTopics($student_id) {
   $stmt = $this->conn->prepare("SELECT * FROM topics WHERE student_id = ?");
   $stmt->execute([$student_id]);
   return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

public function myTopics($student_id) {
 $stmt = $this->conn->prepare("SELECT COUNT(*) AS total_myTopics FROM topics WHERE student_id = ?");
 $stmt->execute([$student_id]);
 return $stmt->fetch(PDO::FETCH_ASSOC);
}
public function myValidTopics($student_id) {
 $stmt = $this->conn->prepare("SELECT COUNT(*) AS myValidTopics FROM topics WHERE student_id = ? AND statut = 'approuvé'");
 $stmt->execute([$student_id]);
 return $stmt->fetch(PDO::FETCH_ASSOC);
}



  public function topicData($topic_id) {
   $stmt = $this->conn->prepare("SELECT * FROM topics WHERE id = ?");
   $stmt->execute([$topic_id]);
   return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
  public function editTopic($titre, $description, $topic_id) {
   $stmt = $this->conn->prepare("UPDATE topics SET titre = ?, description = ? WHERE id = ?");
   $stmt->execute([$titre, $description, $topic_id]);
}


 
  
    
}


