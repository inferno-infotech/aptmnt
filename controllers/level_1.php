<?php
class Level_1 extends Controller {

    function __construct() {
          parent::__construct();
        
         
    }
    function index()
    {
   
      
      $this->view->render('level_1');
    }
    
   
    
    
     function adduser()
    {
      $this->model->adduser();  
    }
      function listuser()
    {
      $this->model->listuser();  
    }
    
   
}
?>