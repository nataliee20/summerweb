<?php
session_start();
?>
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
	height: 600px;
	padding-bottom: 20px;
	position: absolute;
	top:50%;
	left: 50%;
	transform: translate(-50%, -50%);
	margin: auto;
  padding: 70px 50px 20px 50px;
}

.topnav a.active {
  background-color: #FF7518;
  color: black;
}
.name{
	color: black;
	font-size: 30px;
	text-align: center;	
}
.form-group{
	color: black;
}
.btn 
{
	color: black;
	background-color: #FF7518; 
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
 .shops{
  font-weight:bold ;
 
 }

 /* //dropdown */
<style>
.dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
   /* position: relative;  */
  display: inline-block;
}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>


<?php

//Session not set
if(!isset($_SESSION['ID'])) 
{
include("nav-bar.php");
}
//Session is set
else
{
$name =  $_SESSION['UserName'];

echo'   <div class="topnav">
<a href="http://localhost/summerweb/home.php">Home</a>
<a href="http://localhost/summerweb/contactUs.php">Contact Us</a>
 <a href="http://localhost/summerweb/aboutUs.php">About Us</a>
  <a href="http://localhost/summerweb/restaurants.php">Shops</a>
 
 <div class="dropdown">

     <button class="dropbtn">   '.$name.' </button>
     <div class="dropdown-content">
      <a href="http://localhost/summerweb/profile.php">profile</a>
      <a href="http://localhost/summerweb/logout.php">logout</a>
    </div>
  </div>
  
</div>';
}

//include "menu.php";
  
       $servername = "localhost";
       $username = "root";
       $password = "";
       $dbname = "webproject";
              
       // Create connection
       $conn = mysqli_connect($servername,$username,$password,$dbname);
       $sql="select * from users where UserID = '".$_GET['ID']."'"; //select kol el rows
       $result = mysqli_query($conn,$sql);	
  
	while($row=mysqli_fetch_array($result))	
	{
        $UserName=$row[0];
        $Password=$row[1];
        $FName=$row[2];
        $LName=$row[3];
        $Email=$row[4];
        $Age=$row[5];
        $UserID=$row[6];
    }
?>

<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="menu.css">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>


<div class="container">
	<div class="name">Edit User</div>
	<form method="POST" action = "">

		<div class="form-group">
            <label for="productname">UserName</label>
            <input type="text" class="form-control" id="username" value="<?php  $UserName;?>" name="username">
		</div>

		<div class="form-group">
            <label for="productname">Password</label>
            <input type="text" class="form-control" id="password" value="<?php  $Password;?>" name="password">
		</div>
		
		<div class="form-group">
            <label for="productname">First name</label>
            <input type="text" class="form-control" id="fname" value="<?php  $FName;?>" name="fname">
		</div>

		<div class="form-group">
            <label for="productname">Last name</label>
            <input type="text" class="form-control" id="lname" value="<?php  $LName;?>" name="lname">
		</div>

		<div class="form-group">
            <label for="productname">Email</label>
            <input type="text" class="form-control" id="email" value="<?php  $Email;?>" name="email">
		</div>




<button type="submit" value="submit" name="submit" class="btn ">Submit</button>


	</form>
</div>
</html>

<?php

$servername="localhost";
$user="root";
$password="";
$database="webproject";

// Create connection
$conn = new mysqli($servername, $user, $password, $database);

if(isset($_POST['submit'])){ 
	echo $_POST['username'];
	echo $_POST['password'];
	echo $_POST['fname'];
	echo $_POST['lname'];
	echo $_POST['email'];
	$sql="UPDATE users SET UserName='".$_POST['username']."',FName='".$_POST['FName']."',LName='".$_POST['LName']."',Email='".$_POST['Email']."', Password='".$_POST['Password']."' WHERE UserID = '".$_GET['ID']."'";

	
//"update products set Name ='".$_POST['productname']."', Description = '".$_POST['description']."', Price = '".$_POST['price']."', where ProductID = '".$_GET['X']."'";

	$result = mysqli_query($conn,$sql);		

	if(!$result){

		die("Error");
	}
	else{
		
		
		$_SESSION["UserName"]=$_POST["username"];
		$_SESSION["LName"]=$_POST["lname"];
		$_SESSION["FName"]=$_POST["fname"];
		$_SESSION["Password"]=$_POST["password"];
		$_SESSION["Email"]=$_POST["email"];
		
		header("Location:profile.php");
	}
}

?>