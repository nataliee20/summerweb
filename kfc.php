  <style>
  /*nav*/
body {
	background-color: #FF7518;
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
.w3-container{
	position: absolute;
    top: 50%;  
    left: 43.7%; 
    transform: translate(-50%, -40%);
}



 </style>
<html>
	<center>
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
  <a href="http://localhost/summerweb/restaurants.php">Shops</a>
</div>';
}
?>

	<h1 style="text-align:center"> KFC Menu</h1>
	<div class="w3-container">
	<div style="width: 300px; float:left; height:300px; background:white; margin:10px; text-align:center;">
		<a href="http://localhost/summerweb/kfcmain.php/">
<h3>Main Course<div class="product-image"><img src="http://localhost/summerweb/images/kfcmain.jpg" style="height:120px  ">
</div></h3>
</a>
</div>

<div style="width: 300px; float:left; height:300px; background:white; margin:10px;text-align:center;">
	<a href="http://localhost/summerweb/kfcdrinks.php/">
<h3>Drinks<div class="product-image"><img src="http://localhost/summerweb/images/drinkskfc.jpg" style="height:120px  ">
</div></h3>
</a>
</div>



</center>
</body>
</html>