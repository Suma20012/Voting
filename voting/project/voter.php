<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
include "header_voter.php"; 
?>
<h3> Welcome <?php echo $_SESSION['SESS_NAME']; ?> </h3>
<h3>make ur vote</h3>
<form action="submit_vote.php" name="vote" method="post" id="myform" >
<center><font size='6'><h3> Vote for your favorite political party </h3>
<input type="radio" name="lan" value="BJP"> <b> BJP</b>
<img src="bjp.PNG" align='20% left' style="width:50px;height:50px;"><BR>
<input type="radio" name="lan" value="JDS"><b> JDS</b>
<img src="jds.PNG" align='20% left' style="width:50px;height:50px;"><BR>
<input type="radio" name="lan" value="CONGRESS">  <b>CONGRESS</b>
<img src="congress.PNG" align='20% left' style="width:50px;height:50px;"><BR>
<input type="radio" name="lan" value="AAP"> <b> AAP</b>
<img src="aap.JPG" align='20% left' style="width:50px;height:50px;"><BR>
<input type="radio" name="lan" value="Others">  <b>Others</b>
<img src="other.PNG" align='20% left' style="width:50px;height:50px;"><BR>
</font></center><br>
<?php global $msg; echo $msg; ?>
<?php global $error; echo $error; ?>
<center><input type="submit" value="Submit Vote" name="submit" style="height:30px; width:100px" /></center>
</form>
