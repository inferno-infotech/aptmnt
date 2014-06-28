<?php
class Level_2 extends Controller {

    function __construct() {
          parent::__construct();
        
         
    }
    function index()
    {
   
      
      $this->view->render('level_2');
    }
    function adduser()
    {
      $this->model->adduser();  
    }
     
    function listuser()
    {
      $this->model->listuser();  
    }
    
   function delete2($id)
    {
      $this->model->delete2($id);  
    }
    function update2($id)
    {
         $this->model->update2($id);
    }
}
?>