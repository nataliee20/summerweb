<!doctype html>
<html>
<meta http-equiv="refresh"content="10">
<head>
<meta charset="UTF-8">
<title>Send Message</title>
</head>
<style>
 input[type=textarea] {
    
    background-color: white;
    border:1px solid lightgrey;
    border-radius: 10px;
    color:orange;
    padding:8px 18px;
    text-decoration:none;
    margin:4px 1px;
 }
   input[type=submit]{

    background-color: orange;
    border:none;
    color:white;
    padding:8px 18px;
    text-decoration:none;
    margin:4px 1px;
    cursor:pointer;
    border-radius:10%;
    font-family:helvetica;
    box-shadow:0 8px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    }
    </style>   
<body>
<!-- the following code containsatextarea where users can input messages and once they have clikced the"submit"
button the form is put into action,meaning the code on"addtext.php"will input the messages into the database
and echo them out for both users to see -->
    <form method="post"action="./Page2.php">
  Send user a message: <input type="textarea"name="input"/>
<input type="submit"value="Send"/><br /> <br />
</form>
<!-- the following creates an iframe that holds the information from the Page.php query.You can alter the table
size,style and look.-->
<iframe src="./Page1.php" width="450" height="200" scrolling="yes">
</iframe>
</body>
</html>