



<div id="scheduleappointment">
 <h3>Schedule Appointment</h3>       
 <hr/>
 <h4>Create Appointment</h4><br/>
 <form id="scheduleappointmentform">
     <label>Title:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="titleappointmentcustomer" id="titleappointmentcustomer" /><br />    
     <label>Date:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label id="datelabel"></label><br /> 
     <label>Time:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label id="starttimelabel"></label><label id="dash"></label><label id="endtimelabel"></label><br /> 
     <label>Location:</label>&nbsp;&nbsp;<input type="text" name="locationappointmentcustomer" id="locationappointmentcustomer" /><br /> 
 <h4>Customer</h4><br/>
 <label>Customer Email:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="customeremail" id="customeremail" /><br />    
 <label>Customer Phone:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="customerphone" id="customerphone" /><br />
 <label>Customer UserName:</label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="customerusername" id="customerusername" /><br />
 <label>Customer Description:</label>&nbsp;&nbsp;<input type="text" name="customerdescription" id="customerdescription" /><br />
 <input type='hidden' name='timeid' id='timeid' />
 <input type="button" value="Save" id="scheduleappointmentsave1" onclick="scheduleappointmentsave();">
 </form>
 </div>











