

<?php
@session_start();
ob_start();
class Login_model extends Model{

    function __construct() {
        parent::__construct();   
    }
    public function userpassword()
    {
        
        
       
        $query1=sprintf("SELECT * FROM users WHERE email='%s' and password='%s'", mysql_real_escape_string($_POST['email']),mysql_real_escape_string($_POST['password']));


        
        if($result=mysql_query($query1))
        {
        while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
    
             if(count($row)>0)
             {
                 $_SESSION['email']=$row['email'];
                 $_SESSION['password']=$row['password'];
                 $_SESSION['username']=$row['username'];
                 $_SESSION['Level']=$row['level'];
                 echo $_SESSION['Level']."/".$_SESSION['username'];
             }
             else
             {
                 echo 'failure';
             }
            }
            
        }
        
 
 

 


       
      
      

      
      
  
  
   



  
   

    }
    
}




        
   
