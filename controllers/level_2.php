<?php
class Level_2 extends Controller {

    function __construct() {
          parent::__construct();
        
         
    }
    function index()
    {
   
      
      $this->view->render('level_2');
    }
    function adduser($level)
    {
      $this->model->adduser($level);  
    }
     
    function listuser()
    {
      $this->model->listuser();  
    }
    
   function listuserlevel2($concat)
    {
      $this->model->listuserlevel2($concat);  
    }
   function selectlevel4($id)
   {
      $this->model->selectlevel4($id);  
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