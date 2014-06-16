<?php

class Help extends Controller{

    function __construct() {
          parent::__construct();
    
    }
    function index()
    {
        $this->view->render('help/index');
        
    }
    
    
    public function other($arg=FALSE)
    {
        
        echo 'we are inside other';
        echo 'Optional'.$arg;
        require 'models/help_model.php';
        $model=new Help_model();
    }

}