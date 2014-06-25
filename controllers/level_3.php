<?php
class Level_3 extends Controller {

    function __construct() {
          parent::__construct();
        
         
    }
    function index()
    {
   
      
      $this->view->render('level_3');
    }
    function adduser()
    {
      $this->model->adduser();  
    }
     
    function listuser()
    {
      $this->model->listuser();  
    }
    
   function delete3($id)
    {
      $this->model->delete3($id);  
    }
    function update3($id)
    {
         $this->model->update3($id);
    }
}
?>