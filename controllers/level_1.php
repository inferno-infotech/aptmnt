<?php
class Level_1 extends Controller {

    function __construct() {
          parent::__construct();
        
         
    }
    function index()
    {
   
      
      $this->view->render('level_1');
    }
    
   
    
    
     function adduser($level)
    {
      $this->model->adduser($level);  
    }
     
    function listuser()
    {
      $this->model->listuser();  
    }
    
    
    function listuserlevel($level)
    {
       $this->model->listuserlevel($level);   
    }
    
    
   function delete($id)
    {
      $this->model->delete($id);  
    }
    function update($id)
    {
         $this->model->update($id);
    }
    
}
?>