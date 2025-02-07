<?php 

require_once __DIR__.'/../models/User.php';

  class AuthController extends BaseController {
  
    private $UserModel ;
    public function __construct(){

        $this->UserModel = new User();
              
    }

    public function showRegister() {
        
      $this->renderAuth('register');
    }
    public function showleLogin() {
        
      $this->renderAuth('login');
    }
    
    public function handleRegister(){

        
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
          if (isset($_POST['signup'])) {
            
              $full_name = $_POST['username'];
              $email = $_POST['email'];
              $role = $_POST['role'];
              $password = $_POST['password'];
              $hashed_password = password_hash($password, PASSWORD_DEFAULT);

              $user = [$full_name,$hashed_password,$email,$role];

              $lastInsertId = $this->UserModel->register($user);

                  header('Location: login');
                  exit;
      }
    }
  }
    public function handleLogin(){

        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            if (isset($_POST['login'])) {
                $email = $_POST['email'];
                $password = $_POST['password'];
                $userData = [$email,$password];
                $user = $this->UserModel->login($userData);
                $role = $user['role'] ; 
              // var_dump($user);die();
                $_SESSION['user_loged_in_id'] = $user["id"];
                $_SESSION['user_loged_in_role'] = $role;
                $_SESSION['user_loged_in_name'] = $user['username'];

                if ($user && $role == 'étudiant') {
                  header('Location: dashboard/student');
                } else if ($user && $role == 'enseignant') {
                  header('Location: dashboard');
                } 
                else{
                  echo "no user found";
                }
              
            }
        }


    }

    public function logout() {

          if (isset($_SESSION['user_loged_in_id']) && isset($_SESSION['user_loged_in_role'])) {
              unset($_SESSION['user_loged_in_id']);
              unset($_SESSION['user_loged_in_role']);
              session_destroy();
              
              header("Location: home");
              exit;
          }
    }

  }
  