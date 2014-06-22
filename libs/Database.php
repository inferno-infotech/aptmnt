<?php

class Database{

    function __construct() {
       mysql_connect('localhost','root','1234');
       mysql_select_db('registration');
       
        }

}