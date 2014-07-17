<?php
class Appointmentslots_model extends Model{

    function __construct() {
        parent::__construct();   
    }
    public function addappointmentslots()
    {
     




    $date="";  
    $count6=0;
        
    $query=sprintf("INSERT INTO week
               (week,year,month)
               VALUES
               ('%s','%s','%s')",
               mysql_real_escape_string(date("W")),
               mysql_real_escape_string(date("Y")),
            mysql_real_escape_string(date("m")));
           if(mysql_query($query))
               { echo 'success'; }
   $last_id = mysql_insert_id();
    
      

               
   
     //code to insert data into week and than fetching last inserted id into $last id
   
   
    $count=1;
    $count1=0;
    
    
//    $query1="SELECT * FROM time ORDER BY time_id DESC LIMIT 1;";
//            $result= mysql_query($query1);
//           
//    while ($row = mysql_fetch_array($result, MYSQL_ASSOC))
//    {
//        $count1=$row['Day_id'];
//    }
   
    
   foreach($_POST as $key=>$value)
   {
    if($value!="")
       {
           if($value=="Monday"||$value=="Tuesday" || $value=="Wednesday" || $value=="Thursday" || $value=="Friday" || $value=="Saturday" || $value=="Sunday")
           {
             $count1++;  
           $value1=date("d",strtotime($value.'this week'));
           
           $date=$value1;
           
           
           $query=sprintf("INSERT INTO day
               (week_id,date,day)
               VALUES
               ($last_id,'%s','%s')",
               mysql_real_escape_string($value1),
               mysql_real_escape_string($value));
       
            if(mysql_query($query))
                echo 'success';     
           $last_day = mysql_insert_id();
   
           
           
           
           }
          else
          {
           
              if($count%2==1){
              $valuestart=$value;
             
       
          }
           if($count%2==0)
               {
               
           
               
               $query=sprintf("INSERT INTO time
               (Week_id,Day_id,Start_time,End_time)
               VALUES
               ($last_id,$last_day,'%s','%s')",
               mysql_real_escape_string($valuestart),
               mysql_real_escape_string($value));
               
               
               
           if(mysql_query($query))
               { echo 'success'; }
               //inserting into calendar
             
     




$starttime=date("m")."/".$date."/".date("Y")." ".$valuestart.":"."0".":"."0";
 
  if(preg_match('@(\d+)/(\d+)/(\d+)\s+(\d+):(\d+)@', $starttime, $matches)==1){
    $ret = mktime($matches[4], $matches[5], 0, $matches[1], $matches[2], $matches[3]);
    //echo $matches[4] ."-". $matches[5] ."-". 0  ."-". $matches[1] ."-". $matches[2] ."-". $matches[3];
  }else if(preg_match('@(\d+)/(\d+)/(\d+)@', $starttime, $matches)==1){
    $ret = mktime(0, 0, 0, $matches[1], $matches[2], $matches[3]);
    //echo 0 ."-". 0 ."-". 0 ."-". $matches[1] ."-". $matches[2] ."-". $matches[3];
  }
  $starttime=$ret;


  $starttime=date("Y-m-d H:i:s", $starttime);

        

$endtime=date("m")."/".$date."/".date("Y")." ".$value.":"."0".":"."0";


if(preg_match('@(\d+)/(\d+)/(\d+)\s+(\d+):(\d+)@', $endtime, $matches)==1){
    $ret = mktime($matches[4], $matches[5], 0, $matches[1], $matches[2], $matches[3]);
    //echo $matches[4] ."-". $matches[5] ."-". 0  ."-". $matches[1] ."-". $matches[2] ."-". $matches[3];
  }else if(preg_match('@(\d+)/(\d+)/(\d+)@', $endtime, $matches)==1){
    $ret = mktime(0, 0, 0, $matches[1], $matches[2], $matches[3]);
    //echo 0 ."-". 0 ."-". 0 ."-". $matches[1] ."-". $matches[2] ."-". $matches[3];
  }
  $endtime=$ret;


  $endtime=date("Y-m-d H:i:s", $endtime);


$query11="INSERT INTO jqcalendar ".
       "(StartTime,EndTime) ".
       "VALUES('$starttime','$endtime')";






//$query="INSERT INTO jqcalendar
//               (Subject,StartTime,EndTime,Location,Customeremail,Customerphone,Customerusername,Customerdescription)
//               VALUES
//               ()
//               mysql_real_escape_string($_POST['appointmenttitle']),
//               mysql_real_escape_string($_POST['startdate']),
//               mysql_real_escape_string($_POST['enddate']),
//               mysql_real_escape_string($_POST['appointmentlocation']),
//              mysql_real_escape_string($_POST['appointmentcustomeremail']),
//               mysql_real_escape_string($_POST['appointmentcustomerphone']),
//               mysql_real_escape_string($_POST['appointmentcustomerusername']),
//               mysql_real_escape_string($_POST['appointmentcustomerdescription'])); 
      
            if(mysql_query($query11))
                echo 'success';  
            else
                echo 'faililure';
//               
               //finished inserting into calendar
               
               
               }
               
               
               
               
                 
    
               
               
            
            
           $count++;
          }
           //code for inserting data into day and than time fetching last_day and inserting it into time table
           }
           
           }
    
           
           
          
           
           
           
     


           
           
           
           
           
           
           
           
               }
}