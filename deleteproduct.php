<?php
session_start();
// include "menu.php";
// include "ErrorHandling.php";


?>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webproject";

$conn = new mysqli($servername, $username, $password, $dbname);
$id=$_GET['X'];
$sql="DELETE FROM products where ProductID =$id";
$result = mysqli_query($conn,$sql);
if($result)
       {
           header("Location:manageproducts.php");
       }
       else
       {
           echo $sql;
       }
?>
