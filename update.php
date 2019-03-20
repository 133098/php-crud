<?php
	require "connect.php";
	$id = $_GET['id'];
	//echo $id = $_GET['id'];
		 
		 $sql = "SELECT * from customer_info WHERE Id= '$id'";
		 $result = mysqli_query($conn, $sql);

		 if($result){
			while($rows = $result->fetch_assoc()){
				
				 $id = $rows["Id"];
				 $name = $rows["name"];
				 $password = $rows["password"];
				 $email  = $rows["email"];
   
		   }
		 }   

?>
<form action = "update_data.php" method = "POST">
<h2>Fill the Form</h2>
<p><span class="error">* required field</span></p>
	<?php 
	
	echo "ID : <input type = 'text' name='Id' value = '$id' /><br><br>";
	echo "Name : <input type = 'text' name='username' value = '$name' /><br><br>";
	echo "Password : <input type = 'text' name='password' value = '$password' /><br><br>";
	echo "Email : <input type = 'text' name='mail' value = '$email' /><br><br>";
	echo "<input type = 'submit' value = 'update'>";
	?>

 

</form>
