<?php

class Find_model extends Model{

    function __construct() {
        parent::__construct();   
    }
    function findemailandid()
    {
       
      
        
        $query1=sprintf("SELECT * FROM users WHERE username = '%s' and email ='%s'", mysql_real_escape_string($_POST['id123']), mysql_real_escape_string($_POST['email1234']));
    
      $result=mysql_query($query1);
      
             while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
                 
             echo $row['id'];
         
     }
        
        
        
    }
   
}



    





        
   
