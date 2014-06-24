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
               
              
                });
                        return false;
                });

            });
            
            
        $(document).ready(function(){
   $.get("level_1/listuser",function(data){
     $("#level1table").append(data);
   }); 
});

    
       
   

        
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
      
   