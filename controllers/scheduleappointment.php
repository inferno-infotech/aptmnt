
<?php
class Scheduleappointment extends Controller {

    function __construct() {
          parent::__construct();
        
         
    }
    function index()
    {
   
      
      $this->view->render('scheduleappointment');
    }
    function loaddata()
    {
        $this->model->loaddata();  
    }
    function savedata()
    {
        $this->model->savedata();
    }
}
    ?>
