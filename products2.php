
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
                transform: translate(-100%, -5%);
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

           /* body {
                font-size: 16px !important;
            }
*/
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
  <a href="http://localhost/summerweb/restaurants.php">Shops</a>
</div>';
}
?>
        <h2 style="text-align:center; font-weight: bold;">Main Course</h2>
        <div id="product-grid" style="display: flex;flex-wrap: wrap;">

             <div class="product-item cards" width="200px" >
                    <form method="post" action="Products">
                        <div class="mt-2 f-16"><strong> Big Tasty Beef</strong></div>
                        <div class="product-image"><img
                                    src="http://localhost/summerweb/images/bigtastybeef.png"></div>
                        <div class="product-price">price: 110 LE </div>
                        <div class="product-price">Qty: </div>
                             <div>
                            <input type="hidden" name="product_id" value="id"/>
                            <input type="hidden" name="ProductsQty"
                                   value='quantity'/>
                            <input type="number" name="quantity" value="1" size="2"/>
                            <input type="submit" value="Add to cart" class="btnAddAction"/>

                        </div>

                    </div>
                    </form>
                    <div style=" float:right; margin:10px">
                     <div class="product-item cards" width="200px">

                    <form method="post" action="Products">
                        <div class="mt-2 f-16"><strong>Big Tasty Chicken</strong></div>
                        <div class="product-image"><img
                                    src="http://localhost/summerweb/images/bigtastychicken.png"></div>
                        <div class="product-price">price: 110 LE</div>
                        <div class="product-price">Qty: </div>
                             <div>
                            <input type="hidden" name="product_id" value="id"/>
                            <input type="hidden" name="ProductsQty"
                                   value='quantity'/>
                            <input type="number" name="quantity" value="1" size="2"/>
                            <input type="submit" value="Add to cart" class="btnAddAction"/>
</div>
                        </div>
                    </form>
                </div>
