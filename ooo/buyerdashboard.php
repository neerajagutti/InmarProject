<?php
session_start();
if (!isset($_SESSION['useremail'])) {
	# code...
	header('location:mrg_theme.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="sidenav.css">
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" type="text/css" href="buyercss.css">
  	<style type="text/css">
  		
  	</style>
  		<script type="text/javascript">
  			var buyer_email= $("#useremail_id").text().trim();
			var sellers_from_server="";
			var un_or_list="";
			var fruittable="";
			// var fruittable1="";
			var thead="";
			var colrow="";
			var sellers_fruits_from_server="";
	  		$(document).ready(function(){
  			sellersInformation();
		    $(document).on("click","#shop",function(){
		    	console.log($(this).attr("name"));
		    	 $("ul").remove();
		    	 $.post("get_fruit_information.php",
				    {"email":sellers_from_server[$(this).attr("name")].semail},
				    function(data,status){
				    	console.log(data);
				    	//console.log(email);
				    	sellers_fruits_from_server=JSON.parse(data);
				    	drawBuyerTable(sellers_fruits_from_server);
				    }
		    	);

		    });
  		});

  		$(document).on("click","#result1",function()
  		{
  			$("table").remove();
  			$("ul").remove();
  			imag= $("<table class='table '/>");
  			$("#result").append(imag);
  			thead1=$("<thead/>");
			colrow1=$("<tr>");
			thead1.append(colrow1);
  			colrow1.append($("<td><img  src='images/cimg10.png' width='300' height='200'> </td><br>"));
  			colrow1.append($("<td><img  src='images/cimg2.png' width='300' height='200'> </td><br>"));
  			colrow1.append($("<td><img  src='images/cimg3.png' width='300' height='200'> </td><br>"));
  			var row1 = $("<tr />");
					var tbody1=$("<tbody/>");
					imag.append(tbody1);
				    tbody1.append(row1); 
					var row2 = $("<tr />");
					var tbody2=$("<tbody/>");
					imag.append(tbody2);
				    tbody2.append(row2); 
	  		row1.append($("<td><img  src='images/cimg4.png' width='300' height='200'> </td>"));
	  		row1.append($("<td><img  src='images/cimg5.png' width='300' height='200'> </td>"));
	  		row1.append($("<td><img  src='images/cimg1.png' width='300' height='200'> </td>"));
			row2.append($("<td><img  src='images/cimg7.png' width='300' height='200'> </td>"));
	  		row2.append($("<td><img  src='images/cimg8.png' width='300' height='200'> </td>"));
	  		row2.append($("<td><img  src='images/cimg9.png' width='300' height='200'> </td>"));
	  		imag.append(thead1);
  		
		});
		function sellersInformation()
  		{
  			$("table").remove();
  			$("ul").remove();
  			$.post("get_sellers_information.php",
				    {"email":""},
				    function(data,status){
				    	console.log(data);
				    	sellers_from_server=JSON.parse(data);
				    	drawBuyerList(sellers_from_server);
				    }
		    );
  		}
  		function drawBuyerList(sellers)
  		{
  			un_or_list = $("<ul class='list-group'/>");
  			$("#result").append(un_or_list);
  			for(var i=0;i<sellers.length;i++)
  			{
  				drawBuyerListItem(sellers[i],i);
  			}
  		}
  		function drawBuyerListItem(seller,index)
  		{
  			un_or_list.append($("<li class='list-group-item'><h4 style='color:green'>Seller Name</h4><h5><span>"+seller.sname+"</span></h5><h4 style='color:green'>Seller Email</h4><h5><span>"+seller.semail+"</span></h5><h4 style='color:green'>Seller ShopName</h4><h5><span>"+seller.shopname+"</span></h5><button class='btn btn-default' type='button' id='shop' name='"+index+"'>shop</button><br><br></li>"));
  		}
  		function drawBuyerTable(fruits){
			//console.log(fruits.length);
			fruittable= $("<table class='table '/>");
			thead=$("<thead/>");
			colrow=$("<tr>");
			thead.append(colrow);
			colrow.append("<td><strong><h2><span>FruitName<span></h2></strong></td>");
			colrow.append("<td><strong><h2><span>Quantity<span></h2></strong></td>");
			colrow.append("<td><strong><h2><span>Price</h2></strong></td>");
			fruittable.append(thead);
			$("#result").append(fruittable);
			for (var i = 0; i < fruits.length; i++) {
        			drawRow(fruits[i],i);
    		}
		}
		function drawRow(fruit,index)
		{
			    //console.log(fruit.fname);
				var row = $("<tr />");
				var tbody=$("<tbody/>");
				fruittable.append(tbody);
			    tbody.append(row); 
			    row.append($("<td><h4><span>" + fruit.fname + "</span></h4></td>"));
			    row.append($("<td><h4><span>" + fruit.quantity + "</span></h4></td>"));
			    row.append($("<td><h4><span>" + fruit.price + "</span></h4></td>"));
		}  
		function openNav() {
    			document.getElementById("mySidenav").style.width = "250px";
			}
		function closeNav() {
    		document.getElementById("mySidenav").style.width = "0";
			}
	</script>
  </head>
<body>
	<div class="container-fluid" style="background-color: black">
	  	<div class="col-sm-6">
	  		<nav class="navbar">
	    		<div class="navbar-header" >
	      			<a class="navbar-brand" >
	      				<div id="mySidenav" class="sidenav">
	  						<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	  						<a  onclick="sellersInformation()">DashBoard Home</a>
	  						<a href="#" class="button" id="result1">Gallery</a>
	  						<a href="#">Contact</a>
						</div>
						<span style="font-size:30px;cursor:pointer ;color: white"onclick="openNav()">&#9776; <strong style="color: white">Fruit Adda</strong></span>
					</a>
				</div>
	    	</nav>	
  		</div>
  			<div class="col-sm-5" style="text-align: right;">
	    		<a class='fas fa-wallet' style='font-size:30px;color:white'>Wallet</a>
  			</div>
  			<div class="col-sm-1" style="text-align: right;">
  				<a href="mrg_theme.php?logout='1'" style="font-size: 25px; color: white">Logout</a>
  			</div>
  	</div>	
		<div class="container result_container">
			<div class="row">
				<div class="col-xs-12 col-sm-2"></div>
				<div class="col-xs-12 col-sm-8">
					<div class="result" id="result"></div>
				</div>
				<div class="col-xs-12 col-sm-2"></div>
			</div>
		</div>
	<!-- <div class="container result_container">
		<div class="row">
			<div class="col-xs-12 col-sm-2"></div>
			<div class="col-xs-12 col-sm-8">
				<div class="result" id="result">
					<div class="img1">
    					<div id="result1"></div>
					</div>
				</div>
			</div>
				<div class="col-xs-12 col-sm-2"></div>
		</div>
	</div>
 -->
	</body>
</html>