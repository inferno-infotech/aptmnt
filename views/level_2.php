<div id="level2"> 
    
     <h1 style="float: right; padding-right: 300px;">Welcome <?php echo $_GET['username'];?></h1>
<h1 id="level2heading">Please add user details.</h1>

<input type="button" value="Add Staff" id="add_staff_2" onclick="add_staff_2_click();"><label style="font-weight: bold;">OR</label><label></label>   <label style="font-weight:bold;">Select Level:</label>
<select name="inputlevel2" id="inputlevel2" onchange="leveltwofunction(this.value,<?php echo $_GET['userid'];?>)">
        <option value=3>Level 3</option>
        <option value=4>Level 4</option>
        </select><br/><br/><br/>
  <table id="level2table">
    
</table>  
    

 <form id='level2login' style="visibility: hidden">
     <label>Name: &nbsp;&nbsp;</label>&nbsp;&nbsp;&nbsp;<input type='text' name='name2' id="name2" /><br/><br />
     <label>Description: &nbsp;&nbsp;</label>&nbsp;&nbsp;&nbsp;<input type='text' name='description2' id="description2" /><br/><br />
     <label>Username: &nbsp;&nbsp;</label>&nbsp;&nbsp;&nbsp;<input type='text' name='username2' id="username2" /><br/><br />
     <label>Password:</label><input type='password' name='password2' id="password2" /><br/><br />
     <input type='hidden' name='level2id' id='level2id' value='<?php echo $_GET['userid'];?>'>
     <input type='hidden' name='level2user' id='level2user' value='<?php echo $_GET['username'];?>'>
     
      <label>Select Levels:</label>
    <select name="inputlevel2" id="inputlevel2">
        <option value=3>Level 3</option>
        </select><br/><br/><br/>
    
     
     
     <label>Email: &nbsp;&nbsp;</label>&nbsp;&nbsp;&nbsp;<input type='text' name='email2' id="email2" /><br/><br />
     <label>Phone Number: &nbsp;&nbsp;</label>&nbsp;&nbsp;&nbsp;<input type='text' name='phonenumber2' id="phonenumber2" /><br/><br />
     <label></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='submit' id='submitolevel2' value="Submit"  />
     </form>




</div>
