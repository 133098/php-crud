<?php
require "connect.php";
?>

<!DOCTYPE HTML>  
<html>
<head>
    <style>
        .error {color: #FF0000;}
    </style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $passErr = "";
$name = $email = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    if(strlen($_POST["name"]) >=3){
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
            $nameErr = "Only letters and white space allowed"; 
        }else{
            $name = $_POST["name"];
        }    
    }else{
        $nameErr = "Username Must be Three Character";
    }
    
    // check if name only contains letters and whitespace
    
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = $_POST["email"];
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }

  if (empty($_POST["password"])) {
    $passErr = "Password is required";
  } else {
    $password = $_POST["password"];
    if(strlen($password)>=6 and (!$nameErr and !$emailErr))
    {
        $encrypt_pass = md5($password);
        $sql = "INSERT into customer_info(name,password, email) VALUES('$name','$encrypt_pass','$email')";
        $result = $conn->query($sql);
        if ($result) {
            echo "New record inserted successfully";
        }else{
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

    }else{
        $passErr = "Password Must be 6 Character";
    }

  }

}

?>

<h2>Fill the Form</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>

  Password: <input type="password" name="password">
  <span class="error">* <?php echo $passErr;?></span>
  <br><br>

  <input type="submit" name="submit" value="Submit">  
</form>

</body>
</html>