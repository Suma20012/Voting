<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
include "header_voter.php"; 
?>
<br>
<br>
<center><h2>Change Password</h2></center>
<h4 style="color:#e60808"><font size='6'><?php global $nam; echo $nam;?> </h4> 
<?php global $error; echo $error;?>                  

<center><form action="change_pass_action.php" method="post" id="myform">
<b>Current Password :</b>
<input type="password" name="cpassword" value="" >
<br>
<br>
<b>New Password:</b>
<input type="password" name="npassword" value="" >
<br>
<br>
<b>Confirm New Password:</b>
<input type="password" name="cnpassword" value="" >
<br>
<br>
<input type="submit" name="cpass" value="UPDATE" style="height:30px; width:100px" />
</font></form></center>
<script type="text/javascript">
var frmvalidator = new Validator("myform"); 
frmvalidator.addValidation("cpassword","req","Please enter Current Password"); 
frmvalidator.addValidation("cpassword","maxlen=50");
frmvalidator.addValidation("npassword","req","Please enter New Password"); 
frmvalidator.addValidation("npassword","maxlen=50");
frmvalidator.addValidation("cnpassword","req","Please enter Confirm New Password"); 
frmvalidator.addValidation("cnpassword","maxlen=50");
</script>
<br>
<br>
<?php include "footer.php";?>
