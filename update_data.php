<?php
    require "connect.php";
    $iid=$_POST["Id"];
    $name=$_POST["username"];
    $pass=$_POST["password"];
    $email=$_POST["mail"];

    $sql = "UPDATE customer_info set name='$name',password='$pass',email='$email' 
        where Id='$iid'";
    $result = mysqli_query($conn, $sql);
        
        if(!$result ) {
            die('Could not update data: ' . mysqli_error($conn));
         }else{
         echo "Updated data successfully";
         
        }

?>

<?php
//echo "<br>"
echo "<br><a href='index.php'>Back</a>"
?>
	

