<style>
*{   
  
    flex-direction=row;
      justify-content: center;
      align-items: center;
      text-align:center;
      font-family: "Open Sans",sans-serif;
      box-sizing: border-box;
  }
  body{
    display:block;
    align-items: center;
    justify-content: center;
    background-color: #f1f1f1;
}
.about-section{
    display:block;
    background-size: 10%;
    background-color: #fdfdfd;
    overflow: hidden;
    height: 100%;
    width:100%;
    padding: 100px ;
}
.inner-container{
    width: 100%;
    height:120%;
    float: right;
    background: url(../../summerweb/images/logo.png) no-repeat top center;
    background-size: 10%;
    background-color: #FF7518;
    padding: 100px ;
box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;
 
}
.inner-container h1{
    margin-bottom: 30px;
    font-size: 30px;
    font-weight: 900;
}
 
.text{
    font-size: 20px;
    color: #545454;
    line-height: 30px;
    text-align: justify;
    margin-bottom: 40px;
}
h1{
  color: black;
}
 
.about{
    
    justify-content: space-between;
    font-weight: 700;
    font-size: 13px;
}
 
@media screen and (max-width:1200px){
    .inner-container{
        padding: 100px;
    }
}
 
@media screen and (max-width:1000px){
    .about-section{
        background-size: 100%;
        padding: 100px 40px;
    }
    .inner-container{
        width: 100%;
    }
}
 
@media screen and (max-width:600px){
    .about-section{
        padding: 100;
    }
    .inner-container{
        padding: 100px;
    }
}
span{
        cursor: pointer;
        font-size: 16px;
      text-align: center;
      padding: 10px;
        width: 500px;
        height: 100px;
      }
      span:hover{
      background-image: linear-gradient(to right top, lightgrey, lightgrey, lightgrey, lightgrey, lightgrey);
      color: #fff;
      border-radius: 20px;
      transition: 0.5s;
 
}
.Active{
  background-image: linear-gradient(to right top, black, black, black, black, black);
  color: #fff;
  border-radius: 20px;
 
 
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
 
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>talabat</title>
        <!-- <link rel="stylesheet" href="style.css"> -->
    </head>
    
        <div class="about-section">
            <div class="inner-container">
                <h1>About Us</h1>
                <p class="text">
                No matter what you are doing, Talabat has your back. Order now Fast and easy. Got an appetite? We're here for you with a great selection of restaurants & dishes. No More Calls. Top Restaurants Available. Pay Cash on Delivery. Best Food Delivery App.
                     <h2> For more info you can contact us from here:</h2>
                     <br>
                </p>
                <div class="about" >
                
                     <span class="Active"  > <a href="http://localhost/summerweb/contactUs.php">Contact Us</a> </span>
                     
                   </form>
                </div>
            </div>
        </div>
    
        
    </body>
    </html>
