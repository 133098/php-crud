<?php
require "connect.php";
?>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>
	<div class="container"><br>
		<a href="user_post.php">Add User</a>
		<h1>User List</h1>

		<?php
		 $sql = "SELECT * from customer_info";
		 $result = $conn->query($sql);
          
		 
		echo "<table border='1' width='100%' style='border-collapse:collapse'>";
		echo "<tr><th>ID</th><th>Name</th><th>Password</th><th>Email</th><th></th><th></th>";

		if($result){
		 while($rows = $result->fetch_assoc()){
		 	 echo "<tr>
		 	 <td>".$rows["Id"]."</td>
		 	 <td>".$rows["name"]."</td>
		 	 <td>".$rows["password"]."</td>
		 	 <td>".$rows["email"]."</td>

			 <td>
			    <a href='update.php?id=".$rows["Id"]." & Name=".$rows["name"]." & Email=".$rows["email"]."  & Password=".$rows["password"]."'    >Update</a>
		 	 	
		 	</td>
		 	<td> 	
		 	    <a href='delete.php?id=".$rows["Id"]."'>Delete</a>
		 	</td>
		 	 </tr>";

		 
		}
		   echo "</tr></table>";
 }else{
     echo "No Data";
 }
		
?>

	</div>
</body>

</html>