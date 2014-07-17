<?php
class Appointmentform_model extends Model{

    function __construct() {
        parent::__construct();   
    }
    
    public function addcustomer()
    {
        
        
        
        function js2PhpTime($jsdate){
  if(preg_match('@(\d+)/(\d+)/(\d+)\s+(\d+):(\d+)@', $jsdate, $matches)==1){
    $ret = mktime($matches[4], $matches[5], 0, $matches[1], $matches[2], $matches[3]);
    //echo $matches[4] ."-". $matches[5] ."-". 0  ."-". $matches[1] ."-". $matches[2] ."-". $matches[3];
  }else if(preg_match('@(\d+)/(\d+)/(\d+)@', $jsdate, $matches)==1){
    $ret = mktime(0, 0, 0, $matches[1], $matches[2], $matches[3]);
    //echo 0 ."-". 0 ."-". 0 ."-". $matches[1] ."-". $matches[2] ."-". $matches[3];
  }
  return $ret;
}

function php2JsTime($phpDate){
    //echo $phpDate;
    //return "/Date(" . $phpDate*1000 . ")/";
    return date("m/d/Y H:i", $phpDate);
}

function php2MySqlTime($phpDate){
    return date("Y-m-d H:i:s", $phpDate);
}

function mySql2PhpTime($sqlDate){
    $arr = date_parse($sqlDate);
    return mktime($arr["hour"],$arr["minute"],$arr["second"],$arr["month"],$arr["day"],$arr["year"]);

}
        
$date=php2MySqlTime(js2PhpTime($_POST['startdate']));   
$date1=php2MySqlTime(js2PhpTime($_POST['enddate'])); 


 
       
$appointmenttitle=$_POST['appointmenttitle'];
$startdate=$date;
$enddate=$date1;
$appointmentlocation=$_POST['appointmentlocation'];
$appointmentcustomeremail=$_POST['appointmentcustomeremail'];
$appointmentcustomerphone=$_POST['appointmentcustomerphone'];
$appointmentcustomerusername=$_POST['appointmentcustomerusername'];
$appointmentcustomerdescription=$_POST['appointmentcustomerdescription'];
$query="INSERT INTO jqcalendar ".
       "(Subject,StartTime,EndTime,Location,Customeremail,Customerphone,Customerusername,Customerdescription) ".
       "VALUES('$appointmenttitle','$startdate','$enddate','$appointmentlocation','$appointmentcustomeremail','$appointmentcustomerphone','$appointmentcustomerusername','$appointmentcustomerdescription')";






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
      
            if(mysql_query($query))
                echo 'success';  
            else
                echo 'faililure';
            
            
//            $query1="SELECT * FROM users where id=LAST_INSERT_ID()";
//            $result= mysql_query($query1);
            
//            while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
//    $table="<tr id=".$row['id']."><td id=name-".$row['id'].">".$row['name']."</td>"."<td id=description-".$row['id'].">".$row['desciption']."</td>"."<td id=username-".$row['id'].">".$row['username']."</td>"."<td id=password-".$row['id'].">".$row['password']."</td>"."<td id=level-".$row['id'].">".$row['level']."</td>"."<td id=createdon-".$row['id'].">".$row['created_on']."</td>"."<td id=email-".$row['id'].">".$row['email']."</td>"."<td id=phonenumber-".$row['id'].">".$row['phonenumber']."</td>"."<td id=update-".$row['id'].">"."<a style='cursor:pointer;' onclick='update(".$row['id'].");'>Update</a>"."</td>"."<td id=delete-".$row['id'].">"."<a style='cursor:pointer;' onclick='deleting(".$row['id'].");'>Delete</a>"."</td>.</tr>";
//        echo $table;             
//                 
//             }
             mysql_close();
        
        
        
    }
    
    
    
    
    
    
    }
    
    
    ?>