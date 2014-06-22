<?php
class Login extends Controller {

    function __construct() {
          parent::__construct();
        
         
    }
    function index()
    {
   
      
      $this->view->render('login/index');
    }
    function initiate()
    {
      $this->model->initiate();  
    }
    
    function run()
    {
        
        $this->model->run();
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