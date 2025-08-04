<?php include "header.php"; 
if(!isset($_SESSION)) {
session_start();
}
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: voter.php");
}
?><br>
<center>
<legend> <h1>Login for Voting </h1></legend> 
</center
><br>
<img src="loginimage.JPG" align='left' style="width:400px;height:300px;" border="2px">
<?php global $nam; echo $nam; ?>
<?php global $error; echo $error; ?>
<br>
<center><font size="6" >
<form action="login_action.php" method="post" id="myform" >
<b>Username : </b>
<input type="text" name="username" value="" style="height:30px;width:300px"> 
<br>
<br>
<b>Password :</b>
<input type="password" name="password" value="" style="height:30px;width:300px">
<br>
<br>
<input type="submit" name="login" value="Login" style="height:30px;width:100px" /> 
</form></font>
</center>

<script type="text/javascript" > 
var frmvalidator = new Validator("myform");
frmvalidator.addValidation("username" , "req" , "Please Enter Username");
frmvalidator.addValidation("username", "maxlen=50");
frmvalidator.addValidation("password", "req" , "Please Enter Password");
</script>

<?php include "footer.php"; ?>