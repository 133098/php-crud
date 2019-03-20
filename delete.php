<?php
require 'connect.php';
?>

<?php
    

     if(isset($_GET['id'])){
        $Id = $_GET['id'];
        //echo $Id;
        $sql = "DELETE from customer_info WHERE Id= '$Id'";
        $result = mysqli_query($conn, $sql);
        //if(! $result ) {
           // die('Could not enter data: ' . mysql_error());
        }
       
?>

<?php
 $sql = "SELECT * from customer_info";
 $result = $conn->query($sql);

 
echo "<table border='1' width='100%' style='border-collapse:collapse'>";
echo "<tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Update</th>
        <th>Delete</th>
        </tr>";
if($result){
    while($rows = $result->fetch_assoc()){
        echo "<tr align='center'><td>".$rows["Id"]."</td><td>".$rows["name"]."</td><td>".$rows["password"]."</td><td><a href='update.php'>Update</a></td><td><a href='delete.php'>Delete</a></td></tr>";
    }
    echo "</tr></table>";
}else{
    echo "No Data";
}
 
 ?>
 <?php
 //echo "<br>"
 echo "<br><a href='index.php'>Back</a>"
 ?>


