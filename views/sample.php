<?php
$startdate=date('01-m-Y');
$enddate=date('t-m-Y');

$numberofdate=$enddate-$startdate+1;
$numberofweeks=$numberofdate/7;
echo $startdate;
echo $enddate;
echo $numberofdate;
$intnumberofweeks=intval($numberofweeks);
$date = new DateTime($startdate);
$week = $date->format("W");
//$monday=new DateTime('monday');
for($count=1;$count<=$intnumberofweeks;$count++)
{
    echo $week;
    $week++;
}


function weekdayAfter($date,$day){
return date('d-m-Y',strtotime($day, strtotime($date)));
}


$tomorrow=weekdayAfter($startdate, "Friday");
$lastmonday=weekdayAfter($enddate,"last "."Friday");



$diffweek=($lastmonday-$tomorrow)/7;
$weeknum=$diffweek;
$count=0;
while($count<=$weeknum)
{
$date1 = str_replace('-', '/', $tomorrow);
echo $tomorrow;
$tomorrow = date('d-m-Y',strtotime($tomorrow . "+7 days"));

$monday=$tomorrow;
$count++;
}

?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

   
    <head id="Head1">
    <title>	My Calendar </title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        
    <link href="css/dailog.css" rel="stylesheet" type="text/css" />
    <link href="css/calendar.css" rel="stylesheet" type="text/css" /> 
    <link href="css/dp.css" rel="stylesheet" type="text/css" />   
    <link href="css/alert.css" rel="stylesheet" type="text/css" /> 
    <link href="css/main.css" rel="stylesheet" type="text/css" /> 
    <link href="css/jquery.toastmessage.css" rel="stylesheet" type="text/css" /> 
    

    <script src="src/jquery.js" type="text/javascript"></script> 
    <script src="src/jquery.toastmessage.js" type="text/javascript"></script> 
     
    
    <script src="src/Plugins/Common.js" type="text/javascript"></script>    
    <script src="src/Plugins/datepicker_lang_US.js" type="text/javascript"></script>     
    <script src="src/Plugins/jquery.datepicker.js" type="text/javascript"></script>

    <script src="src/Plugins/jquery.alert.js" type="text/javascript"></script>    
    <script src="src/Plugins/jquery.ifrmdailog.js" defer="defer" type="text/javascript"></script>
    <script src="src/Plugins/wdCalendar_lang_US.js" type="text/javascript"></script>    
    <script src="src/Plugins/jquery.calendar.js" type="text/javascript"></script>   
   
    <script type="text/javascript">
      
      
   
    
    
   
    
    
    
    var val=0;
      
    
    
    
    $(document).ready(function() {  
       
       
//   $user="<?php echo $_POST['user'];?>";
      
    
//    if($user=="leads")
//       {
//        var url="scheduleappointment";
//        $("#one").show();
//               
//        $.get('sample/loaduser',function(data){
//              
//           });
//       }
//       else
//       {
//        url="appointmentslots";   
//        $("#one").hide();
//       }
       
       
        
//           var view="week"; 

              var temperoryvalue="<?php echo $_GET['id'];?>";
              

             var view="month";
           
            var DATA_FEED_URL = "php/datafeed.php";
            var op = {
                view: view,
                theme:3,
                showday: new Date(),
                EditCmdhandler:Edit,
                DeleteCmdhandler:Delete,
                ViewCmdhandler:View,    
                onWeekOrMonthToDay:wtd,
                onBeforeRequestData: cal_beforerequest,
                onAfterRequestData: cal_afterrequest,
                onRequestDataError: cal_onerror, 
                autoload:true,
                url: DATA_FEED_URL + "?method=list "+temperoryvalue,  
                quickAddUrl: DATA_FEED_URL + "?method=add", 
                quickUpdateUrl: DATA_FEED_URL + "?method=update",
                quickDeleteUrl: DATA_FEED_URL + "?method=remove"        
            };
            var $dv = $("#calhead");
            var _MH = document.documentElement.clientHeight;
            var dvH = $dv.height() + 2;
            op.height = _MH - dvH;
            op.eventItems =[];
 
            var p = $("#gridcontainer").bcalendar(op).BcalGetOp();
            
            if (p && p.datestrshow) {
                $("#txtdatetimeshow").text(p.datestrshow);
            }
            $("#caltoolbar").noSelect();
            
            $("#hdtxtshow").datepicker({ picker: "#txtdatetimeshow", showtarget: $("#txtdatetimeshow"),
            onReturn:function(r){                          
                            var p = $("#gridcontainer").gotoDate(r).BcalGetOp();
                            
                            if (p && p.datestrshow) {
                                $("#txtdatetimeshow").text(p.datestrshow);
                            }
                     } 
            });
            function cal_beforerequest(type)
            {
                var t="Loading data...";
                switch(type)
                {
                    case 1:
                        t="Loading data...";
                        break;
                    case 2:                      
                    case 3:  
                    case 4:    
                        t="The request is being processed ...";                                   
                        break;
                }
                $("#errorpannel").hide();
                $("#loadingpannel").html(t).show();    
            }
            function cal_afterrequest(type)
            {
                switch(type)
                {
                    case 1:
                        $("#loadingpannel").hide();
                        break;
                    case 2:
                    case 3:
                    case 4:
                        $("#loadingpannel").html("Success!");
                        window.setTimeout(function(){ $("#loadingpannel").hide();},2000);
                    break;
                }              
               
            }
            
            function cal_onerror(type,data)
            {
                $("#errorpannel").show();
            }
            function Edit(data)
            {
               var eurl="edit.php?id={0}&start={2}&end={3}&isallday={4}&title={1}";   
                if(data)
                {
                    var url = StrFormat(eurl,data);
                    OpenModelWindow(url,{ width: 600, height: 400, caption:"Manage  The Calendar",onclose:function(){
                       $("#gridcontainer").reload();
                    }});
                }
            }    
            function View(data)
            {
                var str = "";
                $.each(data, function(i, item){
                    str += "[" + i + "]: " + item + "\n";
                });
                alert(str);               
            }    
            function Delete(data,callback)
            {           
                
                $.alerts.okButton="Ok";  
                $.alerts.cancelButton="Cancel";  
                hiConfirm("Are You Sure to Delete this Event", 'Confirm',function(r){ r && callback(0);});           
            }
            function wtd(p)
            {
               if (p && p.datestrshow) {
                    $("#txtdatetimeshow").text(p.datestrshow);
                }
                $("#caltoolbar div.fcurrent").each(function() {
                    $(this).removeClass("fcurrent");
                })
                $("#showdaybtn").addClass("fcurrent");
                 
            }
            //to show day view
            $("#showdaybtn").click(function(e) {
                //document.location.href="#day";
                $("#caltoolbar div.fcurrent").each(function() {
                    $(this).removeClass("fcurrent");
                })
                $(this).addClass("fcurrent");
                
                var p = $("#gridcontainer").swtichView("day").BcalGetOp();
                alert(p.datestrshow);
                if (p && p.datestrshow) {
                    $("#txtdatetimeshow").text(p.datestrshow);
                    
                    
                }
            });
            //to show week view
            $("#showweekbtn").click(function(e) {
                //document.location.href="#week";
                $("#caltoolbar div.fcurrent").each(function() {
                    $(this).removeClass("fcurrent");
                })
                $(this).addClass("fcurrent");
                var p = $("#gridcontainer").swtichView("week").BcalGetOp();
                if (p && p.datestrshow) {
                    $("#txtdatetimeshow").text(p.datestrshow);
                }

            });
            //to show month view
            $("#showmonthbtn").click(function(e) {
                //document.location.href="#month";
                $("#caltoolbar div.fcurrent").each(function() {
                    $(this).removeClass("fcurrent");
                })
                $(this).addClass("fcurrent");
                var p = $("#gridcontainer").swtichView("month").BcalGetOp();
               
                if (p && p.datestrshow) {
                    $("#txtdatetimeshow").text(p.datestrshow);
                }
            });
            
            $("#showreflashbtn").click(function(e){
                $("#gridcontainer").reload();
            });
            
            //Add a new event
            $("#faddbtn").click(function(e) {
            val++;    
            
            
            
                $("#slide").slideUp("slow",function(){
                val++;
                });
                OpenModelWindow(url,{ width: screen.availWidth-300, height: screen.availHeight, caption: "Create Slots"});
            });
            
            
            
            
            //go to today
            $("#showtodaybtn").click(function(e) {
                var p = $("#gridcontainer").gotoDate().BcalGetOp();
                if (p && p.datestrshow) {
                    $("#txtdatetimeshow").text(p.datestrshow);
                }


            });
            //previous date range
            $("#sfprevbtn").click(function(e) {
                var p = $("#gridcontainer").previousRange().BcalGetOp();
                if (p && p.datestrshow) {
                    $("#txtdatetimeshow").text(p.datestrshow);
                }

            });
            //next date range
            $("#sfnextbtn").click(function(e) {
                var p = $("#gridcontainer").nextRange().BcalGetOp();
                if (p && p.datestrshow) {
                    $("#txtdatetimeshow").text(p.datestrshow);
                }
            });
            
        });
       
        $(document).click(function(){
       
        if(url="appointmentform")
        {
      $("#gridcontainer").reload();
            if(val>1)
     { $("#slide").slideDown("slow");
      val=0;
  }
       
        }
});




var url1="find";
var counturl=0;
function findidandemail()
{
    counturl++;
    if (counturl==1)
    {
      $("#slide").slideUp("slow");
      OpenModelWindow(url1,{ width: screen.availWidth-300, height: screen.availHeight, caption: ""});
           
    }
    counturl++;
}

var counttt=0;
$(document).click(function(){
       
        if(url1=="find")
        {
      if(counttt%2==0)
      {
      
  }
      if(counttt%2!=0){
       
            
            data1=window.sessionStorage['id'];
            delete window.sessionStorage['id'];
           if(data1!=""){
                window.location.href = "http://localhost/appointment/sample?id="+data1;
                
              }
            }
       counttt++;
            if(counturl>1)
     { $("#slide").slideDown("slow");
         
        
         
      counturl=0;
  }
  
  
  
  
  
       
        }
});



    

var selection=0;
var url2="loginstaff";
var counturl1=0;
function loginidandemail()
{
   selection++;
        counturl1++;
    if (counturl1==1)
    {
      $("#slide").slideUp("slow");
      OpenModelWindow(url2,{ width: screen.availWidth-300, height: screen.availHeight, caption: ""});
         
    }
    
    counturl1++;
}


var counttt1=0;
$(document).click(function(){
       
        if(url2=="loginstaff")
        {
      if(counttt1%2==0)
      {
      
  }
      if(counttt1%2!=0){
       
            
            data2sess=window.sessionStorage['id1'];
            data2temp=data2sess.split(" ");
            data2=data2temp[0];
            data3=data2temp[1];
            delete window.sessionStorage['id1'];
           if(data2!="" && selection>0){
                window.location.href = "http://localhost/appointment/sample?id="+data2+"&username="+data3;
               
               
              }
            }
       counttt1++;
            if(counturl1>1)
     { $("#slide").slideDown("slow");
         
        
         
      counturl1=0;
  }
  
  
  
  
  
       
        }
});


function Level4Create()
{

window.sessionStorage['location']=window.location;
window.location.href = "http://localhost/appointment/levelfourack";    
    
}
      
function Monthview()
{
window.location.href=window.location;  
}


$(document).ready(function(){
    
if(("<?php echo $_GET['id'];?>")!='' && ("<?php echo $_GET['id'];?>")!='undefined')
{
    $("#wrapperid").append("<div class='inline' style='display: inline-block;'><input type='button' value='Add/Request Appointment' id='addreqbutton' name='addreqbutton' onclick=addrequestfunction();></div>");

$("#parentwrapper").append("welcome  "+"<?php echo $_GET['username'];?>");
$("#parentwrapper").append("<div class='wrapper' id='wrapperid1' style='width: 500px; overflow: hidden;white-space: nowrap;'><div class='inline' style='display: inline-block;'><input type='button' value='Calendar' id='calendarbutton' name='calendarbutton' onclick='calendarclick();'></div><div class='inline' style='display: inline-block;'><input type='button' value='Leads' id='leadsbutton' name='leadsbutton' onclick='leadsclick();'></div><div class='inline' style='display: inline-block;'><input type='button' value='Myprofile' id='myprofilebutton' name='myprofilebutton' onclick='myprofilebuttonclick();'></div><div class='inline' style='display: inline-block;'><input type='button' value='Open Slots' id='myprofilebutton' name='openslotsbutton' onclick='openslotsbuttonclick();'></div><div class='inline' style='display: inline-block;'><input type='button' value='Logout' id='logoutbutton' name='logoutbutton' onclick='logoutbuttonclick();'></div></div>");

}   
});
   
function addrequestfunction()
{
    alert(1);
}
function openslotsbuttonclick()
{
    window.location.href="http://localhost/appointment/appointmentslots";
}




       
        
        
        
    </script>    
</head>
<body>
    <div id="slide">
        

      <div id="calhead" style="padding-left:1px;padding-right:1px;">          
            <div class="cHead"><div class="ftitle">My Calendar</div>
            <div id="loadingpannel" class="ptogtitle loadicon" style="display: none;">Loading data...</div>
             <div id="errorpannel" class="ptogtitle loaderror" style="display: none;">Sorry, could not load your data, please try again later</div>
            </div>          
           
          <div id="parentwrapper"> 
          <div class="wrapper" id="wrapperid" style="width: 500px; overflow: hidden;white-space: nowrap;">
    <div class="inline" style="display: inline-block;"><input type="button" value="Find" id="findbuttonin" name="findbuttonin" onclick="findidandemail();"></div>
    <div class="inline" style="display: inline-block;"><input type="button" value="Login" id="loginbuttonin" name="loginbuttonin" onclick="loginidandemail();"></div>
    <div class="inline" style="display: inline-block;"><input type="button" value="Level4Account" id="Level4button" name="Level4button" onclick="Level4Create();"></div>
    <div class="inline" style="display: inline-block;"><input type="button" value="Refresh View" id="Monthviewbutton" name="Monthviewbutton" onclick="Monthview();"></div>
  
    </div>
         </div>
            
                
                
                
                <div id="Calendarmaintoolbar" style="display: none;">
                    <div id="caltoolbar" class="ctoolbar">
              <div id="faddbtn" class="fbutton">
                <div><span title='Click to Create New Event' class="addcal">

               Add appointment               
                </span></div>
            </div>
            <div class="btnseparator"></div>
             <div id="showtodaybtn" class="fbutton">
                <div><span title='Click to back to today ' class="showtoday">
                Today</span></div>
            </div>
              <div class="btnseparator"></div>

            <div id="showdaybtn" class="fbutton">
                <div><span title='Day' class="showdayview">Day</span></div>
            </div>
              <div  id="showweekbtn" class="fbutton fcurrent">
                <div><span title='Week' class="showweekview">Week</span></div>
            </div>
              <div  id="showmonthbtn" class="fbutton">
                <div><span title='Month' class="showmonthview">Month</span></div>

            </div>
            <div class="btnseparator"></div>
              <div  id="showreflashbtn" class="fbutton">
                <div><span title='Refresh view' class="showdayflash">Refresh</span></div>
                </div>
             <div class="btnseparator"></div>
            <div id="sfprevbtn" title="Prev"  class="fbutton">
              <span class="fprev"></span>

            </div>
            <div id="sfnextbtn" title="Next" class="fbutton">
                <span class="fnext"></span>
            </div>
            <div class="fshowdatep fbutton">
                    <div>
                        <input type="hidden" name="txtshow" id="hdtxtshow" />
                        <span id="txtdatetimeshow">Loading</span>

                    </div>
            </div>
            
             <div id="one"> <span style="float: right;">!Please check appointment slots</span> </div>
            </div>
                
             
                
              
                
                
                
                
      </div>
          </div>
      <div style="padding:1px;">

        <div class="t1 chromeColor">
            &nbsp;</div>
        <div class="t2 chromeColor">
            &nbsp;</div>
        <div id="dvCalMain" class="calmain printborder">
            <div id="gridcontainer" style="overflow-y: visible;">
            </div>
        </div>
        <div class="t2 chromeColor">

            &nbsp;</div>
        <div class="t1 chromeColor">
            &nbsp;
        </div>   
        </div>
     
  </div>
    
</body>
</html>
