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
       $sql="select * from products where ProductID = '".$_GET['X']."'"; //select kol el rows
       $result = mysqli_query($conn,$sql);	
  
	while($row=mysqli_fetch_array($result))	
	{
              $Name=$row[0];
              $Description=$row[1];
              $Price=$row[2];
              $ProductID=$row[3];
              $CatID=$row[4];
              $SubCatID=$row[5];
              $img=$row[6];
              $Quantity=$row[7];
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
	<div class="name">Edit a product</div>
	<form method="POST" action = "">

		<div class="form-group">
            <label for="productname">Product Name:</label>
            <input type="text" class="form-control" id="productname" value="<?php echo $Name;?>" name="productname">


		</div>

		<div class="form-group">
        <label for="description">Description:</label>
		<input type="text" class="form-control" id="description" value="<?php echo $Description;?>" name="description">
	    </div>


        <div class="form-group">
			<label for="price">Price:</label>
			<input type="text" class="form-control" id="price" value="<?php echo $Price;?>" name="price">
		</div>


	<div class="form-group">
		<label for="quantity">Quantity:</label>
		<input type="text" class="form-control" id="quantity" value="<?php echo $Quantity;?>" name="quantity">
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
	echo $_POST['productname'];
	$sql="UPDATE products SET Name='".$_POST['productname']."',Description='".$_POST['description']."',Price='".$_POST['price']."' WHERE ProductID = '".$_GET['X']."'";

	
//"update products set Name ='".$_POST['productname']."', Description = '".$_POST['description']."', Price = '".$_POST['price']."', where ProductID = '".$_GET['X']."'";

	$result = mysqli_query($conn,$sql);		

	if(!$result){

		die("Error");
	}
	else{
		
		
		$_SESSION["Name"]=$_POST["productname"];
		$_SESSION["Description"]=$_POST["description"];
		$_SESSION["price"]=$_POST["price"];
		header("Location:manageproducts.php");
	}
}

?>