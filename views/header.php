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
                 data1=data.split("/");
                  loadvalues(data1[1]);
                  if(data1[0]==1)
                      window.location.href = "http://localhost/appointment/level_1";
                  if(data1[0]==2)
                      window.location.href = "http://localhost/appointment/level_2";
                  if(data1[0]==3)
                      window.location.href = "http://localhost/appointment/level_3";
                  
                  
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

 
 function loadvalues(values)
 {
     $("#level1").ready(function(){
        alert('Welcome user '+values);
        
     });
     
 }
 
 
      $(document).ready(function(){
   $.get("level_2/listuser",function(data){
     $("#level2table").append(data);
   }); 
});
 
 
 $(document).ready(function(){
            $("#level2login").submit(function(){
             $.post('level_2/adduser', $('#level2login').serialize(), function(data) {
               $("#level2table").append(data);
               $("#name2").val("");
               $("#description2").val("");
              $("#username2").val("");
              $("#password2").val("");
              $("#email2").val("");
              $("#phonenumber2").val("");
              $("#inputlevel2").val("3");
              
                });
                        return false;
                });

            });
            
 
 
   function deleting2($id)
{
     posta="level_2/delete2/"+$id;
     deletea="#"+$id;
     $(document).ready(function(){
    
      $.post(posta, $("#level2login").serialize(), function(data) {
       $(deletea).remove();
       
      
       

                    });
     
    });
        
}
   
 
 
 
 function update2($id)
{
     
     
     var nameupdate="#name"+"-"+$id;
     var descriptionupdate="#description"+"-"+$id;
     var usernameupdate="#username"+"-"+$id;
     var passwordupdate="#password"+"-"+$id;   
     var inputlevelupdate="#level"+"-"+$id;    
    var emailupdate="#email"+"-"+$id;
    var phoneupdate="#phonenumber"+"-"+$id;
    var update="<input type='button' name='update' value='update' id='updatetable2' onclick='updatesecond2("+$id+");'/>" ;
     $(document).ready(function(){
     $("#updatetable2").remove();
     $("#description2").val($(descriptionupdate).html());
     $("#name2").val($(nameupdate).html());
     $("#username2").val($(usernameupdate).html());
     $("#password2").val($(passwordupdate).html());
     $("#inputlevel2").val($(inputlevelupdate).html());
     $("#email2").val($(emailupdate).html());
     $("#phonenumber2").val($(phoneupdate).html());
     $("#submitolevel2").remove();
     
     $("#level2login").append(update);
     
    });
        
}  

function updatesecond2($id)
{
   var nameupdate="#name"+"-"+$id;
     var descriptionupdate="#description"+"-"+$id;
     var usernameupdate="#username"+"-"+$id;
     var passwordupdate="#password"+"-"+$id;   
     var inputlevelupdate="#level"+"-"+$id;    
    var emailupdate="#email"+"-"+$id;
    var phoneupdate="#phonenumber"+"-"+$id;
    var posta="level_2/update2/"+$id;
    $(document).ready(function(){
     $.post(posta, $('#level2login').serialize(), function(data) {
      
      
      $(nameupdate).html($("#name2").val()); 
      $(descriptionupdate).html($("#description2").val()); 
      $(usernameupdate).html($("#username2").val());
      $(passwordupdate).html($("#password2").val());
      $(inputlevelupdate).html($("#inputlevel2").val());
      $(emailupdate).html($("#email2").val()); 
     $(phoneupdate).html($("#phonenumber2").val());
      $("#updatetable2").remove();
      $("#level2login").append("<label></label><input type='submit' id='submitolevel2'  />");
      $("#name2").val("");
     $("#description2").val("");
     $("#username2").val("");
     $("#password2").val("");
     $("#inputlevel2").val("2");
     $("#email2").val("");
     $("#phonenumber2").val("");
     

                    });   
    });
    
}

 
 
  $(document).ready(function(){
   $.get("level_3/listuser",function(data){
     $("#level3table").append(data);
   }); 
});
 
 
 $(document).ready(function(){
            $("#level3login").submit(function(){
             $.post('level_3/adduser', $('#level3login').serialize(), function(data) {
               $("#level3table").append(data);
               $("#name3").val("");
               $("#description3").val("");
              $("#username3").val("");
              $("#password3").val("");
              $("#email3").val("");
              $("#phonenumber3").val("");
              $("#inputlevel3").val("4");
              
                });
                        return false;
                });

            });
            
 
 function deleting3($id)
{
     posta="level_3/delete3/"+$id;
     deletea="#"+$id;
     $(document).ready(function(){
    
      $.post(posta, $("#level3login").serialize(), function(data) {
       $(deletea).remove();
       
      
       

                    });
     
    });
        
} 
 
 
 function update3($id)
{
     
     
     var nameupdate="#name"+"-"+$id;
     var descriptionupdate="#description"+"-"+$id;
     var usernameupdate="#username"+"-"+$id;
     var passwordupdate="#password"+"-"+$id;   
     var inputlevelupdate="#level"+"-"+$id;    
    var emailupdate="#email"+"-"+$id;
    var phoneupdate="#phonenumber"+"-"+$id;
    var update="<input type='button' name='update' value='update' id='updatetable3' onclick='updatesecond3("+$id+");'/>" ;
     $(document).ready(function(){
     $("#updatetable3").remove();
     $("#description3").val($(descriptionupdate).html());
     $("#name3").val($(nameupdate).html());
     $("#username3").val($(usernameupdate).html());
     $("#password3").val($(passwordupdate).html());
     $("#inputlevel3").val($(inputlevelupdate).html());
     $("#email3").val($(emailupdate).html());
     $("#phonenumber3").val($(phoneupdate).html());
     $("#submitolevel3").remove();
     
     $("#level3login").append(update);
     
    });
        
}  

function updatesecond3($id)
{
   var nameupdate="#name"+"-"+$id;
     var descriptionupdate="#description"+"-"+$id;
     var usernameupdate="#username"+"-"+$id;
     var passwordupdate="#password"+"-"+$id;   
     var inputlevelupdate="#level"+"-"+$id;    
    var emailupdate="#email"+"-"+$id;
    var phoneupdate="#phonenumber"+"-"+$id;
    var posta="level_3/update3/"+$id;
    $(document).ready(function(){
     $.post(posta, $('#level3login').serialize(), function(data) {
      
      
      $(nameupdate).html($("#name3").val()); 
      $(descriptionupdate).html($("#description3").val()); 
      $(usernameupdate).html($("#username3").val());
      $(passwordupdate).html($("#password3").val());
      $(inputlevelupdate).html($("#inputlevel3").val());
      $(emailupdate).html($("#email3").val()); 
     $(phoneupdate).html($("#phonenumber3").val());
      $("#updatetable3").remove();
      $("#level3login").append("<label></label><input type='submit' id='submitolevel3'  />");
      $("#name3").val("");
     $("#description3").val("");
     $("#username3").val("");
     $("#password3").val("");
     $("#inputlevel3").val("4");
     $("#email3").val("");
     $("#phonenumber3").val("");
     

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
      
   