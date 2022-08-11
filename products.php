
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
        <!-- <h2 style="text-align:center; font-weight: bold;">Main Course</h2> -->
        <div id="product-grid" style="display: flex;flex-wrap: wrap;justify-content: center;">

        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "webproject";
            
            
            // Create connection
            $conn = mysqli_connect($servername,$username,$password,$dbname);



            $shopID = $_GET['shopId'];
            $catID = $_GET['catId'];
            $sql="SELECT * FROM `products` WHERE shopID = ". $shopID ." AND catID = ". $catID ." ;";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result))
            {
        ?>
            <div style=" float:right; margin:10px">
                <div class="product-item cards" width="200px">
                    <form method="post" action="Products">
                        <div class="mt-2 f-16"><strong><?php echo $row['Name']; ?></strong></div>
                        <div class="product-image">
                            <img src="http://localhost/summerweb/images/<?php echo $row['Image']; ?>">
                        </div>
                        <div class="product-description"> <?php echo $row['Description']; ?></div>
                        <div class="product-price">price: <?php echo $row['Price']; ?> LE</div>
                        <div class="product-price">Qty: </div>
                        <div>
                            <input type="hidden" name="product_id" value="<?php echo $row['productID']; ?>"/>
                            <input type="hidden" name="ProductsQty" value='quantity'/>

                            <input type="hidden" name="hidden_name" value="<?php echo $row["productID"]; ?>" />
						    <input type="hidden" name="hidden_price" value="<?php echo $row["Price"]; ?>" />

                            <input type="number" name="quantity" value="1" size="2"/>
                            <input type="submit" name= "add_to_cart" value="Add to cart" class="btnAddAction"/>
                        </div>
                    </form>
                </div>
            </div>
        <?php } ?>
