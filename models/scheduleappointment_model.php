<?php

class Scheduleappointment_model extends Model{

    function __construct() {
        parent::__construct();   
    }
    public function loaddata()
    {
       $timeid=7;
        $returnvalue=array(); 
        $query1="SELECT * FROM time where time_id=".$timeid;
            $result= mysql_query($query1);
            
            while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
               $starttime=$row['Start_time']; 
              $endtime=$row['End_time']; 
               $day_id=$row['Day_id'];
               $week_id=$row['Week_id'];
             }
        $query2="SELECT * FROM day where day_id=".$day_id;
            $result= mysql_query($query2); 
             while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
               $date=$row['date'];
             }
             
             
             
       echo $starttime."/".$endtime."/".$date."/".date('m')."/".date("Y")."/".$timeid;
        
    }
    
    public function savedata()
    {
        $query2=sprintf("UPDATE time SET Title='%s',customerlocation='%s',customeremail='%s',customerphone='%s',customerusername='%s',customerdescription='%s'  WHERE time_id=".$_POST['timeid'],
                   mysql_real_escape_string($_POST['titleappointmentcustomer']),
               mysql_real_escape_string($_POST['locationappointmentcustomer']),
               mysql_real_escape_string($_POST['customeremail']),
               mysql_real_escape_string($_POST['customerphone']),
              mysql_real_escape_string($_POST['customerusername']),
               mysql_real_escape_string($_POST['customerdescription']));
if(mysql_query($query2))
{echo 'success';}
       
 mysql_close();
    }
    
    
}