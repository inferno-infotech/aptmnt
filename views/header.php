<html>


    <head>

             
         
        
        
        
        
        
        

        <script src="<?php echo BASE_URL;?>js/jquery.min.js"></script>
       
        <script src="<?php echo BASE_URL;?>js/jquery.session.js"></script>        
        
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>Styles/anytime.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>Styles/Stylesheet.css" />
     
        <script type="text/javascript" src="js/jquery-1.7.1.js"></script>
    <script type="text/javascript" src="js/jquery.ui.core.js"></script>
    <script type="text/javascript" src="js/jquery.ui.widget.js"></script>
    <script type="text/javascript" src="js/jquery.ui.datepicker.js"></script>
    <script type="text/javascript" src="jsDateTimePickerV1/DateTimePicker.js"></script>
        
      
	<link type="text/css" href="Styles/jquery.ui.theme.css" rel="stylesheet" />
    <link type="text/css" href="Styles/jquery.ui.datepicker.css" rel="stylesheet" />
    <link type="text/css" href="Styles/demos.css" rel="stylesheet" />  
       
    <style type="text/css">
		input {
			margin-right: 5px;
		}		
	</style>
    
        
        <script type="text/javascript">
     var level=""; 
     
  
     
     
     
   
 function levelfunction($level)
 {
   level=$level;
     if($level==2)
     {
         
        
            $("#level1table").css("visibility", "visible");
            $("#level1table").html(" ");
     posta="level_1/listuserlevel/"+$level;
       $(document).ready(function(){
   $.get(posta,function(data){
     $("#level1table").append(data);
   }); 
});

        }   
        
        
        if($level==3)
     {
         
        
            $("#level1table").css("visibility", "visible");
            $("#level1table").html(" ");
     posta="level_1/listuserlevel/"+$level;
       $(document).ready(function(){
   $.get(posta,function(data){
     $("#level1table").append(data);
   }); 
});

        }   
        
        
        
        
        
        
        }
    
    
    
  
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    $(document).ready(function(){
            
            
              
            
            
            $("#login").submit(function(){
                
             var email123=$("#email123").val();
           var pass1=verifyemail(email123);
             var password123=$("#password123").val();
            var pass2=verifypass(password123);
            if(pass1==true && pass2==true)
            {
               $.post('login/userpassword', $('#login').serialize(), function(data) {
                 data1=data.split("/");
                  alert(data1[0]);
                  if(data1[0]==1)
                      window.location.href = "http://localhost/appointment/level_1?username="+data1[1];
                  if(data1[0]==2)
                      window.location.href = "http://localhost/appointment/level_2";
                  if(data1[0]==3)
                      window.location.href = "http://localhost/appointment/level_3";
                  if(data1[0]==4)
                      window.location.href = "http://localhost/appointment/sample?user=leads";
                  
                  
                    });}
                    return false;
                });

            });
            
    
            
            $(document).ready(function(){
            $("#level1login").submit(function(){
             $.post('level_1/adduser/'+level, $('#level1login').serialize(), function(data) {
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

 
 
 
 
 function verifyemail(emailverify)
 {
     var bool=true;
        if(emailverify.length==0)
     {
        $("#emailcheck").html(" #Email can't be empty"); 
        bool = false;
     }
//     for(var i=0;i<emailverify.length;i++)
//     {
//         if(emailverify.charAt(i)=="@")
//         { $("#emailcheck").html(" #Invalid email");
//            bool=false;   }
//     }
//     
    return bool; 
     
 }
 
 function verifypass(passverify)
 {
     var bool=true;
     if(passverify.length==0)
     {
        $("#passwordcheck").html(" #Password can't be empty"); 
        bool=false;
     }
     
     return bool;
 }
 
 
 
 
 $(document).ready(function(){
            $("#leadslogin").submit(function(){
             $.post('leads/adduser', $('#leadslogin').serialize(), function(data) {
               $("#leadstable").append(data);
               $("#leadsname").val("");
               $("#leadsdescription").val("");
              $("#leadsusername").val("");
              $("#leadspassword").val("");
              $("#leadsemail").val("");
              $("#leadsphonenumber").val("");
              
              
                });
                        return false;
                });

            });
 
 //appointment form
 
        
        

//    $(function () {
//    		$("#datetime").datepicker({ showOn: "button", buttonImage: "Styles/images/calendar.gif", buttonImageOnly: true });
//    		$("#datetimepicker").datetimepicker();
//                
//                $("#datetime1").datepicker({ showOn: "button", buttonImage: "Styles/images/calendar.gif", buttonImageOnly: true });
//    		$("#datetimepicker1").datetimepicker();
//                
//                
//    	}); 

$(document).ready(function(){
 $("#datetime").datepicker({ showOn: "button", buttonImage: "Styles/images/calendar.gif", buttonImageOnly: true });
// $("#datetimepicker").datetimepicker();
// $("#datetimepicker1").datetimepicker(); 
// 
// $("#datetimepickertime").datetimepicker(); 
// $("#datetimepickertime1").datetimepicker(); 
// $("#datetimepickertimea").datetimepicker(); 
// $("#datetimepickertimea1").datetimepicker(); 
// $("#datetimepickertimeab").datetimepicker(); 
// $("#datetimepickertimeab1").datetimepicker(); 
// $("#datetimepickertimeabc").datetimepicker(); 
// $("#datetimepickertimeabc1").datetimepicker(); 
// $("#datetimepickertimeabcd").datetimepicker(); 
// $("#datetimepickertimeabcd1").datetimepicker(); 
// $("#datetimepickertimeabcde").datetimepicker(); 
// $("#datetimepickertimeabcde1").datetimepicker(); 

});


//$('#checkbox').click(function(){
//    if (this.checked) {
//        alert(1);
//    }
//}) 





var countdate=2;
var countdate1=2;
var countdate2=2;
var countdate3=2;
var countdate4=2;
var countdate5=2;
var countdate6=2;

function addingmore(county)
{
if(county==1)
{ 
$("#formappointmentslots01").append("<div id=formslot"+countdate+"><label id=start"+countdate+" style='margin-left: 67px;margin-down:20px;'>Start Time:</label>&nbsp;<input id=datetimepicker"+countdate+" name=monstartdate"+countdate+" style='width:109px;height:16px;'  type='text' />&nbsp;&nbsp;<label id=end"+(countdate+1)+" style='margin-left: 15px;'>End Time:</label>&nbsp;<input id=datetimepicker"+(countdate+1)+" name=monenddate"+(countdate+1)+" style='width:109px;height:16px;'  type='text' /><br/></div>");
countdate=countdate+2;  
}
else if(county==2)
{
$("#formappointmentslots1").append("<div id=formslota"+countdate1+"><label style='margin-left: 67px;margin-down:20px;'>Start Time:</label>&nbsp;<input id=datetimepickertime"+countdate1+" name=tuestartdate"+countdate1+" style='width:109px;height:16px;'  type='text' />&nbsp;&nbsp;<label style='margin-left: 15px;'>End Time:</label>&nbsp;<input id=datetimepickertime"+(countdate1+1)+" name=tueenddate"+(countdate1+1)+" style='width:109px;height:16px;'  type='text' /><br/></div>");
countdate1=countdate1+2; 

}
else if(county==3)
{
   
$("#formappointmentslots2").append("<div id=formslotab"+countdate2+"><label style='margin-left: 67px;margin-down:20px;'>Start Time:</label>&nbsp;<input id=datetimepickertimea"+countdate2+" name=wedstartdate"+countdate2+" style='width:109px;height:16px;'  type='text' />&nbsp;&nbsp;<label style='margin-left: 15px;'>End Time:</label>&nbsp;<input id=datetimepickertimea"+(countdate2+1)+" name=wedenddate"+(countdate2+1)+" style='width:109px;height:16px;'  type='text' /><br/></div>");
countdate2=countdate2+2; 
}
else if(county==4)
{
$("#formappointmentslots3").append("<div id=formslotabc"+countdate3+"><label style='margin-left: 67px;margin-down:20px;'>Start Time:</label>&nbsp;<input id=datetimepickertimeab"+countdate3+" name=thursstartdate"+countdate3+" style='width:109px;height:16px;'  type='text' />&nbsp;&nbsp;<label style='margin-left: 15px;'>End Time:</label>&nbsp;<input id=datetimepickertimeab"+(countdate3+1)+" name=thursenddate"+(countdate3+1)+" style='width:109px;height:16px;'  type='text' /><br/></div>");
countdate3=countdate3+2; 
}
else if(county==5)
{
$("#formappointmentslots4").append("<div id=formslotabcd"+countdate4+"><label style='margin-left: 67px;margin-down:20px;'>Start Time:</label>&nbsp;<input id=datetimepickertimeabc"+countdate4+" name=fristartdate"+countdate4+" style='width:109px;height:16px;'  type='text' />&nbsp;&nbsp;<label style='margin-left: 15px;'>End Time:</label>&nbsp;<input id=datetimepickertimeabc"+(countdate4+1)+" name=frienddate"+(countdate4+1)+" style='width:109px;height:16px;'  type='text' /><br/></div>");
countdate4=countdate4+2; 
}
else if(county==6)
{
$("#formappointmentslots5").append("<div id=formslotabcde"+countdate5+"><label style='margin-left: 67px;margin-down:20px;'>Start Time:</label>&nbsp;<input id=datetimepickertimeabcd"+countdate5+" name=satstartdate"+countdate5+" style='width:109px;height:16px;'  type='text' />&nbsp;&nbsp;<label style='margin-left: 15px;'>End Time:</label>&nbsp;<input id=datetimepickertimeabcd"+(countdate5+1)+" name=satenddate"+(countdate5+1)+" style='width:109px;height:16px;'  type='text' /><br/></div>");
countdate5=countdate5+2; 
}
else if(county==7)
{
$("#formappointmentslots6").append("<div id=formslotabcdef"+countdate6+"><label style='margin-left: 67px;margin-down:20px;'>Start Time:</label>&nbsp;<input id=datetimepickertimeabcde"+countdate6+" name=sunstartdate"+countdate6+" style='width:109px;height:16px;'  type='text' />&nbsp;&nbsp;<label style='margin-left: 15px;'>End Time:</label>&nbsp;<input id=datetimepickertimeabcde"+(countdate6+1)+" name=sunenddate"+(countdate6+1)+" style='width:109px;height:16px;'  type='text' /><br/></div>");
countdate6=countdate6+2; 
}

  
  


}







$(document).ready(function(){
       
       
        
        $("#datetimepicker").hide(); 
          $("#datetimepicker1").hide(); 
          $("#start").hide(); 
          $("#end").hide(); 
//          $("#mon").hide(); 
          $("#monaddmore").hide();  
          
          $("#datetimepickertime").hide(); 
          $("#datetimepickertime1").hide(); 
          $("#tuestart").hide(); 
          $("#tueend").hide(); 
//          $("#tue").hide(); 
          $("#tueaddmore").hide();  
          
          
          $("#datetimepickertimea").hide(); 
          $("#datetimepickertimea1").hide(); 
          $("#wedstart").hide(); 
          $("#wedend").hide(); 
//          $("#tue").hide(); 
          $("#wedaddmore").hide();  
          
           
          $("#datetimepickertimeab").hide(); 
          $("#datetimepickertimeab1").hide(); 
          $("#thursstart").hide(); 
          $("#thursend").hide(); 
//          $("#tue").hide(); 
          $("#thursaddmore").hide(); 
          
          $("#datetimepickertimeabc").hide(); 
          $("#datetimepickertimeabc1").hide(); 
          $("#fristart").hide(); 
          $("#friend").hide(); 
//          $("#tue").hide(); 
          $("#friaddmore").hide(); 
          
          
        
        $("#datetimepickertimeabcd").hide(); 
          $("#datetimepickertimeabcd1").hide(); 
          $("#satstart").hide(); 
          $("#satend").hide(); 
//          $("#tue").hide(); 
          $("#sataddmore").hide(); 
          
        $("#datetimepickertimeabcde").hide(); 
        $("#datetimepickertimeabcde1").hide();
          $("#sunstart").hide(); 
          $("#sunend").hide(); 
//          $("#tue").hide(); 
          $("#sunaddmore").hide(); 
          
          
});

var selectcount=1;
var selectcount1=1;
var selectcount2=1;
var selectcount3=1;
var selectcount4=1;
var selectcount5=1;
var selectcount6=1;

function boxselect(select)
{
if(select==1)
{    
if(selectcount%2==1)
{$("#datetimepicker").show(); 
          $("#datetimepicker1").show(); 
          $("#start").show(); 
          $("#end").show(); 
          
          $("#monaddmore").show();  
          }
if(selectcount%2==0)
{
       
       
       while(countdate>2)
        {
        countdate--;
        $("#formslot"+countdate).remove();
       }
         $("#datetimepicker").hide(); 
          $("#datetimepicker1").hide(); 
          $("#datetimepicker").val(""); 
          $("#datetimepicker1").val(""); 
          
          $("#start").hide(); 
          $("#end").hide(); 
          $("#monaddmore").hide(); 
           
      
          }          
          selectcount++; 
          }        

if(select==2)
{    
if(selectcount1%2==1)
{$("#datetimepickertime").show(); 
          $("#datetimepickertime1").show(); 
          $("#tuestart").show(); 
          $("#tueend").show(); 
          
          $("#tueaddmore").show();  
          }
if(selectcount1%2==0)
{
    while(countdate1>2)
    {
        countdate1--;
        $("#formslota"+countdate1).remove();
        
    }
         $("#datetimepickertime").hide(); 
          $("#datetimepickertime1").hide(); 
          $("#datetimepickertime").val(""); 
          $("#datetimepickertime1").val(""); 
          
          $("#tuestart").hide(); 
          $("#tueend").hide(); 
          $("#tueaddmore").hide(); 
           
      
          }            
          selectcount1++; 
          }        
          
if(select==3)
{ 
    
if(selectcount2%2==1)
{$("#datetimepickertimea").show(); 
          $("#datetimepickertimea1").show(); 
          $("#wedstart").show(); 
          $("#wedend").show(); 
          
          $("#wedaddmore").show();  
          }
if(selectcount2%2==0)
{ while(countdate2>2)
    {
        countdate2--;
        $("#formslotab"+countdate2).remove();
        
    }
         $("#datetimepickertimea").hide(); 
          $("#datetimepickertimea1").hide(); 
          $("#datetimepickertimea").val(""); 
          $("#datetimepickertimea1").val(""); 
          
          $("#wedstart").hide(); 
          $("#wedend").hide(); 
          $("#wedaddmore").hide(); 
           
            } 
          selectcount2++; 
          }                  
          
 if(select==4)
{ 
    
if(selectcount3%2==1)
{$("#datetimepickertimeab").show(); 
          $("#datetimepickertimeab1").show(); 
          $("#thursstart").show(); 
          $("#thursend").show(); 
          
          $("#thursaddmore").show();  
          }
if(selectcount3%2==0)
{while(countdate3>2)
    {
        countdate3--;
        $("#formslotabc"+countdate3).remove();
        
    }
         $("#datetimepickertimeab").hide(); 
          $("#datetimepickertimeab1").hide(); 
          $("#datetimepickertimeab").val(""); 
          $("#datetimepickertimeab1").val(""); 
          
          $("#thursstart").hide(); 
          $("#thursend").hide(); 
          $("#thursaddmore").hide(); 
           
            }       
          selectcount3++; 
          }       
          

if(select==5)
{ 

if(selectcount4%2==1)
{$("#datetimepickertimeabc").show(); 
          $("#datetimepickertimeabc1").show(); 
          $("#fristart").show(); 
          $("#friend").show(); 
          
          $("#friaddmore").show();  
          }
if(selectcount4%2==0)
{while(countdate4>2)
    {
        countdate4--;
        $("#formslotabcd"+countdate4).remove();
        
    }
         $("#datetimepickertimeabc").hide(); 
          $("#datetimepickertimeabc1").hide(); 
          $("#datetimepickertimeabc").val(""); 
          $("#datetimepickertimeabc1").val(""); 
          
          $("#fristart").hide(); 
          $("#friend").hide(); 
          $("#friaddmore").hide(); 
           
            }           
          selectcount4++; 
          }       
          
         
        
        
        
        if(select==6)
{ 
if(selectcount5%2==1)
{$("#datetimepickertimeabcd").show(); 
          $("#datetimepickertimeabcd1").show(); 
          $("#satstart").show(); 
          $("#satend").show(); 
          
          $("#sataddmore").show();  
          }
if(selectcount5%2==0)
{while(countdate5>2)
    {
        countdate5--;
        $("#formslotabcde"+countdate5).remove();
        
    }
         $("#datetimepickertimeabcd").hide(); 
          $("#datetimepickertimeabcd1").hide(); 
          $("#datetimepickertimeabcd").val(""); 
          $("#datetimepickertimeabcd1").val(""); 
          
          $("#satstart").hide(); 
          $("#satend").hide(); 
          $("#sataddmore").hide(); 
           
            }          
          selectcount5++; 
          }       
          
          
               if(select==7)
{ 
if(selectcount6%2==1)
{$("#datetimepickertimeabcde").show(); 
          $("#datetimepickertimeabcde1").show(); 
          $("#sunstart").show(); 
          $("#sunend").show(); 
          
          $("#sunaddmore").show();  
          }
if(selectcount6%2==0)
{while(countdate6>2)
    {
        countdate6--;
        $("#formslotabcdef"+countdate6).remove();
        
    }
         $("#datetimepickertimeabcde").hide(); 
          $("#datetimepickertimeabcde1").hide(); 
         $("#datetimepickertimeabcde").val(""); 
        $("#datetimepickertimeabcde1").val(""); 
          
          $("#sunstart").hide(); 
          $("#sunend").hide(); 
          $("#sunaddmore").hide(); 
           
            }              
          selectcount6++; 
          }       
             
             
 
        
    
    
}


function appointmentfieldsave()
{
    $.post('appointmentslots/addappointmentslots',$("#formappointmentslots").serialize(),function(data){
       alert(data); 
    });
   
}









        
        
        
        function appointmentsave()
        {
            
           $.post('appointmentform/addcustomer', $('#appointmentformpage').serialize(), function(data){
              alert(data); 
              
           });
        }
        
  
  
  $(document).ready(function(){
     $.get('scheduleappointment/loaddata',function(data){
         
         
       var dataarray=data.split(" ");
       $('#checkboxone').append("Date: ");
        $('#checkboxtwo').append("Time: ");
       for(var i=0;i<dataarray.length-1;i++)
       {
          var datadatearray=dataarray[i].split("#");
            $('#checkboxone').append(datadatearray[0]);
            $('#checkboxone').append("   ");
            $('#checkboxtwo').append(datadatearray[1]+"<input type='checkbox' id=checkbox"+datadatearray[2]+" name=checkbox"+datadatearray[2]+" value="+datadatearray[2]+">");
            $('#checkboxone').append("   ");
       }
     });
  });
  
  
      function scheduleappointmentsave()
      {
         $.post('scheduleappointment/savedata',$('#scheduleappointmentform').serialize(),function(data){
           
          alert(data);
     
         });
      }
        
        
        
        </script>
        
<!--    <div style="margin-left: 400px;"><input type="button" value="Staff"/><input type="button" value="Calendar"/><input type="button" value="Leads"/><input type="button" value="Myprofile"/></div>      -->
       
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
      
   