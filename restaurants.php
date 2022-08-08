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
.shops{
 font-weight:bold ;

}


 
</style>
<!DOCTYPE html>
<html>

<title>restaurants</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
<div class="w3-container">

<h1 style="text-align:center; font-weight: bold;">Shops</h1>

<div class="w3-bar w3-white" style="height:150px; width:1000px;">
  <div class="w3-bar-item">Mcdonald's</div>
  <a href="http://localhost/summerweb/mac.php/">
  <div class="product-image"><img src="http://localhost/summerweb/images/macc.png" style="height:120px; padding:20px;">

    <h8 style=" text-align: top; text-align: left;"> fast food restaurant online delivery available 24/7  </h8>
    </a>
  </div>
  
</div>
<br>
<div class="w3-bar w3-white" style="height:150px; width:1000px;">
  <div class="w3-bar-item">KFC</div>
  <a href="http://localhost/summerweb/kfc.php/">
  <div class="product-image"><img src="http://localhost/summerweb/images/kfc.jpg" style="height:120px; padding:20px; ">
    <h8 style=" text-align: top; text-align: left;"> fast food restaurant online delivery available 24/7  </h8>
  </a></div>
</div>
<br>
<div class="w3-bar w3-white" style="height:150px; width:1000px;">
  <div class="w3-bar-item">Wimpy</div>
  <a href="http://localhost/summerweb/wimpy.php/">
  <div class="product-image"><img src="http://localhost/summerweb/images/wimpy.png" style="height:120px; padding:20px;">
    <h8 style=" text-align: top; text-align: left;"> fast food restaurant online delivery available 24/7  </h8>
  </a></div>
</div>

<br>
<div class="w3-bar w3-white" style="height:150px; width:1000px;">
  <div class="w3-bar-item">Grocery</div>
  <a href="http://localhost/summerweb/grocery.php/">
  <div class="product-image"><img src="http://localhost/summerweb/images/grocery.jpg" style="height:120px; padding:20px;">
    <h8 style=" text-align: top; text-align: left;"> you can order all your home groceries  </h8>
  </a></div>
</div>
</body>
</html>
                    