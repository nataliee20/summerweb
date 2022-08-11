<?php
session_start();
?>

<!DOCTYPE html>
<html>

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

  /* //dropdown */

  .h2 {
    background-color: white;
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

  .dropdown-content a:hover {background-color: white;}

  .dropdown:hover .dropdown-content {display: block;}

  .dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>

<title>restaurants</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <body>
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

     <button class="dropbtn">   '.$name.'  </button>
     <div class="dropdown-content">
      <a href="http://localhost/summerweb/profile.php">profile</a>
      <a href="http://localhost/summerweb/logout.php">logout</a>
    </div>
  </div>
  
</div>';
}
?>
<div class="w3-container">

<h1 style="text-align:center; font-weight: bold;">Shops</h1>

<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "webproject";
  
  
  // Create connection
  $conn = mysqli_connect($servername,$username,$password,$dbname);

  $sql="SELECT * from shop;";
  $result = mysqli_query($conn, $sql);
  while($row = mysqli_fetch_array($result))
  {
?>
<div class="w3-bar w3-white" style="height:150px; width:1000px;">
  <div class="w3-bar-item"><?php echo $row['Name']; ?></div>
  <div class="product-image">
    <a href="http://localhost/summerweb/cat.php?id=<?php echo $row['ShopID']; ?>">
      <img src="http://localhost<?php echo $row['Logo']; ?>" style="height:120px; padding:20px;">
      <h8 style=" text-align: top; text-align: left;"> <?php echo $row['Description']; ?>  </h8>
    </a>
  </div>
</div>
<?php } ?>



</body>
</html>
                    