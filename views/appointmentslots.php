<div id="appointmentslots">
    
    <h1>Create Appointment Slots</h4>
    
    
    <form style="font-family: serif" id="formappointmentslots">
    <label>Current Year:</label> <?php echo date("Y");?><br/>
    <label>Current Month:</label> <?php echo date("F");?><br/>
    <label>Current Week:</label> <?php $current_dayname = date("l");$date = date("d-F-Y",strtotime("$current_dayname this week")).' to '.date("d-F-Y",strtotime('sunday this week'));echo $date ;?><br/>
     <br/>
     <div id="formappointmentslots01">
     <input type="checkbox" name="Monday" value="Monday" id="moncheck" onclick="boxselect(1);" style="height: 11px;">&nbsp;&nbsp;<label id="mon" >Monday:</label>&nbsp;&nbsp;<label id="start">Start Time:</label>&nbsp;<input id="datetimepicker" name="monstartdate" style="width:109px;height:16px;"  type="text" />&nbsp;&nbsp;<label id="end">End Time:</label>&nbsp;<input id="datetimepicker1" name="monenddate" style="width:109px;height:16px;"  type="text" />&nbsp;<input type="button" style="height: 2px;width:5px; padding-right: 13px; padding-bottom: 13px;" name="addmore" id="monaddmore" value="+" onclick="addingmore(1);"><br/>
     </div>
     
    
     
          
<!--       <input id="datetimepicker2" name="startdate" style="width:109px;height:16px;"  type="text" /> -->
    
    
    <div id="formappointmentslots1">
    <input type="checkbox" name="Tuesday" value="Tuesday" onclick="boxselect(2);" style="height: 11px;">&nbsp;&nbsp;<label id="tue">Tuesday:</label>&nbsp;&nbsp;<label id="tuestart">Start Time:</label>&nbsp;<input id="datetimepickertime" name="tuestartdate" style="width:109px;height:16px;"  type="text" />&nbsp;&nbsp;<label id="tueend">End Time:</label>&nbsp;<input id="datetimepickertime1" name="tueenddate" style="width:109px;height:16px;"  type="text" />&nbsp;<input type="button" style="height: 2px;width:5px; padding-right: 13px; padding-bottom: 13px;" name="addmore" id="tueaddmore" value="+" onclick="addingmore(2);"><br/> 
    </div>
    
    
     <div id="formappointmentslots2">
         <input type="checkbox" name="Wednesday" value="Wednesday" onclick="boxselect(3);" style="height: 11px;">&nbsp;&nbsp;<label >Wednesday:</label>&nbsp;&nbsp;<label id="wedstart">Start Time:</label>&nbsp;<input id="datetimepickertimea" name="wedstartdate" style="width:109px;height:16px;"  type="text" />&nbsp;&nbsp;<label id="wedend">End Time:</label>&nbsp;<input id="datetimepickertimea1" name="wedenddate" style="width:109px;height:16px;"  type="text" />&nbsp;<input type="button" style="height: 2px;width:5px; padding-right: 13px; padding-bottom: 13px;" name="addmore" id="wedaddmore" value="+" onclick="addingmore(3);"><br/>
    </div> 
    <div id="formappointmentslots3">
          <input type="checkbox" name="Thursday" value="Thursday" onclick="boxselect(4);" style="height: 11px;">&nbsp;&nbsp;<label >Thursday:</label>&nbsp;&nbsp;<label id="thursstart">Start Time:</label>&nbsp;<input id="datetimepickertimeab" name="thursstartdate" style="width:109px;height:16px;"  type="text" />&nbsp;&nbsp;<label id="thursend">End Time:</label>&nbsp;<input id="datetimepickertimeab1" name="thursenddate" style="width:109px;height:16px;"  type="text" />&nbsp;<input type="button" style="height: 2px;width:5px; padding-right: 13px; padding-bottom: 13px;" name="addmore" id="thursaddmore" value="+" onclick="addingmore(4);"><br/>
    </div> 
    
    <div id="formappointmentslots4">
         <input type="checkbox" name="Friday" value="Friday" onclick="boxselect(5);" style="height: 11px;">&nbsp;&nbsp;<label >Friday:</label>&nbsp;&nbsp;<label id="fristart">Start Time:</label>&nbsp;<input id="datetimepickertimeabc" name="fristartdate" style="width:109px;height:16px;"  type="text" />&nbsp;&nbsp;<label id="friend">End Time:</label>&nbsp;<input id="datetimepickertimeabc1" name="frienddate" style="width:109px;height:16px;"  type="text" />&nbsp;<input type="button" style="height: 2px;width:5px; padding-right: 13px; padding-bottom: 13px;" name="addmore" id="friaddmore" value="+" onclick="addingmore(5);"><br/>
    </div> 
    
    <div id="formappointmentslots5">
        <input type="checkbox" name="Saturday" value="Saturday" onclick="boxselect(6);"  style="height: 11px;">&nbsp;&nbsp;<label >Saturday:</label>&nbsp;&nbsp;<label id="satstart">Start Time:</label>&nbsp;<input id="datetimepickertimeabcd" name="satstartdate" style="width:109px;height:16px;"  type="text" />&nbsp;&nbsp;<label id="satend">End Time:</label>&nbsp;<input id="datetimepickertimeabcd1" name="satenddate" style="width:109px;height:16px;"  type="text" />&nbsp;<input type="button" style="height: 2px;width:5px; padding-right: 13px; padding-bottom: 13px;" name="addmore" id="sataddmore" value="+" onclick="addingmore(6);"><br/>

    </div>
    <div id="formappointmentslots6">
        <input type="checkbox" name="Sunday" value="Sunday" onclick="boxselect(7);" style="height: 11px;">&nbsp;&nbsp;<label >Sunday:</label>&nbsp;&nbsp;<label id="sunstart">Start Time:</label>&nbsp;<input id="datetimepickertimeabcde" name="sunstartdate" style="width:109px;height:16px;"  type="text" />&nbsp;&nbsp;<label id="sunend">End Time:</label>&nbsp;<input id="datetimepickertimeabcde1" name="sunenddate" style="width:109px;height:16px;"  type="text" />&nbsp;<input type="button" style="height: 2px;width:5px; padding-right: 13px; padding-bottom: 13px;" name="addmore" id="sunaddmore" value="+" onclick="addingmore(7);"><br/>
    </div>
    
     
     <input type="button" value="Save" id="appointmentslotsave" onclick="appointmentfieldsave();">
     
    </form>
</div>