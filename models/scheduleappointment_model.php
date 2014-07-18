<?php

class Scheduleappointment_model extends Model{

    function __construct() {
        parent::__construct();   
    }
    public function loaddata()
    {
       
        $query1="SELECT * FROM jqcalendar where flag='1'";
            $result= mysql_query($query1);
            
            while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
               $starttime=$row['StartTime']; 
              $endtime=$row['EndTime']; 
              $id=$row['Id'];
              $starttimearr=split(" ",$starttime);
             $endtimearr=split(" ",$endtime);
             echo date('d-m-Y',strtotime($starttimearr[0]));
             echo "#";
             echo date('h',  strtotime($starttimearr[1]));
             echo "-";
             echo date('h',  strtotime($endtimearr[1]));
             echo "#";
             echo $id;
             echo " ";
               
             }
             
             
             
//        $query2="SELECT * FROM day where day_id=".$day_id;
//            $result= mysql_query($query2); 
//             while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
//               $date=$row['date'];
//             }
//             
//             
//             
//       echo $starttime."/".$endtime."/".$date."/".date('m')."/".date("Y")."/".$timeid;
        
    }
    
    public function savedata()
    {
        $var="";
        foreach($_POST as $key=>$value)
        {
            
          
            if($key!='titleappointmentcustomer' && $key!='locationappointmentcustomer' && $key!='customeremail' && $key!='customerphone' && $key!='customerusername' && $key!='customerdescription' && $key!='timeid')
            {
                $var=$var.$value;
                $var=$var." ";
            }
            
        }
        
        $vararr=split(" ",$var);
        
        for($i=0;$i<count($vararr)-1;$i++)
        {
            
       $query2="UPDATE jqcalendar SET flag='0',Description='".$_POST['titleappointmentcustomer']."',Customername='".$_POST['customerusername']."',Customeremail='".$_POST['customeremail']."',Customerphone='".$_POST['customerphone']."', color='8',Subject='Appointment booked' WHERE Id=".$vararr[$i];
if(mysql_query($query2))
{echo 'success';}
            
            
            
            
        }
        
        $query3="select Id from jqcalendar where flag='1'";
        $result=mysql_query($query3);
         while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
         $query4="Update jqcalendar SET flag='0',Subject='Appointment Cancelled',color='9' WHERE Id=".$row['Id'];
         mysql_query($query4);
             
         }
        
//        $query2=sprintf("UPDATE time SET Title='%s',customerlocation='%s',customeremail='%s',customerphone='%s',customerusername='%s',customerdescription='%s'  WHERE time_id=".$_POST['timeid'],
//                   mysql_real_escape_string($_POST['titleappointmentcustomer']),
//               mysql_real_escape_string($_POST['locationappointmentcustomer']),
//               mysql_real_escape_string($_POST['customeremail']),
//               mysql_real_escape_string($_POST['customerphone']),
//              mysql_real_escape_string($_POST['customerusername']),
//               mysql_real_escape_string($_POST['customerdescription']));
//if(mysql_query($query2))
//{echo 'success';}
//       
// mysql_close();
    }
    
    
}