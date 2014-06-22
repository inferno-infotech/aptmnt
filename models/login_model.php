<?php

class Login_model extends Model{

    function __construct() {
        parent::__construct();   
    }
    public function initiate()
    {
        
        $query1="select * from users";
  $result= mysql_query($query1);
  
  while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
    $asif="<tr id=".$row['id']."><td id=name-".$row['id'].">".$row['name']."</td>"."<td id=email-".$row['id'].">".$row['email']."</td>"."<td id=phone-".$row['id'].">".$row['phone_number']."</td>"."<td id=update-".$row['id'].">"."<a href='#' onclick='update(".$row['id'].");'>Update</a>"."</td>"."<td id=delete-".$row['id'].">"."<a href='#' onclick='deleting(".$row['id'].");'>Delete</a>"."</td>.</tr>";
    echo $asif;
}

mysql_close();
  
   
      
//   for($row=0;$row<count($data1);$row++)
//    {
//        
//        
//        echo '<tr><td>'.$data1[$row]['name'].'</td>'.' '.'<td>'.$data1[$row]['email'].'<td>'.$data1[$row]['phone_number'].'</td></tr>';
//        
//        
//    }  
    }
    
   public function run()
    {
     $query="INSERT INTO users(name,email,phone_number)VALUES('$_POST[name]','$_POST[email]','$_POST[phonenumber]')";
              
     if(mysql_query($query))
     {echo 'success';}
     else
     {echo 'failure';}
    
   $query1="SELECT * FROM users where id=LAST_INSERT_ID()";
  $result= mysql_query($query1);
 
  
  
  while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
    $asif="<tr id=".$row['id']."><td id=name-".$row['id'].">".$row['name']."</td>"."<td id=email-".$row['id'].">".$row['email']."</td>"."<td id=phone-".$row['id'].">".$row['phone_number']."</td>"."<td id=update-".$row['id'].">"."<a href='#' onclick='update(".$row['id'].");'>Update</a>"."</td>"."<td id=delete-".$row['id'].">"."<a href='#' onclick='deleting(".$row['id'].");'>Delete</a>"."</td>.</tr>";
    echo $asif;
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
   echo $id; 
  $namex= $_POST['name'];
   $emailx=$_POST['email'];
  $phonenumberx=$_POST['phonenumber'];
   
   $query2=  sprintf("UPDATE users
                     SET name='%s',email='%s',phone_number='%s'
                   WHERE id=$id",
                   mysql_real_escape_string($namex),
               mysql_real_escape_string($emailx),
               mysql_real_escape_string($phonenumberx));
   mysql_query($query2);
              
 mysql_close();
    
}



}
        
   
