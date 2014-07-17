<?php
class Leads extends Controller {

    function __construct() {
          parent::__construct();
        
         
    }
    function index()
    {
   
      
      $this->view->render('leads');
    }
    
     function adduser()
    {
      $this->model->adduser();  
    }
    
}
    
    ?>