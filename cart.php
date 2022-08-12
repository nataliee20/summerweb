<?php
session_start();
include("products.php");
?>
<style>
    html {
  background: #bbc3c6;
  font: 62.5%/1.5em "Trebuchet Ms", helvetica;
}

* {
  box-sizing: border-box;
  -webkit-font-smoothing: antialiased;
  font-smoothing: antialiased;
}

@font-face {
    font-family: 'Shopper';
    src: url('http://www.shopperfont.com/font/Shopper-Std.ttf');
}

.shopper {
  text-transform: lowercase;
  font: 2em 'Shopper', sans-serif;
  line-height: 0.5em;
  display: inline-block;
}



h1 {
  text-transform: uppercase;
  font-weight: bold;
  font-size: 2.5em;
}

p {
  font-size: 1.5em;
  color: #8a8a8a;
}

input {
  border: 0.3em solid #bbc3c6;
  padding: 0.5em 0.3em; 
  font-size: 1.4em;
  color: #8a8a8a;
  text-align: center;
}


a {
  text-decoration: none;
}

.container {
  max-width: 75em;
  width: 95%;
  margin: 40px auto;  
  overflow: hidden;
  position: relative;
  
  border-radius: 0.6em;
  background: #ecf0f1;
  box-shadow: 0 0.5em 0 rgba(138, 148, 152, 0.2);
}

.heading {
  padding: 1em;
  position: relative;
  z-index: 1;
  color: #f7f7f7;
  background: #FF7518;
}

.cart {
  margin: 2.5em;
  overflow: hidden;
}

.cart.is-closed {
  height: 0;
  margin-top: -2.5em;
}

.table {
  background: #ffffff;
  border-radius: 0.6em;
  overflow: hidden;
  clear: both;
  margin-bottom: 1.8em;
}


.layout-inline > * {
  display: inline-block;
}

.align-center {
  text-align: center;
}

.th {
  background: #FF7518;
  color: #fff;
  text-transform: uppercase;
  font-weight: bold;
  font-size: 1.5em;
}

.tf {
  background: #FF7518;
  text-transform: uppercase;
  text-align: right;
  font-size: 1.2em;  
}

.tf p {
  color: #fff;
  font-weight: bold;
}

.col {
  padding: 1em;
  width: 12%;
}

.col-pro {
  width: 44%;
}

.col-pro > * {
  vertical-align: middle;
}

.col-qty {
  text-align: center;
  width: 17%;
}

.col-numeric p {
  font: bold 1.8em helvetica;
}

.col-total p {
  color: #12c8b1;
}

.tf .col {
  width: 20%;
}

.row > div {
  vertical-align: middle;
}

.row-bg2 {
  background: #f7f7f7;
}

.visibility-cart {
  position: absolute;
  color: #fff;
  top: 0.5em;
  right: 0.5em;
  font:  bold 2em arial;
  border: 0.16em solid #fff;
  border-radius: 2.5em;
  padding: 0 0.22em 0 0.25em ;
}

.col-qty > * {
  vertical-align: middle; 
}

.col-qty > input {
  max-width: 2.6em;
}


a.qty {
  width: 1em;
  line-height: 1em;
  border-radius: 2em;
  font-size: 2.5em;
  font-weight: bold;
  text-align: center;
  background: grey;  
  color: #fff;
}

a.qty:hover {
  background: black;
}

.btn {
  padding: 10px 30px;
  border-radius: 0.3em;
  font-size: 1.4em;
  font-weight: bold;
  background: grey;
  color: #fff;
}

.btn:hover {
  box-shadow: 0 3px 0 rgba(0,0,0, 0)
}

.btn-update {
  float: right;
  margin: 0 0 1.5em 0;
}

.transition {
  transition: all 0.3s ease-in-out;
}

@media screen and ( max-width: 755px) {
  .container {
    width: 98%;
  }
  
  .col-pro {
    width: 35%;
  }
  
  .col-qty {
    width: 22%;
  }
  
  img {
    max-width: 100%;
    margin-bottom: 1em;
  }

}

@media screen and ( max-width: 591px) {
  
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

if(isset($_POST["add_to_cart"]))
{
    if(isset($_SESSION["shopping_cart"]))
    {
        $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
        if(!in_array($_GET["item_id"], $item_array_id))
        {
            $count = count($_SESSION["shopping_cart"]);
            $item_array = array(
                'item_id'			=>	$_GET["productID"],
                'item_name'			=>	$_POST["hidden_name"],
                'item_price'		=>	$_POST["hidden_price"],
                'item_quantity'		=>	$_POST["quantity"]
            );
            $_SESSION["shopping_cart"][$count] = $item_array;
        }
        else
        {
            echo '<script>alert("Item Already Added")</script>';
        }
    }
    else
    {
        $item_array = array(
            'item_id'			=>	$_GET["productID"],
            'item_name'			=>	$_POST["hidden_name"],
            'item_price'		=>	$_POST["hidden_price"],
            'item_quantity'		=>	$_POST["quantity"]
        );
        $_SESSION["shopping_cart"][0] = $item_array;
    }

}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["productID"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="cart.php"</script>';
			}
		}
	}
}
?>

<html>
<div class="container">
  <div class="heading">
    <h1>
      <span class="shopper"></span> Shopping Cart
    </h1>
    
    <!-- <a href="#" class="visibility-cart transition is-open">X</a>     -->
  </div>
  
  <div class="cart transition is-open">
    

    
    
    <div class="table">
      
      <div class="layout-inline row th">
        <div class="col col-pro">Product</div>
        <div class="col col-price align-center "> 
          Price
        </div>
        <div class="col col-qty align-center">QTY</div>
        <div class="col">Total</div>
        <div class="col ">remove</div>
      </div>


    <?php
    if(!empty($_SESSION["shopping_cart"]))
		{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
		?>


          
      <div class="layout-inline row">
        
        <div class="col col-pro layout-inline">
        <?php echo $values["item_name"]; ?>
        </div>
        
        <div class="col col-price col-numeric align-center ">
        <?php echo $values["item_price"]; ?>
        </div>

        <div class="col col-qty layout-inline">
        <?php echo $values["item_quantity"]; ?>
        </div>
        
        <div class="col col-total col-numeric"> 
        <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?>           
        </div>

        <div class="col col-total col-numeric"> 
        <a href="cart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a>           
        </div>
      </div>
  
       <div class="tf">
          <div class="row layout-inline">
           <div class="col">
             <p>Total</p>
           <!-- <p style=" align:right"> -->
             <?php
						  echo number_format($values["item_quantity"] * $values["item_price"], 2);
						}
					?>
           </div>
           <div class="col"></div>
         </div>
       </div>  
       <?php 
     }
        ?>       
  </div>
    
    <a href="#" class="btn btn-update">Checkout</a>
  
</div>
</html>