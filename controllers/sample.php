<?php
class Sample extends Controller {

    function __construct() {
          parent::__construct();
        
         
    }
    function index()
    {
   
      
      $this->view->render('sample',true);
    }
   function loaduser()
    {
      $this->model->loaduser();  
    } 
    

}
    ?>