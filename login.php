<?php
session_start();
require_once("function.php");
$db = new user();

if(isset($_POST['login']))
{

$email= $_POST['email'];
$password=($_POST['password']);

$result= $db->signin($email,$password);
$num= mysqli_fetch_array($result);
if($num>0)
{
  $_SESSION['userid']= $num['id'];
  $_SESSION['email']= $email;

header("Location:displayproduct.php");
}
else
{
header("Location:login.php");
}
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>login</title>
</head>
<body>

    <form action = "" method = "POST">

    <p><h3>LOGIN FORM</h3></p>  
         Username: <input type = "email" name = "email" required="" /> <br>  
         Password: <input type = "password" name = "password" required="" /> <br>  
         <input type = "submit" name="login" />  
      </form> 

      <a href="register.php" class="btn btn-primary btn-lg">
         <span class="glyphicon glyphicon-user" ></span> Register Now
      </a>

</body>
</html>
