<?php
require "connect.php";
?>

<?php


//---------------insert----------------------------



//---------------retrieve-------------------------------

// $sql = "SELECT * from customer_info";
// $result = $conn->query($sql);

// if($result){
//     while($rows = $result->fetch_assoc()){
//         echo "Id: ". $rows["id"]. " Name: ". $rows["name"]. " Password: ". $rows["pass"]."<br><br>";
//     } 
// }else{
//     echo "No Data";
// }

//--------------delete----------------------------------

// $sql = "DELETE from customer_info where id=3";
// $result = $conn->query($sql);

// if ($result == TRUE)
// {
//     echo "Delete successfully";
// }else{
//    echo "Not deleted";
// }

//-------------update-------------------------------------

$sql = "UPDATE customer_info set name='doe' where id=4";
$result = $conn->query($sql);

if( $result ==TRUE)
{
    echo "Upated successfully";

}else{
    echo "Not updated";

}
?>


