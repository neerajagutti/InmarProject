<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "freshfruitsadda";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// sql to create retailer table
$sql = "CREATE TABLE retailerregistration (
email VARCHAR(30) primary key,
firstname VARCHAR(30),
lastname VARCHAR(30),
pannumber VARCHAR(11),
phonenumber BIGINT(10),
address VARCHAR(100),
shopname VARCHAR(100),
password VARCHAR(20)
)";
// sql to create customer table
$sql1 = "CREATE TABLE customerregistration (
useremail VARCHAR(30) primary key,
userfirstname VARCHAR(30),
userlastname VARCHAR(30),
userpannumber VARCHAR(11),
userphonenumber BIGINT(10),
useraddress VARCHAR(100),
userpassword VARCHAR(20)
)";

if ($conn->query($sql) === TRUE && $conn->query($sql1) === TRUE) {
echo "Table  created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
?>

