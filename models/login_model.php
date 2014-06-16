<?php

class Login_model extends Model{

    public function __construct() {
        parent::__construct();   
    }
    public function run()
    {
        
     
      $sth=$this->db->prepare('INSERT INTO users (name,email,phone_number,flag) VALUES (:name, :email, :phonenumber,true)');;
      $sth->execute(array(
          ':name'=>$_POST['name'],
          ':email'=>$_POST['email'],
          ':phonenumber'=>$_POST['phonenumber']
      ));
      $data=  $this->db->prepare('select * from users');
      $data->execute();
      $data1=$data->fetchAll();
      echo '<h1>Users Details :</h1>'.'<br />';
      echo '<table>';
      echo '<tr><td>Name:</td><td>Email:</td><td>Phone Number:</td></tr>';
      
    for($row=0;$row<count($data1);$row++)
    {
        
        
        echo '<tr><td>'.$data1[$row]['name'].'</td>'.' '.'<td>'.$data1[$row]['email'].'<td>'.$data1[$row]['phone_number'].'</td></tr>';
        
        
    }
     echo '</table>';
    }
 
}