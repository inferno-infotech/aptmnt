<?php
class Appointmentform extends Controller {

    function __construct() {
          parent::__construct();
        
         
    }
    function index()
    {
   
      
      $this->view->render('appointmentform');
    }
    function addcustomer()
    {
       $this->model->addcustomer();  
        
    }
    
    
}
?>