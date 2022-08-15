<?php

$servername="localhost";
$username="root";
$password="";
$dbname="webproject";
$input=$_POST['input'];
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
     die("Connection failed:".$conn->connect_error);
}
// This sql inserts the messages into the database,it adds to messages,all are saved can be displayed
//$sql="INSERT INTO Chat1 (Message) VALUES('$input')";


// This updatesasingle line of the database only one message will be saved and overwritten
$sql="UPDATE `Chat1` SET `Message`='$input' WHERE ID ='1'";


// This bit of code shows that if the connection is successful,the user is shown the message-if not,an error is shown
if($conn->query($sql) === TRUE){
     header("location:Chat.php");
}else{
   echo"Error:".$sql."<br>".$conn->error;
}
     
$conn->close();