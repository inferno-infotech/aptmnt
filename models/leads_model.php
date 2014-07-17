<?php

class Leads_model extends Model{

    function __construct() {
        parent::__construct();   
    }
    
    public function adduser()
    {
      $query=sprintf("INSERT INTO users
               (name,desciption,username,password,level,email,phonenumber,levelcreateleads,leadsusername)
               VALUES
               ('%s','%s','%s','%s','%s','%s','%s','%s','%s')",
               mysql_real_escape_string($_POST['leadsname']),
               mysql_real_escape_string($_POST['leadsdescription']),
               mysql_real_escape_string($_POST['leadsusername']),
               mysql_real_escape_string($_POST['leadspassword']),
               mysql_real_escape_string('leads'),
               mysql_real_escape_string($_POST['leadsemail']),
               mysql_real_escape_string($_POST['leadsphonenumber']),
               mysql_real_escape_string($_POST['levelcreatedleads']),
               mysql_real_escape_string($_POST['leadsusername1']));
       
            if(mysql_query($query))
                echo 'success';     
            
            $query1="SELECT * FROM users where id=LAST_INSERT_ID()";
            $result= mysql_query($query1);
            
            while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
    $table="<tr id=".$row['id']."><td id=name-".$row['id'].">".$row['name']."</td>"."<td id=description-".$row['id'].">".$row['desciption']."</td>"."<td id=username-".$row['id'].">".$row['username']."</td>"."<td id=password-".$row['id'].">".$row['password']."</td>"."<td id=level-".$row['id'].">".$row['level']."</td>"."<td id=createdon-".$row['id'].">".$row['created_on']."</td>"."<td id=email-".$row['id'].">".$row['email']."</td>"."<td id=phonenumber-".$row['id'].">".$row['phonenumber']."</td>"."<td id=levelcreateleads-".$row['id'].">".$row['levelcreateleads']."</td>"."<td id=update-".$row['id'].">"."<a style='cursor:pointer;' onclick='update(".$row['id'].");'>Update</a>"."</td>"."<td id=delete-".$row['id'].">"."<a style='cursor:pointer;' onclick='deleting(".$row['id'].");'>Delete</a>"."</td>.</tr>";
        echo $table;             
                 
             }
      
     
             mysql_close();
            
               
      }
    
}