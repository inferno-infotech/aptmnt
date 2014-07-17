
<div id="leads"> 
<h1 id="leadsheading">Please add user details.</h1>
 

<form id='leadslogin'>
     <label>Name: &nbsp;&nbsp;</label>&nbsp;&nbsp;&nbsp;<input type='text' name='leadsname' id="leadsname" /><br/><br />
     <label>Username: &nbsp;&nbsp;</label>&nbsp;&nbsp;&nbsp;<input type='text' name='leadsusername' id="leadsusername" /><br/><br />
     <label>Phone Number: &nbsp;&nbsp;</label>&nbsp;&nbsp;&nbsp;<input type='text' name='leadsphonenumber' id="leadsphonenumber" /><br/><br />
     <label>Description: &nbsp;&nbsp;</label>&nbsp;&nbsp;&nbsp;<input type='text' name='leadsdescription' id="leadsdescription" /><br/><br />
     <label>Email: &nbsp;&nbsp;</label>&nbsp;&nbsp;&nbsp;<input type='text' name='leadsemail' id="leadsemail" /><br/><br />
     <label>Password:</label><input type='password' name='leadspassword' id="leadspassword" /><br/><br /><input type='hidden' name='levelcreatedleads' id='levelcreatedleads' value='<?php echo $_GET['leadslevel'];?>' /><input type='hidden' name='leadsusername1' id='leadsusername1' value='<?php echo $_GET['leadsusername'];?>' />
     <label></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='submit' id='submitoleads' value="Submit"  />
     </form>

<table id="leadstable">
    
</table>


</div>
