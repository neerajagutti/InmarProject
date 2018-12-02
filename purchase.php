<?php
	session_start();
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "freshfruitsadda";
	$temp_quantity=0;
	$temp_fruitname="";
	$tempquan="";
	$tempprice="";
	$useremail=$_SESSION['useremail'];
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 	

	$jsondata= json_decode(stripslashes(file_get_contents("php://input")));
	//print_r($jsondata[0]->fname);
	$buyer_email=$jsondata[3]->buyer_email;
	$seller_email=$jsondata[3]->seller_email;
	//$useremail=$buyer_email; 
	
	//print_r($jsondata);
	
	echo "\n";
	$custwallet='';
	$custwallet1='';
	$sql="SELECT cwallet from customerregistration where useremail='$useremail'";
		$result1= $conn->query($sql);

		if ($result1->num_rows > 0) 
		{
		    // output data of each row
		    while($row = $result1->fetch_assoc())
		    {
		    	//echo $custwallet;
		        $custwallet1=(int)$row["cwallet"]-100;

		    }
		    
		}

		$sql2="UPDATE customerregistration SET cwallet='$custwallet1' where useremail='$useremail'";
		if($conn->query($sql2)){
			echo $buyer_email;
			echo "success";
		}
		else{
			echo $conn->error;
		}
	





	$sql="SELECT wallet from retailerregistration where email='$seller_email'";
		$result1= $conn->query($sql);
		if ($result1->num_rows > 0) 
		{
		    // output data of each row
		    while($row = $result1->fetch_assoc())
		    {
		    	echo $custwallet;
		        $custwallet=(int)$row["wallet"]+100;

		    }
		    
		}

		$sql2="UPDATE retailerregistration SET wallet='$custwallet' where email='$seller_email'";
		if($conn->query($sql2)){
			echo $buyer_email;
			echo "success";
		}
		else{
			echo $conn->error;
		}
	
	for($i=0;$i<3;$i++)
	{
		//echo $jsondata[$i]->fname."  ";
		//echo $jsondata[$i]->fquantity."  ";
		//echo $jsondata[$i]->fprice."  ";
		//echo "\n";
		$temp_fruitname=$jsondata[$i]->fname;
		$tempquan = $jsondata[$i]->fquantity;
		$tempprice = $jsondata[$i]->fprice;
		$sql_select = "SELECT quantity FROM fruit_store where seller_email='$seller_email' and fruit_name='$temp_fruitname'";

		$result = $conn->query($sql_select);
		$sq = "INSERT INTO purchasetable values('$seller_email','$buyer_email','$temp_fruitname','$tempquan','$tempprice','$custwallet','$custwallet1',now())";
	     $res = $conn->query($sq);

        if ($result->num_rows > 0) 
		{
		    // output data of each row
		    while($row = $result->fetch_assoc())
		    {
		        $temp_quantity=$row["quantity"];

		    }
		    $temp_quantity=$temp_quantity-(int)$jsondata[$i]->fquantity;
		    $sql_update="UPDATE fruit_store SET quantity=$temp_quantity WHERE seller_email='$seller_email' and fruit_name='$temp_fruitname'";
		    if($conn->query($sql_update)===TRUE)
		    {
		    	
		    }	
		    else
		    {

		    }	
		} 
		else
		{
		    //echo "0 results";
		}
	}
	$conn->close();
?>