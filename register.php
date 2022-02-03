<?php
session_start();
require_once("function.php");
$db = new user();

if(isset($_POST['signin']))
{
$uname= $_POST['uname'];
$email= $_POST['email'];
$password= ($_POST['password']);

$result= $db->registration($uname,$email,$password);

header("Location:login.php");
}
else
{
header("Location:register.php");
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Register Here</title>
</head>
<body>
	<form action = "" method = "POST">

    <p><h3>REGISTER YOUR DETAILS</h3></p>     
        Username: <input type = "uname" name = "uname" /> <br> 
        Email: <input type = "email" name = "email" /> <br>    
        Password: <input type = "password" name = "password" /> <br>  
         <input type = "submit" value="Register" name="signin" />  
      </form> 

      <a href="login.php" class="btn btn-primary btn-lg">
         <span class="glyphicon glyphicon-user" ></span> Login Here
      </a>

</body>
</html>