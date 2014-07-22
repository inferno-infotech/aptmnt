<?php

class Level_3_model extends Model{

    function __construct() {
        parent::__construct();   
    }
    
    public function adduser()
    {
      $query=sprintf("INSERT INTO users
               (name,desciption,username,password,level,email,phonenumber,Parentlevelid,leadsusername)
               VALUES
               ('%s','%s','%s','%s','%s','%s','%s','%s','%s')",
               mysql_real_escape_string($_POST['name3']),
               mysql_real_escape_string($_POST['description3']),
               mysql_real_escape_string($_POST['username3']),
               mysql_real_escape_string($_POST['password3']),
              mysql_real_escape_string($_POST['inputlevel3']),
               mysql_real_escape_string($_POST['email3']),
               mysql_real_escape_string($_POST['phonenumber3']),
              mysql_real_escape_string($_POST['level3id']),
              mysql_real_escape_string($_POST['level3user']));
       
            if(mysql_query($query))
                echo 'success';     
            
            $query1="SELECT * FROM users where id=LAST_INSERT_ID()";
            $result= mysql_query($query1);
            
            while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
    $table="<tr id=".$row['id']."><td id=name-".$row['id'].">".$row['name']."</td>"."<td id=description-".$row['id'].">".$row['desciption']."</td>"."<td id=username-".$row['id'].">".$row['username']."</td>"."<td id=password-".$row['id'].">".$row['password']."</td>"."<td id=level-".$row['id'].">".$row['level']."</td>"."<td id=createdon-".$row['id'].">".$row['created_on']."</td>"."<td id=email-".$row['id'].">".$row['email']."</td>"."<td id=phonenumber-".$row['id'].">".$row['phonenumber']."</td>"."<td id=update-".$row['id'].">"."<a style='cursor:pointer;' onclick='update3(".$row['id'].");'>Update</a>"."</td>"."<td id=delete-".$row['id'].">"."<a style='cursor:pointer;' onclick='deleting3(".$row['id'].");'>Delete</a>"."</td>.</tr>";
        echo $table;             
                 
             }
             mysql_close();
            
               
      }
    
    
     public function listuser()
     {
//      $query1=sprintf("SELECT * FROM users WHERE level = '%s'", mysql_real_escape_string('4'));
//    
//      $result=mysql_query($query1);
//             while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
//   $table="<tr id=".$row['id']."><td id=name-".$row['id'].">".$row['name']."</td>"."<td id=description-".$row['id'].">".$row['desciption']."</td>"."<td id=username-".$row['id'].">".$row['username']."</td>"."<td id=password-".$row['id'].">".$row['password']."</td>"."<td id=level-".$row['id'].">".$row['level']."</td>"."<td id=createdon-".$row['id'].">".$row['created_on']."</td>"."<td id=email-".$row['id'].">".$row['email']."</td>"."<td id=phonenumber-".$row['id'].">".$row['phonenumber']."</td>"."<td id=update-".$row['id'].">"."<a style='cursor:pointer;' onclick='update3(".$row['id'].");'>Update</a>"."</td>"."<td id=delete-".$row['id'].">"."<a style='cursor:pointer;' onclick='deleting3(".$row['id'].");'>Delete</a>"."</td>.</tr>";
//        echo $table;             
                 
//             }
      
    
     }
     
     
     public function listuserlevel3($concat)
     {
      $array=split(" ",$concat);
      $level=$concat[0];
      $id=$concat[1];
         $query1=sprintf("SELECT * FROM users WHERE level = '%s' and Parentlevelid='%s'", mysql_real_escape_string($level),mysql_real_escape_string($id));
    
      $result=mysql_query($query1);
             while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
   $table="<tr id=".$row['id']."><td id=name-".$row['id'].">".$row['name']."</td>"."<td id=description-".$row['id'].">".$row['desciption']."</td>"."<td id=username-".$row['id'].">".$row['username']."</td>"."<td id=password-".$row['id'].">".$row['password']."</td>"."<td id=level-".$row['id'].">".$row['level']."</td>"."<td id=createdon-".$row['id'].">".$row['created_on']."</td>"."<td id=email-".$row['id'].">".$row['email']."</td>"."<td id=phonenumber-".$row['id'].">".$row['phonenumber']."</td>"."<td id=update-".$row['id'].">"."<a style='cursor:pointer;' onclick='update3(".$row['id'].");'>Update</a>"."</td>"."<td id=delete-".$row['id'].">"."<a style='cursor:pointer;' onclick='deleting3(".$row['id'].");'>Delete</a>"."</td>.</tr>";
        echo $table;             
                 
             }
      
    
     }
     
     
     
    
     public function delete3($id)
 {
   $query1="DELETE FROM users WHERE id=".$id;
   mysql_query($query1);
   
    //$asif="<tr id=".$row['id']."><td id=name-".$row['id'].">".$row['name']."</td>"."<td id=email-".$row['id'].">".$row['email']."</td>"."<td id=phone-".$row['id'].">".$row['phone_number']."</td>"."<td id=update-".$row['id'].">"."<a href='#' onclick='update(".$row['id'].");'>Update</a>"."</td>"."<td id=delete-".$row['id'].">"."<a href='#' onclick='deleting(".$row['id'].");'>Delete</a>"."</td>.</tr>";
    echo $id;
    mysql_close();
     
 }
    
 public function update3($id)
{
   
  
   
   $query2=sprintf("UPDATE users SET name='%s',desciption='%s',username='%s',password='%s',level='%s',email='%s',phonenumber='%s'  WHERE id=$id",
                   mysql_real_escape_string($_POST['name3']),
               mysql_real_escape_string($_POST['description3']),
               mysql_real_escape_string($_POST['username3']),
               mysql_real_escape_string($_POST['password3']),
              mysql_real_escape_string($_POST['inputlevel3']),
               mysql_real_escape_string($_POST['email3']),
               mysql_real_escape_string($_POST['phonenumber3']));
if(mysql_query($query2))
{echo 'success';}
              
 mysql_close();
    
}
   
    
    
    
}




        
   
