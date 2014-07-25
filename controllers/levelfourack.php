<?php
class Levelfourack extends Controller {

    function __construct() {
          parent::__construct();
        
         
    }
    function index()
    {
   
      
      $this->view->render('levelfourack');
    }
    
   function updatelevelfouruser()
    {
      $this->model->updatelevelfouruser();  
    }
    
}
    
    ?>