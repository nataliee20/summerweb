<?php
session_start();
?>

<!DOCTYPE html>
<html>
  
<style>
              .cards {
                background-color: #FF7518;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
                max-width: 300px;
                margin: auto;
                text-align: center;
                font-family: arial;
                max-height: 550px;
                height: 550px;
                margin-bottom: 1.5rem;
                font-size: 12px;
            }

            .cards form {
                height: 100%;
                display: flex;
                flex-direction: column;
                justify-content: space-between;

            }

            .price {
                color: grey;
                font-size: 22px;
            }

            .cards button, .cards input[type=submit] {
                border: none;
                outline: 0;
                padding: 12px;
                color: white;
                background-color: #000;
                text-align: center;
                cursor: pointer;
                width: 100%;
                font-size: 18px;
            }

            .cards input[type=number] {
                width: 30%;
                margin-bottom: 3px;
            }

            .cards button:hover {
                opacity: 0.7;

            }

            .product-image img {
                max-height: 200px;
                height: 200px;
            }

            .f-16 {
                font-size: 25px;
                padding: 60px;
            }

             /*nav*/
  body {
    background-color: white ;
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
  }

  .topnav {
    overflow: hidden;
    background-color: #333;
  }

  .topnav a, .dropdown {
    float: left;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
  }

  .topnav a:hover{
    background-color: #ddd;
    color: black;
  }
  .topnav .dropdown:hover {
    background-color: green;
    color: black;
  }

  .topnav a.active {
    background-color: #FF7518;
    color: white;
  }
  .shops{
  font-weight:bold ;

  }

  .dropbtn{
    color: #fff;
    font-size: 17px;
    border: none;
    background: transparent !important;
  }
  .dropdown:hover .dropbtn{
    background: transparent !important;
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
    top: 50px;
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
        <div id="product-grid" style="display: flex;flex-wrap: wrap;justify-content: center;">



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
 <div style=" float:right; margin:10px">
 <a href="http://localhost/summerweb/cat.php?id=<?php echo $row['ShopID']; ?>"> 
           <div class="product-item cards" width="200px">
               <form method="post" action="cart.php">
                  <div class="mt-2 f-16"><strong><?php echo $row['Name']; ?></strong></div>
                    <div class="product-image">
                           
                        <img src="http://localhost<?php echo $row['Logo']; ?>" style="height:170px; padding:20px;">
                        </div>
                        <h3 style="  text-align: center;"> <?php echo $row['Description']; ?>  </h3>
                        

                    <div>
                    
                  </div>
                </form>
             </div>
   </div>

<?php } ?>



</body>
</html>