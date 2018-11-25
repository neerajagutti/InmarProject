<?php
session_start();
if(isset($_SESSION['email']))
{
  header('location:jsontojquery.php');
}
if (isset($_GET['logout'])) {
  unset($_SESSION['email']);
  session_destroy();
  header('location:mrg_theme.php');
}
if(isset($_SESSION['useremail']))
{
  header('location:buyerdashboard.php');
}
if (isset($_GET['logout'])) {
  unset($_SESSION['useremail']);
  session_destroy();
  header('location:mrg_theme.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>Bootstrap Theme The Band</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="signin.css">
  <script type="text/javascript" src="js-fol/registrationvalidation.js">
  </script>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">Fruits Adda</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#myPage">HOME</a></li>
        <li><a href="#band">ABOUT</a></li>
        <li><a href="#contact">CONTACT</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Retailer Login/SignUp
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li id="dpdownbutton" data-toggle="modal" data-target="#myModal">Sign Up</li>
            <li id="dpdownbutton" data-toggle="modal" data-target="#myModal1">Login</li>
          </ul>
        </li>
         <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Customer Login/SignuUP
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li id="dpdownbutton" data-toggle="modal" data-target="#myModal2">Sign Up</a></li>
            <li id="dpdownbutton" data-toggle="modal" data-target="#myModal3">Login</a></li>
          </ul>
        </li>

        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">    
<!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="images/image13.jpg" alt="New York" width="400" height="500">     
        </div>
        <div class="item">
          <img src="image3.jpg" alt="Los Angeles" width="400" height="500">     
        </div>
        <div class="item">
          <img src="image6.jpg" alt="Los Angeles" width="400" height="500">     
        </div>
  <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
        </a>
    </div>

<!-- Container (The Band Section) -->
  <div id="band" class="container text-center">
    <h3>FRUITS ADDA</h3>
    <p><em>LOVE FRUITS</em></p>
    <p> Fruits contain many vitamins and minerals that are good for your health. These include vitamins A (beta-carotene), C and E, magnesium, zinc, phosphorous and folic acid. Folic acid may reduce blood levels of homocysteine, a substance that may be a risk factor for coronary heart disease. Fruits contain phytochemicals, or plant chemicals. These biologically active substances can help to protect you from some diseases.Fruit is the sweet, fleshy, edible part of a plant. It generally contains seeds. Fruits are usually eaten raw, although some varieties can be cooked. They come in a wide variety of colours, shapes and flavours. </p>
    <br>
    <div class="row">
      <div class="col-sm-4">
        <p class="text-center"><strong>Good Life and Good Sense are two of life's greatest blessings </strong></p><br>
        <a href="#demo" data-toggle="collapse">
        <img src="images/aimg1.png" class="img-circle person" alt="Random Name" width="400" height="800">
        </a>
        <div id="demo" class="collapse">
          <p>Make ur life healthy</p>
          <p>with</p>
          <p>our fresh-fruits</p>
        </div>
      </div>
      <div class="col-sm-4">
        <p class="text-center"><strong>Health is a greatest gift,faithfullness the best relationship</strong></p><br>
        <a href="#demo2" data-toggle="collapse">
          <img src="images/aimg2.png" class="img-circle person" alt="Random Name" width="300" height="1000">
        </a>
        <div id="demo2" class="collapse">
          <p>A Healthy outside</p>
          <p>Starts from</p>
          <p>the inside.</p>
        </div>
      </div>
        <div class="col-sm-4">
          <p class="text-center"><strong>Eat Food Feel Good---Live happy life with healthy fruits</strong></p><br>
          <a href="#demo1" data-toggle="collapse">
          <img src="images/aimg3.png" class="img-circle person" alt="Random Name" width="255" height="255">
          </a>
          <div id="demo1" class="collapse">
          <p>Health</p>
          <p>requires the healthy</p>
          <p>food.</p>
          </div>
        </div>
  </div>
</div>
<!-- Container (Contact Section) -->
<div id="contact" class="container">
    <h3 class="text-center">Contact</h3>
    <p class="text-center"><em>We love our fans!</em></p>
<div class="row">
    <div class="col-md-12">
      <center><p></p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Vijayawada, Andhra Pradesh</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: +91 9848052919</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: fruits_store@mail.com</p></center>
    </div>
    </div>
  </div>
  <br>
  <h2 class="text-center">PATIENCE IS A TREE WHOSE ROOT IS BITTER, BUT ITS FRUIT IS VERY SWEET</h2>  
<!-- Footer -->
  <footer class="text-center">
      <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
      <span class="glyphicon glyphicon-chevron-up"></span>
      </a><br><br>
      <p>THANK YOU FOR VISITING</p> 
  </footer>
  <script src="js-fol/firstpagemove.js"></script>

<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
    
      <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"   style="color: #034f84" class="w3-container w3-center w3-animate-right"><strong>Retailer Sign Up</strong></h4>
        </div>
        <div class="modal-body">
              <form action="retailerregisterserver.php" method="POST">
                    <div class="form-group">
                      <label class="w3-container w3-center w3-animate-right"><b>Email<sup style="color: red">*</sup></b></label>
                      <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" style="color: #00539C" required  onkeyup="validation('email')">
                      <p id="error_email" style="color: red">Invalid Email</p>
                    </div>
                    <div class="form-group">
                      <label class="w3-container w3-center w3-animate-right" ><b>First Name<sup style="color: red">*</sup> </b></label>
                      <input type="text" class="form-control" id="firstname" placeholder="Enter First Name" name="firstname" style="color: #00539C" required onkeyup="validation('firstname')">
                      <p id="error_firstname" style="color: red">First Name is required</p>
                    </div>
                    <div class="form-group">
                      <label class="w3-container w3-center w3-animate-right"><b>Last Name<sup style="color: red">*</sup></b></label>
                      <input type="text" class="form-control" id="lastname" placeholder="Enter Last Name" name="lastname" style="color: #00539C" required onkeyup="validation('lastname')">
                      <p id="error_lastname" style="color: red">Last Name is required</p>
                    </div>
                    <div class="form-group">
                      <label class="w3-container w3-center w3-animate-right"><b>PAN Number<sup style="color: red">*</sup></b></label>
                      <input type="text" class="form-control" id="pannumber" placeholder="Enter PAN Number" name="pannumber" style="color: #00539C" required onkeyup="validation('pannumber')">
                      <p id="error_pannumber" style="color: red">PAN Number is required</p>
                    </div>
                    <div class="form-group">
                      <label class="w3-container w3-center w3-animate-right"><b>Phone Number<sup style="color: red">*</sup></b></label>
                      <input type="text" class="form-control" id="phonenumber" placeholder="Enter Phone Number" name="phonenumber" style="color: #00539C" required onkeyup="validation('phonenumber')">
                      <p id="error_phonenumber" style="color: red">Phone Number is required</p>
                    </div>
                    <div class="form-group">
                      <label class="w3-container w3-center w3-animate-right"><b>Address<sup style="color: red">*</sup></b></label>
                      <input type="text" class="form-control" id="address" placeholder="Enter Address" name="address" style="color: #00539C" required onkeyup="validation('address')">
                      <p id="error_address" style="color: red">required</p>
                    </div>
                    <div class="form-group">
                      <label class="w3-container w3-center w3-animate-right"><b>Shop Name<sup style="color: red">*</sup></b></label>
                      <input type="text" class="form-control" id="address" placeholder="Enter ShopName" name="shopname" style="color: #00539C" required onkeyup="validation('shopname')">
                      <p id="error_address" style="color: red">required</p>
                    </div>
                    
                    <div class="form-group">
                      <label class="w3-container w3-center w3-animate-right"><b>Password<sup style="color: red">*</sup></b></label>
                      <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password" style="color: #00539C" required onkeyup="validation('password')">
                      <p id="error_password" style="color: red">Invalid Password</p>
                    </div>
                    <div class="form-group">
                      <label class="w3-container w3-center w3-animate-right" ><b>Confirm Password<sup style="color: red">*</sup></b></label>
                      <input type="password" class="form-control" id="confirm_password" placeholder="Confirm Password" name="confirmpassword" style="color: #00539C"required onkeyup="validation('confirm_password')" onfocus="checking()">
                      <p id="error_confirmpassword" style="color: red">Invalid Password</p>
                    </div>
                    <div class="checkbox">
                      <label><input type="checkbox"> Remember me</label>
                    </div>
                    <button type="submit" name="retailersubmit" id="bt1" class="btn btn-default" onclick="form_send()" disabled="true">Register</button>
              </form>         
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div>
  </div>
</div>
<div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"   style="color: #034f84" class="w3-container w3-center w3-animate-right"><strong>Retailer Login</strong></h4>
        </div>
        <div class="modal-body">
              <form action="retailerloginpage.php" method="POST">
                    <div class="form-group">
                      <label class="w3-container w3-center w3-animate-right"><b>Email<sup style="color: red">*</sup></b></label>
                      <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" style="color: #00539C" required>
                    </div>
                    
                    <div class="form-group">
                      <label class="w3-container w3-center w3-animate-right"><b>Password<sup style="color: red">*</sup></b></label>
                      <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password" style="color: #00539C" required>
                    </div>
                    <button type="submit" class="btn btn-default" id="bt1">Login</button>
              </form>         
        </div>
       <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
</div>
<div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"   style="color: #034f84" class="w3-container w3-center w3-animate-right"><strong>customer Sign Up</strong></h4>
        </div>
        <div class="modal-body">
              <form action="customerregisterserver.php" method="POST">
                    <div class="form-group">
                      <label class="w3-container w3-center w3-animate-right"><b>Email<sup style="color: red">*</sup></b></label>
                      <input type="email" class="form-control" id="useremail" placeholder="Enter Email" name="useremail" style="color: #00539C" required  onkeyup="validation1('useremail')">
                      <p id="error_useremail">Invalid Email</p>
                    </div>
                    <div class="form-group">
                      <label class="w3-container w3-center w3-animate-right" ><b>First Name<sup style="color: red">*</sup> </b></label>
                      <input type="text" class="form-control" id="userfirstname" placeholder="Enter First Name" name="userfirstname" style="color: #00539C" required onkeyup="validation1('userfirstname')">
                      <p id="error_userfirstname">First Name is required</p>
                    </div>
                    <div class="form-group">
                      <label class="w3-container w3-center w3-animate-right"><b>Last Name<sup style="color: red">*</sup></b></label>
                      <input type="text" class="form-control" id="userlastname" placeholder="Enter Last Name" name="userlastname" style="color: #00539C" required 
                      onkeyup="validation1('userlastname')">
                      <p id="error_userlastname">Last Name is required</p>
                    </div>
                    <div class="form-group">
                      <label class="w3-container w3-center w3-animate-right"><b>PAN Number<sup style="color: red">*</sup></b></label>
                      <input type="text" class="form-control" id="userpannumber" placeholder="Enter PAN Number" name="userpannumber" style="color: #00539C" required
                       onkeyup="validation1('userpannumber')">
                      <p id="error_userpannumber">PAN Number is required</p>
                    </div>
                    <div class="form-group">
                      <label class="w3-container w3-center w3-animate-right"><b>Phone Number<sup style="color: red">*</sup></b></label>
                      <input type="text" class="form-control" id="userphonenumber" placeholder="Enter Phone Number" name="userphonenumber" style="color: #00539C" required onkeyup="validation1('userphonenumber')">
                      <p id="error_userphonenumber">Phone Number is required</p>
                    </div>
                    <div class="form-group">
                      <label class="w3-container w3-center w3-animate-right"><b>Address<sup style="color: red">*</sup></b></label>
                      <input type="text" class="form-control" id="useraddress" placeholder="Enter Address" name="useraddress" style="color: #00539C" required onkeyup="validation1('useraddress')">
                      <p id="error_useraddress">required</p>
                    </div>
                    
                    <div class="form-group">
                      <label class="w3-container w3-center w3-animate-right"><b>Password<sup style="color: red">*</sup></b></label>
                      <input type="password" class="form-control" id="userpassword" placeholder="Enter Password" name="userpassword" style="color: #00539C" required
                       onkeyup="validation1('userpassword')">
                      <p id="error_userpassword">Invalid Password</p>
                    </div>
                    <div class="form-group">
                      <label class="w3-container w3-center w3-animate-right" ><b>Confirm Password<sup style="color: red">*</sup></b></label>
                      <input type="password" class="form-control" id="userconfirm_password" placeholder="Confirm Password" name="userconfirm_password" style="color: #00539C" required 
                      onkeyup="validation1('userconfirm_password')" onfocus="checking1()">
                      <p id="error_userconfirm_password" style="color: red">Invalid Password</p>
                    </div>
                    <div class="checkbox">
                      <label><input type="checkbox"> Remember me</label>
                    </div>
                    <button type="submit" name="retailersubmit" id="bt11" class="btn btn-default" onclick="form_send1()" disabled="true">Register</button>
              </form>         
        
          <button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>

              </div>

    </div>
</div>
<div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"   style="color: #034f84" class="w3-container w3-center w3-animate-right"><strong>Customer Login</strong></h4>
        </div>
        <div class="modal-body">
              <form action="customerloginpage.php" method="POST">
                    <div class="form-group">
                      <label class="w3-container w3-center w3-animate-right"><b>Email<sup style="color: red">*</sup></b></label>
                      <input type="email" class="form-control" id="useremail" placeholder="Enter Email" name="useremail" style="color: #00539C" required>
                    </div>
                    
                    <div class="form-group">
                      <label class="w3-container w3-center w3-animate-right"><b>Password<sup style="color: red">*</sup></b></label>
                      <input type="password" class="form-control" id="userpassword" placeholder="Enter Password" name="userpassword" style="color: #00539C" required>
                    </div>
                    <button type="submit" class="btn btn-default" id="bt1">Login</button>
              </form>         
        </div>
       
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>

              </div>

    </div>
</div>

</body>
</html>
