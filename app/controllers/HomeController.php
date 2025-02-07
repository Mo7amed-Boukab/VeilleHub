<?php 

require_once __DIR__.'/../models/User.php';

  class HomeController extends BaseController {
  
  
    public function showHomePage() {
        
      $this->render('templates/home');
    }


  }