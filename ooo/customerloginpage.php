<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "freshfruitsadda";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$useremail=$_POST['useremail'];
$userpassword=$_POST['userpassword'];
$sql="SELECT * FROM  customerregistration WHERE useremail='$useremail' and userpassword='$userpassword'";
$result = $conn->query($sql);
	if($result->num_rows>0)
	{
		$_SESSION['useremail']=$useremail;
		header('location:buyerdashboard.php');

	 }

	else{
		echo "<h1>You have entered wrong credentials</h1>";
		echo '<script type="text/javascript"> window.onload = function() { alert("You have entered wrong credentials"); }</script>';
	}
$conn->close();

?>

