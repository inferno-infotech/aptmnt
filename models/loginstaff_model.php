<?php

class Loginstaff_model extends Model{

    function __construct() {
        parent::__construct();   
    }
    public function userpassword()
    {
        
        
       
        $query1=sprintf("SELECT * FROM users WHERE username='%s' and password='%s'", mysql_real_escape_string($_POST['userid']),mysql_real_escape_string($_POST['userpassword']));


        
        if($result=mysql_query($query1))
        {
        while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
    
             echo $row['id']." ".$row['name'];
             
             
            }
            
        }
        
 
 

 


       
      
      

      
      
  
  
   



  
   

    }
    
}


