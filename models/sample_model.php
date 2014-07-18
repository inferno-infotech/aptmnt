<?php
class Sample_model extends Model{

    function __construct() {
        parent::__construct();   
    }

    function loaduser()
    {
         
   $query2="UPDATE jqcalendar SET color_status='0', color='12',Subject='Request For Appointment' WHERE color_status='1'";
if(mysql_query($query2))
{echo 'success';}
              
 mysql_close();
    }
    }
?>