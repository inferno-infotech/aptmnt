<?php

class Levelfourack_model extends Model{

    function __construct() {
        parent::__construct();   
    }

    function updatelevelfouruser()
    {
$query3="Select * from users where username='".$_POST['level4username']."' and password='".$_POST['level4password']."'" ;
$result= mysql_query($query3);
while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
{
        if($row['level']=='4'&& $row['levelfourack']!='1')
        {
            $query2="UPDATE users SET levelfourack='1' WHERE username='".$_POST['level4username']."' and  password='".$_POST['level4password']."' and level='4' ";
if(mysql_query($query2))
{echo 'Acknowledgement confirmed. Opening previous page.......';}
else
{
  echo 'Sorry your account has been not created please contact the admin. Opening previous page.......';  
}
              
 
    
        }
        
else if($row['levelfourack']=='1')
{
    echo $row['name']."! Dont worry you had been acknowledged your username is ".$row['username']." and your password is ".$row['password']." Please keep this noted. Thank You. Opening prevoius page.... ";
}
        
        else
{
echo "You are not level 4 user.It's look like you are admin. Can't acknowledge you sorry. Opening previous page.......";            
}
        
        
                
                }
        
        
        

} 
  mysql_close();      
    }
}


?>