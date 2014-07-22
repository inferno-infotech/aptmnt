<div id="level3"> 
<h1 id="level3heading">Please add user details.</h1>

<input type="button" value="Add Staff" id="add_staff_3" onclick="add_staff_3_click();"><label style="font-weight: bold;">OR</label><label></label>   <label style="font-weight:bold;">Select Level:</label>
<a style='cursor:pointer;' onclick='levelthreefunction(<?php echo $_GET['userid'];?>)'>Level 4</a>
 
<table id="level3table">
    
</table>

 <form id='level3login' style="visibility: hidden;">
     <label>Name: &nbsp;&nbsp;</label>&nbsp;&nbsp;&nbsp;<input type='text' name='name3' id="name3" /><br/><br />
     <label>Description: &nbsp;&nbsp;</label>&nbsp;&nbsp;&nbsp;<input type='text' name='description3' id="description3" /><br/><br />
     <label>Username: &nbsp;&nbsp;</label>&nbsp;&nbsp;&nbsp;<input type='text' name='username3' id="username3" /><br/><br />
     <label>Password:</label><input type='password' name='password3' id="password3" /><br/><br />
     
     
      <label>Select Levels:</label>
    <select name="inputlevel3" id="inputlevel3">
      <option value=4>Level 4</option>
        </select><br/><br/><br/>
    
     
     
     <label>Email: &nbsp;&nbsp;</label>&nbsp;&nbsp;&nbsp;<input type='text' name='email3' id="email3" /><br/><br />
     <label>Phone Number: &nbsp;&nbsp;</label>&nbsp;&nbsp;&nbsp;<input type='text' name='phonenumber3' id="phonenumber3" /><br/><br />
     <label></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='submit' id='submitolevel3' value="Submit"  />
     <input type='hidden' name='level3id' id='level3id' value='<?php echo $_GET['userid'];?>'>
     <input type='hidden' name='level3user' id='level3user' value='<?php echo $_GET['username'];?>'>
 
 </form>




</div>