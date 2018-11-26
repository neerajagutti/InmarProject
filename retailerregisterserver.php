<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "freshfruitsadda";
$conn = new mysqli($servername, $username, $password, $dbname);

if (isset($_POST['retailersubmit'])) {
	# code...
	$email=$_POST['email'];
	$firstname=$_POST['firstname'];
	$lastname  = $_POST['lastname'];
	$pannumber = $_POST['pannumber'];
	$phonenumber = $_POST['phonenumber'];
	$address = $_POST['address'];
	$shopname=$_POST['shopname'];
	$password = $_POST['password'];
	$wallet=3500;
	$sql = "INSERT INTO retailerregistration VALUES('$email','$firstname','$lastname','$pannumber','$phonenumber','$address','$shopname','$password','$wallet')";
	
	if ($conn->query($sql) === TRUE) 
	{
    	$_SESSION['email']=$email;
    		header('location:jsontojquery.php');
	}
 	else
 	{
    	echo "Error:" . $sql . "<br>" . $conn->error;
	}
}
$conn->close();
?>