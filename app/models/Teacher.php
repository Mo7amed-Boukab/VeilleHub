
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
    
}


