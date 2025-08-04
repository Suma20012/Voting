<script src='https://www.google.com/recaptcha/api.js'></script>
<?php include "header.php";
if(!isset($_SESSION)) {
session_start();
}
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: voter.php");
}
?>
<center>
<legend> <h1> Register </h1></legend>
<img src="registerimage" align="left" style="width:400px;height:300px;" border="2px"> </center>
<?php global $nam; echo $nam; ?> 
<?php global $error; echo $error; ?>
<center><font size="6" >
<form action= "reg_action.php" method= "post" id="myform" >
<b>Firstname:</b>
<input type="text" name="firstname" value="" style="height:30px;width:300px"/>
<br>
<br>
<b>Lastname: </b>
<input type="text" name="lastname" value="" style="height:30px;width:300px"/>
<br>
<br>
<b>Username:</b> 
<input type="text" name="username" value="" style="height:30px;width:300px"/>
<br>
<br>
<b>Password:</b> 
<input type="password" name="password" value="" style="height:30px;width:300px"/>
<br>
<br>
<input type="submit" name="submit" value="Next" style="height:30px;width:150px"/>
</form>
</font>
</center>
 <script type= "text/javascript" >
 var frmvalidator = new Validator("myform"); 
 frmvalidator.addValidation("firstname","req","Please enter  firstname"); 
 frmvalidator.addValidation("firstname","maxlen=50");
 frmvalidator.addValidation("lastname","req","Please enter  lastname"); 
 frmvalidator.addValidation("lastname","maxlen=50");
 frmvalidator.addValidation("username","req","Please enter username"); 
 frmvalidator.addValidation("username","maxlen=50");
 frmvalidator.addValidation("password","req","Please enter  password"); 
 frmvalidator.addValidation("password","minlen=6","Password must not be less than 6 characters.");

</script>
<?php include "footer.php" ;?>
