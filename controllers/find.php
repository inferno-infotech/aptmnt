<?php
class Find extends Controller {

    function __construct() {
          parent::__construct();
        
         
    }
    function index()
    {
   
      
      $this->view->render('find');
    }
   function findemailandid()
    {
        $this->model->findemailandid();        
     }
   
    
}