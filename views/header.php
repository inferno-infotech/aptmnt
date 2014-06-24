<html>


    <head>
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>Styles/Stylesheet.css" />
        <script src="<?php echo BASE_URL;?>js/jquery.min.js"></script>
        <script src="<?php echo BASE_URL;?>js/bic_calendar.js"></script>
        <script src="<?php echo BASE_URL;?>js/bic_calendar.min.js"></script>
        <script src="<?php echo BASE_URL;?>js/jquery.session.js"></script>
        <script type="text/javascript">
        $(document).ready(function(){
            $("#login").submit(function(){
               $.post('login/userpassword', $('#login').serialize(), function(data) {
                 
                
                  if(data==1)
                      window.location.href = "http://localhost/appointment/level_1";
                  if(data==2)
                      window.location.href = "http://localhost/appointment/level_2";
                  if(data==3)
                      window.location.href = "http://localhost/appointment/level_3";
                  if(data==4)
                      window.location.href = "http://localhost/appointment/level_4";
                  
                    });
                    return false;
                });

            });
            
            
            
            $(document).ready(function(){
            $("#level1login").submit(function(){
             $.post('level_1/adduser', $('#level1login').serialize(), function(data) {
               $("#level1table").append(data);
               $("#name").val("");
               $("#description").val("");
              $("#username").val("");
              $("#password").val("");
              $("#email").val("");
              $("#phonenumber").val("");
              $("#inputlevel").val("2");
              
                });
                        return false;
                });

            });
            
            
        $(document).ready(function(){
   $.get("level_1/listuser",function(data){
     $("#level1table").append(data);
   }); 
});

    
       
   
   function deleting($id)
{
     posta="level_1/delete/"+$id;
     deletea="#"+$id;
     $(document).ready(function(){
    
      $.post(posta, $("#level1login").serialize(), function(data) {
       $(deletea).remove();
       
      
       

                    });
     
    });
        
}
   
   
   
   function update($id)
{
     
     
     var nameupdate="#name"+"-"+$id;
     var descriptionupdate="#description"+"-"+$id;
     var usernameupdate="#username"+"-"+$id;
     var passwordupdate="#password"+"-"+$id;   
     var inputlevelupdate="#level"+"-"+$id;    
    var emailupdate="#email"+"-"+$id;
    var phoneupdate="#phonenumber"+"-"+$id;
    var update="<input type='button' name='update' value='update' id='updatetable' onclick='updatesecond("+$id+");'/>" ;
     $(document).ready(function(){
     $("#updatetable").remove();
     $("#description").val($(descriptionupdate).html());
     $("#name").val($(nameupdate).html());
     $("#username").val($(usernameupdate).html());
     $("#password").val($(passwordupdate).html());
     $("#inputlevel").val($(inputlevelupdate).html());
     $("#email").val($(emailupdate).html());
     $("#phonenumber").val($(phoneupdate).html());
     $("#submitolevel1").remove();
     
     $("#level1login").append(update);
     
    });
        
}  

function updatesecond($id)
{
   var nameupdate="#name"+"-"+$id;
     var descriptionupdate="#description"+"-"+$id;
     var usernameupdate="#username"+"-"+$id;
     var passwordupdate="#password"+"-"+$id;   
     var inputlevelupdate="#level"+"-"+$id;    
    var emailupdate="#email"+"-"+$id;
    var phoneupdate="#phonenumber"+"-"+$id;
    var posta="level_1/update/"+$id;
    $(document).ready(function(){
     $.post(posta, $('#level1login').serialize(), function(data) {
      
      
      $(nameupdate).html($("#name").val()); 
      $(descriptionupdate).html($("#description").val()); 
      $(usernameupdate).html($("#username").val());
      $(passwordupdate).html($("#password").val());
      $(inputlevelupdate).html($("#inputlevel").val());
      $(emailupdate).html($("#email").val()); 
     $(phoneupdate).html($("#phonenumber").val());
      $("#updatetable").remove();
      $("#level1login").append("<label></label><input type='submit' id='submitolevel1'  />");
      $("#name").val("");
     $("#description").val("");
     $("#username").val("");
     $("#password").val("");
     $("#inputlevel").val("2");
     $("#email").val("");
     $("#phonenumber").val("");
     

                    });   
    });
    
}

   
   

        
        </script>
        
        
       
</head>
        <body>
        <!--<script type="text/javascript">
        //$(document).ready( function(){

	//mesos = ["Gener", "Febrer", "Març", "Abril", "Maig", "Juny", "Juliol", "Agost", "Setembre", "Octubre", "Novembre", "Dicembre"];

	//dias = ["L", "M", "M", "J", "V", "S", "D"];

    //$('#calendari_lateral1').bic_calendar({
      //  nombresMes: mesos,
        //dias: dias,
        //req_ajax: {
        //	type: 'get',
        //	url: 'index.php'
        //}
   // });
//} );
        </script>-->
      
   