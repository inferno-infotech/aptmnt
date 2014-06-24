<?php
class Level_2 extends Controller {

    function __construct() {
          parent::__construct();
        
         
    }
    function index()
    {
   
      
      $this->view->render('level_2');
    }
}
?>