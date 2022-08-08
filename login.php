
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webproject";


	
	

if(isset($_POST['Submit'])){
	$UserName = $_POST['UserName'];
	$Password = $_POST['Password'];

	$conn = new mysqli($servername, $username, $password, $dbname);
	 
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

$sql = "SELECT * from Users where UserName ='$UserName' and Password='$Password'";
$result = mysqli_query($conn, $sql);
	if ($row = mysqli_fetch_array($result)) {
	  $_SESSION['ID'] = $row[6];
      $_SESSION["UserName"] = $row[0];
      $_SESSION["Password"] = $row[1];
      ?>
      <div class= "success">
     Successfully!
     <?php
	 header("Location:../summerweb/restaurants.php");
  }
  else {
  	?>

  	<div class= "success">
  	Wrong username or password!
</div>

<?php
 }
}
 ?>
<style>
*{
	padding: 0;
	margin: 0;
}
body{
  background: url(http://wrbbradio.org/wp-content/uploads/2016/10/grey-background-07.jpg) no-repeat center fixed;
  background-size: cover;
}

.container{
	background: #2d3e3f;
	width: 350px;
	height: 400px;
	padding-bottom: 20px;
	position: absolute;
	top:50%;
	left: 50%;
	transform: translate(-50%, -50%);
	margin: auto;
  padding: 70px 50px 20px 50px;
}


.fl{
	float: left;
  width: 110px;
  line-height: 35px;
}

.fontLabel{
  color: white;
}

.fr{
	float: right;
}

.clr{
	clear: both;
}

.box{
	width: 360px;
	height: 35px;
	margin-top: 10px;
	font-family: verdana;
	font-size: 12px;
}

.textBox{
	height: 35px;
	width: 190px;
	border: none;
  padding-left: 20px;
}

.new{
  float: left;
}

.iconBox{
	height: 35px;
	width: 40px;
	line-height: 38px;
	text-align: center;
  background: #ff6600;
}

.radio{
	color: white;
	background: #2d3e3f;
	line-height: 38px;
}

.terms{
	line-height: 35px;
	text-align: center;
	background: #2d3e3f;
	color: white;
}

.submit{
	float: right;
	border: none;
	color: white;
	width: 110px;
	height: 35px;
	background: #ff6600;
	text-transform: uppercase;
  cursor: pointer;
}
.success{
	text-align: center;
	margin-top: 40px;
	font-weight: bold;
	font-size: 20px;
}
h1{
	color: white;
	margin-top: 70px;
	
}

::-webkit-input-placeholder { /* Chrome/Opera/Safari */

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


 <html>


<head>
    <meta charset="utf-8">
    <title>Form</title>
    <link href="css/style.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>



	<body>
     <div class="topnav">
 <a href="http://localhost/summerweb/home.php">Home</a>
  <a href="http://localhost/summerweb/contactUs.php">Contact Us</a>
   <a href="http://localhost/summerweb/aboutUs.php">About Us</a>
   <a href="http://localhost/summerweb/signup.php">Sign Up</a>
   <a href="http://localhost/summerweb/login.php">Login</a>
    <a href="http://localhost/summerweb/restaurants.php">Shops</a>
</div>

 
    <!-- Body of Form starts -->
  	<div class="container">

	<h1>Login:</h1>



	<form action="" method="POST" name = "myForm">


<!--username-->
    		<div class="box">
          <label for="UserName" class="fl fontLabel"> User Name: </label>
    			<div class="fl iconBox"><i class="fa fa-user" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="text" required name="UserName"
              placeholder="User Name" class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!--user name-->

	<!---Password------>
    		<div class="box">
          <label for="Password" class="fl fontLabel"> Password </label>
    			<div class="fl iconBox"><i class="fa fa-key" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="Password" required name="Password" placeholder="Password" class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
    		
    		<!---Submit Button------>
    		<div class="box" style="background: #2d3e3f">
    				<input type="Submit" name="Submit" class="submit" value="SUBMIT">
    		</div>
    		<!---Submit Button----->
      </form>
  </div>
  <!--Body of Form ends--->
  </body>
</html>