<?php
session_start();
?>
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
    background: url(../../public/images/egyeurologo.jpg) no-repeat top left;
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
    padding: 60px ;
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
 
.contact{
    
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



    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact Us Page - talabat</title>
        <!-- <link rel="stylesheet" href="style.css"> -->
    </head>

</head>
 <body>
 <?php

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
        
</div>
    <div class="about-section">
        <div class="inner-container">
            <br>
            <br>
            <h1>Contact Us</h1>
            <p class="text">
                Hello 
                if you have any questions regarding our restaurants,how can you order your favourite, misusing anything and need help, refunding or exchanging anyhting, you're more than welcome! 
                <br>
                dont hesitate to contact us through any of these options: 
                 
                <br>
               <img src="http://localhost/Software-Engineering/public/images/phone3.PNG" height="22px" width="22px" alt="" > +2 02 26376754
                <br>
                 <img src="http://localhost/Software-Engineering/public/images/mail2.PNG" height="22px" width="22px" alt="" >  info@talabat.com
                 <br>
                 <img src="http://localhost/Software-Engineering/public/images/fb7.PNG" height="22px" width="22px" alt="" >  <a href="https://web.facebook.com/EgyEuro.Official">our facebook page</a>
                 <h2>  or you can chat with us from here:</h2>
            </p>
            <div class="contact" >
              

            
            <span class="Active"  > <a href="./Chat.php">Chat</a> </span>
                     
               
            </div>
        </div>
    </div>
</body>
</html>