<?php
session_start();
if (!isset($_SESSION['email'])) {
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
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="signin.css">
	<link rel="stylesheet" type="text/css" href="sidenav.css">
	<script type="text/javascript" src="js-fol/jquery.js"></script>
	<script type="text/javascript">
		function openNav() {
    		document.getElementById("mySidenav").style.width = "250px";
 		}
		function closeNav() {
   			document.getElementById("mySidenav").style.width = "0";
 		}
		$(document).ready(function(){			
			var email=$("#useremailid").text().trim();
			var fruits_from_server="";
			$.post("get_fruit_information.php",
				    {"email":email},
				    function(data,status){
				    	console.log(data);
				    	fruits_from_server=JSON.parse(data);
				    	//alert(fruits_from_server[2].fname);
				    	drawTable(fruits_from_server,email);
				    }
		    );
									
			$(document).on("click","#delete",function(){
					var temp=$(this).attr("name");
					console.log(temp.split(":")[0]+" "+temp.split(":")[1]);
					deleteRow(temp.split(":")[0],temp.split(":")[1]);
			});
			$(document).on("click","#update",function(){
					var temp=$(this).attr("name");
					//console.log(temp);
			});
			$("#btn_add").click(function(){
				$("tbody").remove();
				$.post("add_fruit_information.php",
				    {
				      "email":email,
				      "fruit_name":$("#fruit_name").val(),
				      "quantity":$("#quantity").val(),
				      "price":$("#price").val()
				    },
				    function(data,status){
				    	console.log(data);
				    	fruits_from_server=JSON.parse(data);
				    	drawTable(fruits_from_server,email);
				    }
		    	);
			});
			$(document).on("click","#update",function(){
				var index=$(this).attr("name");
				console.log(index);
				console.log(fruits_from_server[index].fname);
				$("#update_fruit").text(fruits_from_server[index].fname);
				$("#update_quantity").val(fruits_from_server[index].quantity);
				$("#update_price").val(fruits_from_server[index].price);

			});
			$("#update_btn").click(function(){
				 $("tbody").remove();
				 $.post("update_fruit_information.php",
				    {
				      "email":email,
				      "fruit_name":$("#update_fruit").text(),
				      "quantity":$("#update_quantity").val(),
				      "price":$("#update_price").val()
				    },
				    function(data,status){
				    	console.log(data);
				    	fruits_from_server=JSON.parse(data);
				    	drawTable(fruits_from_server,email);
				    }
		    	);
			});
		});
		function drawTable(fruits,email){
			//console.log(fruits.length);
			for (var i = 0; i < fruits.length; i++) {
        			drawRow(fruits[i],email,i);
    		}
		}
		function drawRow(fruit,email,index)
		{
			    //console.log(fruit.fname);
				var row = $("<tr />");
				var tbody=$("<tbody/>");
				$("#tableone").append(tbody);
			    tbody.append(row); 
			    row.append($("<td>" + fruit.fname + "</td>"));
			    row.append($("<td>" + fruit.quantity + "</td>"));
			    row.append($("<td>" + fruit.price + "</td>"));
			    row.append($("<td><img data-toggle='modal' data-target='#myModal' id='update' name='"+index+"' src='images/update1.png' width='50' height='35'></td>"));
			    row.append($("<td><img id='delete' name='"+email+":"+fruit.fname+"' src='images/Delete.png' width='35' height='35'></td>"));
			    
		}       
		function deleteRow(email,fruit_name)
		{
			
			$("tbody").remove();
			$.post("delete_fruit_information.php",
				    {"email":email,"fruit_name":fruit_name},
				    function(data,status){				    	
				    	//console.log(data);
				    	fruits_from_server=JSON.parse(data);
				    	drawTable(fruits_from_server,email);
				    }
				  );
		}
		</script> 
</head>
<body id="body1">
	<nav class="navbar navbar-inverse">
  		<div class="container-fluid">
    		<div class="navbar-header" >
      			<a class="navbar-brand" >
      				<div id="mySidenav" class="sidenav">
  						<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  						<!-- <a href="#">About</a>
  						<a href="#">Services</a>
  						<a href="#">Clients</a>
  						<a href="#">Contact</a>
					 --></div>
					<span style="font-size:30px;cursor:pointer ;color: white"onclick="openNav()">&#9776; <strong style="color: white">Fruit Adda</strong></span>
				</a>
    		</div>
    		<ul class="nav navbar-nav navbar-right"><br>
    			<li class="nav-item"><a  style='font-size:10px;color:red'></a></li>
    			<li class="nav-item"><a id="useremailid"  style="font-size: 15px;">
    			<?php
				echo $_SESSION['email'];
				?></a></li>
				
				<li class="nav-item"><a class='fas fa-wallet' style='font-size:24px;color:red'>Wallet</a></li>
    			<li class="nav-item"><a href="mrg_theme.php?logout='1'" style="font-size: 15px;">LOGOUT</a></li>
    		</ul>
  		</div>
  	</nav>


 <!--start Modal add information-->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Adding Fruit</h4>
        </div>
        <div class="modal-body">
           <form >
					<div class="form-group">
  						<label> FruitName:</label>
  						<input type="text" class="form-control" id="fruit_name">
					</div>
					<div class="form-group">
  						<label>Quantity:</label>
  						<input type="text" class="form-control" id="quantity">
					</div>
					<div class="form-group">
  						<label>Price:</label>
  						<input type="text" class="form-control" id="price">
					</div>
					<button type="button" id="btn_add" class="btn btn-default" data-dismiss="modal">Add</button>
			</form>         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
 <!--End Modal add information-->
<!--start Modal update-->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" id="update_fruit"></h4>
        </div>
        <div class="modal-body">
           <form>
           		<div class="form-group">
           			<label>Qunatity</label>
           			<input type="number" id="update_quantity" class="form-control">           			
           		</div>
           		<div class="form-group">
           			<label>Price</label>
           			<input type="number" id="update_price" class="form-control">           			
           		</div>
           		<button id="update_btn" type="button" class="btn btn-default" data-dismiss="modal">Update</button>
           </form>           
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
 <!--End Modal update-->
  
	<div class="container fruit_information" style="">
		<div class="row">
			<div class="col-xs-12 col-sm-3"></div>
			<div class="col-xs-12 col-sm-6">
				<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal2">Add</button>

				<table class="table table-strited" id="tableone">
					<thead>
						<tr>
							<th>Fruit</th>
							<th>Quantity</th>
							<th>Price/Unit</th>
							<th>Update</th>
							<th>Delete</th>
						</tr>
					</thead>					
				</table>
			</div>
			<div class="col-xs-12 col-sm-3"></div>
		</div>
	</div>
	<!-- <div class="container add_fruit_information">
		<div class="row">
			<div class="col-xs-12 col-sm-4"></div>		
			<div class="col-xs-12 col-sm-4">
				
			</div>		
			<div class="col-xs-12 col-sm-4"></div>		
		</div>
	</div> -->
	


<footer class="text-center">
  <a class="up-arrow" href="#body1" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>HAVE A DELICIOUS FRUITS</p> 
</footer>
</body>
</html>