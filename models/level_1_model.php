<?php

class Level_1_model extends Model{

    function __construct() {
        parent::__construct();   
    }
    
    public function adduser()
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
               
      }
    
    
     public function listuser()
     {
      $query1=sprintf("SELECT * FROM users WHERE level between '%s' and '%s'", mysql_real_escape_string('2'),mysql_real_escape_string('4'));
    
      $result=mysql_query($query1);
             while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
    $table="<tr id=".$row['id']."><td id=name-".$row['id'].">".$row['name']."</td>"."<td id=description-".$row['id'].">".$row['desciption']."</td>"."<td id=username-".$row['id'].">".$row['username']."</td>"."<td id=update-".$row['id'].">"."<a href='#' onclick='update(".$row['id'].");'>Update</a>"."</td>"."<td id=delete-".$row['id'].">"."<a href='#' onclick='deleting(".$row['id'].");'>Delete</a>"."</td>.</tr>";
        echo $table;             
                 
             }
      
    
     }
    
    
    
    
    
    
    
}




        
   
