<?php include "header.php";
session_start();
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: voter.php");
}
?>
<?php global $msg; echo $msg;?>

<p><center><legend><font size='18'><b>This system allows all registered users to vote for their favorite Political party.</b></p>
<p><b>In order to make a vote you have to register first and then login.</b>
<h3 style='color:#fe036a''size:8'><i>"Vote For The Best The One Better Than Then The Rest"</i></font></legend></center>
    <p>&nbsp;&nbsp;</h3>
<?php include "footer.php";?>
