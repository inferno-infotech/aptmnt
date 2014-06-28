<?php

class Controller {

    function __construct() {
      
        $this->view=new View();
    
    }   
       public function loadmodel($name)
       {
           
           $path='models/'.$name.'_model.php';
           
           if(file_exists($path)){
            require 'models/'.$name.'_model.php';
            $modelname=$name.'_model';
            $this->model=new $modelname();
        } 
       }
    

}