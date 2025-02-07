<?php

  class Database
  {
      protected $conn ;
      public function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=localhost;dbname=VeilleHub", "root", "");
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
          } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
          }
    }
  }
