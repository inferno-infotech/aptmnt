<?php

class Level_1_model extends Model{

    function __construct() {
        parent::__construct();   
    }
    
    public function adduser($level)
    {
      $query=sprintf("INSERT INTO users
               (name,desciption,username,password,level,email,phonenumber)
               VALUES
               ('%s','%s','%s','%s','%s','%s','%s')",
               mysql_real_escape_string($_POST['name']),
               mysql_real_escape_string($_POST['description']),
               mysql_real_escape_string($_POST['username']),
               mysql_real_escape_string($_POST['password']),
              mysql_real_escape_string($_POST['inputlevel']),
               mysql_real_escape_string($_POST['email']),
               mysql_real_escape_string($_POST['phonenumber']));
       
            if(mysql_query($query))
                echo 'success';     
            
            $query1="SELECT * FROM users where id=LAST_INSERT_ID() and level=".$level;
            $result= mysql_query($query1);
            
            while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
    $table="<tr id=".$row['id']."><td id=name-".$row['id'].">".$row['name']."</td>"."<td id=description-".$row['id'].">".$row['desciption']."</td>"."<td id=username-".$row['id'].">".$row['username']."</td>"."<td id=password-".$row['id'].">".$row['password']."</td>"."<td id=level-".$row['id'].">".$row['level']."</td>"."<td id=createdon-".$row['id'].">".$row['created_on']."</td>"."<td id=email-".$row['id'].">".$row['email']."</td>"."<td id=phonenumber-".$row['id'].">".$row['phonenumber']."</td>"."<td id=update-".$row['id'].">"."<a style='cursor:pointer;' onclick='update(".$row['id'].");'>Update</a>"."</td>"."<td id=delete-".$row['id'].">"."<a style='cursor:pointer;' onclick='deleting(".$row['id'].");'>Delete</a>"."</td>.</tr>";
        echo $table;             
                 
             }
             mysql_close();
            
               
      }
    
    
//     public function listuser()
//     {
//      $query1=sprintf("SELECT * FROM users WHERE level between '%s' and '%s'", mysql_real_escape_string('2'),mysql_real_escape_string('4'));
//    
//      $result=mysql_query($query1);
//             while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
//   $table="<tr id=".$row['id']."><td id=name-".$row['id'].">".$row['name']."</td>"."<td id=description-".$row['id'].">".$row['desciption']."</td>"."<td id=username-".$row['id'].">".$row['username']."</td>"."<td id=password-".$row['id'].">".$row['password']."</td>"."<td id=level-".$row['id'].">".$row['level']."</td>"."<td id=createdon-".$row['id'].">".$row['created_on']."</td>"."<td id=email-".$row['id'].">".$row['email']."</td>"."<td id=phonenumber-".$row['id'].">".$row['phonenumber']."</td>"."<td id=update-".$row['id'].">"."<a style='cursor:pointer;' onclick='update(".$row['id'].");'>Update</a>"."</td>"."<td id=delete-".$row['id'].">"."<a style='cursor:pointer;' onclick='deleting(".$row['id'].");'>Delete</a>"."</td>"."<td id=calendar-".$row['id'].">"."<a href=http://localhost/appointment/sample?levelid=".$row['level'].">Calendar</a>"."</td>"."<td id=leads-".$row['id'].">"."<a href=http://localhost/appointment/leads?leadslevel=".$row['level'].">leads</a>"."</td>.</tr>";
//        echo $table;             
//                 
//             }
//      
//    
//     }
     
     public function listuserlevel($level)
     {
       $query1=sprintf("SELECT * FROM users WHERE level = '%s'", mysql_real_escape_string($level));  
         
         $result=mysql_query($query1);
             while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
   $table="<tr id=".$row['id']."><td id=name-".$row['id'].">".$row['name']."</td>"."<td id=description-".$row['id'].">".$row['desciption']."</td>"."<td id=username-".$row['id'].">".$row['username']."</td>"."<td id=password-".$row['id'].">".$row['password']."</td>"."<td id=level-".$row['id'].">".$row['level']."</td>"."<td id=createdon-".$row['id'].">".$row['created_on']."</td>"."<td id=email-".$row['id'].">".$row['email']."</td>"."<td id=phonenumber-".$row['id'].">".$row['phonenumber']."</td>"."<td id=update-".$row['id'].">"."<a style='cursor:pointer;' onclick='update(".$row['id'].");'>Update</a>"."</td>"."<td id=delete-".$row['id'].">"."<a style='cursor:pointer;' onclick='deleting(".$row['id'].");'>Delete</a>"."</td>"."<td id=calendar-".$row['id'].">"."<a href=http://localhost/appointment/sample?levelid=".$row['level'].">Calendar</a>"."</td>"."<td id=leads-".$row['id'].">"."<a href=http://localhost/appointment/leads?leadslevel=".$row['level']."&leadsusername=".$row['username'].">leads</a>"."</td>.</tr>";
        echo $table;             
                 
             }
         mysql_close();
     }
     
     
     
     
     
     
     
     
     
     
    
     public function delete($id)
 {
   $query1="DELETE FROM users WHERE id=".$id;
   mysql_query($query1);
   
    //$asif="<tr id=".$row['id']."><td id=name-".$row['id'].">".$row['name']."</td>"."<td id=email-".$row['id'].">".$row['email']."</td>"."<td id=phone-".$row['id'].">".$row['phone_number']."</td>"."<td id=update-".$row['id'].">"."<a href='#' onclick='update(".$row['id'].");'>Update</a>"."</td>"."<td id=delete-".$row['id'].">"."<a href='#' onclick='deleting(".$row['id'].");'>Delete</a>"."</td>.</tr>";
    echo $id;
    mysql_close();
     
 }
    
 public function update($id)
{
   
  
   
   $query2=sprintf("UPDATE users SET name='%s',desciption='%s',username='%s',password='%s',level='%s',email='%s',phonenumber='%s'  WHERE id=$id",
                   mysql_real_escape_string($_POST['name']),
               mysql_real_escape_string($_POST['description']),
               mysql_real_escape_string($_POST['username']),
               mysql_real_escape_string($_POST['password']),
              mysql_real_escape_string($_POST['inputlevel']),
               mysql_real_escape_string($_POST['email']),
               mysql_real_escape_string($_POST['phonenumber']));
if(mysql_query($query2))
{echo 'success';}
              
 mysql_close();
    
}
   
    
    
    
}




        
   
