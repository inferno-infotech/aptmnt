<div id="level1"> 
    <h1 style="float: right; padding-right: 300px;">Welcome <?php echo $_GET['username'];?></h1>
<h1 id="level1heading">Please add user details.</h1>

<input type="button" value="Add Staff" id="add_staff" onclick="add_staff_click();"><label style="font-weight: bold;">OR</label><label></label>   <label style="font-weight:bold;">Select Level:</label>
<select name="inputlevel1" id="inputlevel1" onchange="levelfunction(this.value,<?php echo $_GET['id']?>)">
        <option value=2>Level 2</option>
        <option value=3>Level 3</option>
        </select><br/><br/><br/>
 
<table id="level1table" style='visibility: hidden'>
    
</table> 

<form id='level1login' style="visibility: hidden;">
     <label>Name: &nbsp;&nbsp;</label>&nbsp;&nbsp;&nbsp;<input type='text' name='name' id="name" /><br/><br />
     <label>Description: &nbsp;&nbsp;</label>&nbsp;&nbsp;&nbsp;<input type='text' name='description' id="description" /><br/><br />
     <label>Username: &nbsp;&nbsp;</label>&nbsp;&nbsp;&nbsp;<input type='text' name='username' id="username" /><br/><br />
     <label>Password:</label><input type='password' name='password' id="password" /><br/><br />
     <input type="hidden" name="parentid" id="parentid" value="<?php echo $_GET['id']?>">
     <input type="hidden" name="usernameparent" id="usernameparent" value="<?php echo $_GET['username']?>">
     
      <label>Select Levels:</label>
    <select name="inputlevel" id="inputlevel">
        <option value=2>Level 2</option>
        <option value=3>Level 3</option>
        </select><br/><br/><br/>
    
     
     
     <label>Email: &nbsp;&nbsp;</label>&nbsp;&nbsp;&nbsp;<input type='text' name='email' id="email" /><br/><br />
     <label>Phone Number: &nbsp;&nbsp;</label>&nbsp;&nbsp;&nbsp;<input type='text' name='phonenumber' id="phonenumber" /><br/><br />
     <label></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='submit' id='submitolevel1' value="Submit"  />
  </form>   

 
 
 
 
 


<!--<input type='button' id='level2button' value='Level2' onclick="level2function();"/>
<input type='button' id='level3button' value='Level3' onclick="level3function();"/>-->

</div>
