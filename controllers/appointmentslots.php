<?php
class Appointmentslots extends Controller {

    function __construct() {
          parent::__construct();
        
         
    }
    function index()
    {
   
      
      $this->view->render('appointmentslots');
    }
    function addappointmentslots()
    {
        
        $this->model->addappointmentslots();
    }
}
?>