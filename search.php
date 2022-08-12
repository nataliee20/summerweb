<?php

include_once("db.php");
 
$sql = "Select shop.shopID, shop.Name from shop" ;
// Escape user inputs for security
$term =  $_POST['term'];
  echo"<table border=1 width=100%>
            <tr><th>Name</th><th>";
if(!empty($term)){
    // Attempt select query execution
    $sql = $sql." WHERE Name LIKE '%" . $term . "%' or shopID LIKE '%" . $term . "%' " ;
}
    if($result = mysqli_query($conn, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                echo "<tr><td><a href=".'cat.php?shopID=<?php echo $row["ShopID"];?>'.">". $row['Name'] ."</a></td></tr>";
            }
            
        } else{
            echo "<tr><td colspan=4>No matches found</td></tr>";
        }
    } else{
        echo "<tr><td colspan=4>ERROR: Could not able to execute $sql. " . mysqli_error($conn)."</td></tr>";
    }

 echo"</table>";
// close connection

mysqli_close($conn);
?>