<?php 

require_once('product.php');
$pobj = new product();
session_start();

$type = $_GET['type'];
 
if(empty($type) || isset($type)) {
 
  echo 'Request type is not set';
 
}  if($type == 'submit') {
 
   $data = user::addProduct($_REQUEST);
   $_SESSION = $data;
   if($data['status'] == 'error') {
     header("location:addproduct.php");
   } else {
     header("location:displayproduct.php");
   }

   $data = user::addSize($_REQUEST);
   $_SESSION = $data;
   if($data['status'] == 'error'){
    
   }
   $data = user::addCategory($_REQUEST);   
   $_SESSION = $data;
   if($data['status'] == 'error'){
    
   } 
   $data = user::addImage($_REQUEST);   
   $_SESSION = $data;
   if($data['status'] == 'error'){
    
   } 
 }

 ?>
 <html> 

<!DOCTYPE html>
<html>
<head>
	<title>ADD PRODUCT</title>
</head>
<body>
  <p class="bg-info" id="msg"><?php echo (isset($_SESSION['msg'])) ? $_SESSION['msg'] : ''; ?></p>
	<form action = "addproduct.php?type=submit" method = "POST">

    <p><h3>ADD MORE PRODUCT</h3></p>  
         <div> Product Name: <input type = "text" name = "pname" value="" required="" /></div> <br>  
         <div> Description: <br><textarea for="pdescription" type="text" value="" name="pdescription" required=""> </textarea> </div><br> 
         <div> Gender: <br>
         	<input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label><br>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label>
          </div><br>
        <div> Status:  <br>
        <input type="radio" id="active" name="pstatus" value="active">
            <label for="active">Active</label><br>
            <input type="radio" id="inactive" name="pstatus" value="inactive">
            <label for="inactive">Inactive</label> 
        </div><br>
         <div action="" method="post" enctype="multipart/form-data">
            Select image to upload:
            <input type="file" name="pimage" id="pimage">
           </div><br>  
         <div> Category:  <br> 
         	 <select name="cname" id="cname">
         	 	<option value="male">Male</option>
         	 	<option value="female">Female</option>
              <option value="small">Small</option>
              <option value="medium">Medium</option>
              <option value="large">Large</option>
              <option value="elarge">Extra Large</option>
            </select>
         </div><br>
         <div> Size:  <br> 
         	 <select name="psize" id="psize">
              <option value="small">Small</option>
              <option value="medium">Medium</option>
              <option value="large">Large</option>
              <option value="elarge">Extra Large</option>
            </select>
         </div><br>
         <input type = "submit" value="add" name="add" /> 
          <a href="displayproduct.php" class="btn btn-primary btn-lg">
         <span class="glyphicon glyphicon-user" ></span> Back
      </a> 

      </form> 

</body>
</html>




<?php

/*if(isset($_POST['add']))

{
$pname= $_POST['pname'];
$pdescription= $_POST['pdescription'];
$gender= ($_POST['gender']);
$pstatus= ($_POST['pstatus']);

$result= $pobj->addProduct($pname,$pdescription,$gender,$pstatus);

if (isset($_POST['add'])) {
  foreach ($pid as $key => $pid) {
    $sname = $_POST['sname'];
  $price = $_POST['price'];
  $pid = $_POST['pid'];
  }
  
}
$result= $pobj->addSize($pname,$pdescription,$gender,$pstatus);
     
header("Location:displayproduct.php");

}*/
?>