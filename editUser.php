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

</style>

<?php
session_start();
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
            <input type="text" class="form-control" id="username" value="<?php echo $UserName;?>" name="username">


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
	$sql="UPDATE users SET UserName='".$_POST['username']."' WHERE UserID = '".$_GET['ID']."'";

	
//"update products set Name ='".$_POST['productname']."', Description = '".$_POST['description']."', Price = '".$_POST['price']."', where ProductID = '".$_GET['X']."'";

	$result = mysqli_query($conn,$sql);		

	if(!$result){

		die("Error");
	}
	else{
		
		
		$_SESSION["UserName"]=$_POST["username"];
		
		header("Location:profile.php");
	}
}

?>