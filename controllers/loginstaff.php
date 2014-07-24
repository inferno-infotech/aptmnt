<?php
class Loginstaff extends Controller {

    function __construct() {
          parent::__construct();
        
         
    }
    function index()
    {
   
      
      $this->view->render('loginstaff');
    }
    function userpassword()
    {
      $this->model->userpassword();  
    }
    
   
    
}