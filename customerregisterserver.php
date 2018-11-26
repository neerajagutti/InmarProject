<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "freshfruitsadda";
$conn = new mysqli($servername, $username, $password, $dbname);
if (isset($_POST['retailersubmit'])) {
	$useremail=$_POST['useremail'];
	$userfirstname=$_POST['userfirstname'];
	$userlastname  = $_POST['userlastname'];
	$userpannumber = $_POST['userpannumber'];
	$userphonenumber = $_POST['userphonenumber'];
	$useraddress = $_POST['useraddress'];
	$userpassword = $_POST['userpassword'];
	$wallet=3500;
	// (useremail,userfirstname,userlastname,userpannumber,userphonenumber,useraddress,userpassword,cwallet)
	$sql = "INSERT INTO customerregistration VALUES('$useremail','$userfirstname','$userlastname','$userpannumber','$userphonenumber','$useraddress','$userpassword','$wallet')";
	if ($conn->query($sql) === TRUE) 
	{
    		$_SESSION['useremail']=$useremail;
    		header('location:buyerdashboard.php');
	}
 	else
 	{
    		echo "Error:" . $sql . "<br>" . $conn->error;
	}
}
$conn->close();
?>
