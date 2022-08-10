<!DOCTYPE html>
<html>

<title>restaurants</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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

<?php
                  
if(isset($_SESSION['ID']))
{
echo'';
}
else
{

echo'<script>
alert("Please login")
window.location.href="login.php";
</script>';
}


require('db.php');

                               
$sql= "Select * from users WHERE userID =".$_SESSION['ID']." ";
$result = mysqli_query($conn,$sql);
$check = mysqli_fetch_array($result);

   $ID=$_SESSION['ID'];

   if(!isset($_SESSION['ID'])) 
                    {
                        echo'<div class="topnav">
                        <a href="http://localhost/summerweb/home.php">Home</a>
                        <a href="http://localhost/summerweb/contactUs.php">Contact Us</a>
                        <a href="http://localhost/summerweb/aboutUs.php">About Us</a>
                        <a href="http://localhost/summerweb/restaurants.php">Shops</a>
                        <a href="http://localhost/summerweb/signup.php">Sign Up</a>
                        <a href="http://localhost/summerweb/login.php">Login</a>
                        <a href="http://localhost/summerweb/logout.php">Logout</a>
                        <a href="http://localhost/summerweb/profile.php">Profile</a>
                      </div>';
                    }
?>
</html>