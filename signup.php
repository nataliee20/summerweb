

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webproject";


if(isset($_POST['Submit'])){

	$conn = new mysqli($servername, $username, $password, $dbname);
	 
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}


	$uname = $_POST['UserName'];
	$pass = $_POST['Password'];
	$fn = $_POST['FName'];
	$ln = $_POST['LName'];
	$email = $_POST['Email'];


	 
	$sql  = "INSERT INTO users (UserName, Password, FName, LName, Email) VALUES
	('$uname', '$pass', '$fn', '$ln', '$email')";
	 
	if ($conn->query($sql) === TRUE) {
		?>
		<div class= "success">
		Record inserted successfully!
		</div>
	    <?php
		
		
	
		header("Location:../summerweb/login.php");
	 }
	
	else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

}




?>
<html>

<style>
*{
	padding: 0;
	margin: 0;
}
body{
  background: url(http://wrbbradio.org/wp-content/uploads/2016/10/grey-background-07.jpg) no-repeat center fixed;
  background-size: cover;
}

.container{
	background: #2d3e3f;
	width: 350px;
	height: 400px;
	padding-bottom: 20px;
	position: absolute;
	top:50%;
	left: 50%;
	transform: translate(-50%, -50%);
	margin: auto;
  padding: 70px 50px 20px 50px;
}


.fl{
	float: left;
  width: 110px;
  line-height: 35px;
}

.fontLabel{
  color: white;
}

.fr{
	float: right;
}

.clr{
	clear: both;
}

.box{
	width: 360px;
	height: 35px;
	margin-top: 10px;
	font-family: verdana;
	font-size: 12px;
}

.textBox{
	height: 35px;
	width: 190px;
	border: none;
  padding-left: 20px;
}

.new{
  float: left;
}

.iconBox{
	height: 35px;
	width: 40px;
	line-height: 38px;
	text-align: center;
  background: #ff6600;
}

.radio{
	color: white;
	background: #2d3e3f;
	line-height: 38px;
}

.terms{
	line-height: 35px;
	text-align: center;
	background: #2d3e3f;
	color: white;
}

.submit{
	float: right;
	border: none;
	color: white;
	width: 110px;
	height: 35px;
	background: #ff6600;
	text-transform: uppercase;
  cursor: pointer;
}
.success{
	text-align: center;
	margin-top: 40px;
	font-weight: bold;
	font-size: 20px;
}
h1{
	color: white;
	
}

::-webkit-input-placeholder { /* Chrome/Opera/Safari */

}
/*nav*/
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #FF7518;
  color: white;
}


      

</style>
<head>
	<script>

		function ValidateEmail(inputText)
		{
			var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
			if(inputText.value.match(mailformat))
			{
				alert("Valid email address!");
				document.myForm.Email.focus();
				return true;
			}
			else
			{
				alert("You have entered an invalid email address!");
				document.myForm.Email.focus();
				return false;
			}
		}


	</script>




    <meta charset="utf-8">
    <title>Form</title>
    <link href="css/style.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>
 
 <body>
 <?php

if(isset($_SESSION['ID'])) 
{
include("nav-bar.php");
}
else
{

echo'   <div class="topnav">
<a href="http://localhost/summerweb/home.php">Home</a>
<a href="http://localhost/summerweb/contactUs.php">Contact Us</a>
 <a href="http://localhost/summerweb/aboutUs.php">About Us</a>
 <a href="http://localhost/summerweb/signup.php">Sign Up</a>
 <a href="http://localhost/summerweb/login.php">Login</a>
  <a href="http://localhost/summerweb/restaurants.php">Shops</a>
</div>';
}
?>
    <!-- Body of Form starts -->
  	<div class="container">

  		<h1>SIGN UP: </h1>
    	<form action="" method="POST" name = "myForm"autocomplete="on"  onsubmit="ValidateEmail(document.myForm.Email)">
        <!--First name-->


    		<div class="box">
          <label for="firstName" class="fl fontLabel"> First Name: </label>
    			<div class="new iconBox">
            <i class="fa fa-user" aria-hidden="true"></i>
          </div>
    			<div class="fr">
    					<input type="text" name="FName" placeholder="First Name"
              class="textBox" autofocus="on" required>
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!--First name-->


        <!--Second name-->
    		<div class="box">
          <label for="LastName" class="fl fontLabel"> Seconed Name: </label>
    			<div class="fl iconBox"><i class="fa fa-user" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="text" required name="LName"
              placeholder="Last Name" class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!--Second name-->


    		    



    		<!---Email ID---->
    		<div class="box">
          <label for="Email" class="fl fontLabel"> Email ID: </label>
    			<div class="fl iconBox"><i class="fa fa-envelope" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="email" required name="Email" placeholder="Email Id" class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!--Email ID----->

  <!--username-->
    		<div class="box">
          <label for="UserName" class="fl fontLabel"> User Name: </label>
    			<div class="fl iconBox"><i class="fa fa-user" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="text" required name="UserName"
              placeholder="User Name" class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!--user name-->

    		<!---Password------>
    		<div class="box">
          <label for="Password" class="fl fontLabel"> Password </label>
    			<div class="fl iconBox"><i class="fa fa-key" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="Password" required name="Password" placeholder="Password" class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!---Password---->



    		<!---Submit Button------>
    		<div class="box" style="background: #2d3e3f">
			<a href="http://localhost/summerweb/login.php/">
    				<input type="Submit" name="Submit" class="submit" value="SUBMIT"> </a>

    		</div>
    		<!---Submit Button----->
      </form>
  </div>
  <!--Body of Form ends--->
  </body>
</html>


