<?php
require_once("function.php");


//$fr_query = "SELECT * FROM producttab";

 $m= new user();

$dis = array(); 
$dis = $m->fetchdatapi($fr_query);
$cnt=1;
  while($row=mysqli_fetch_array($dis))
  {
  ?>
  <tr>
      <td height="25"><?php echo $cnt;?></td>
    <td><?php echo $row['pname'];?></td>
    <td><?php echo $row['pdescription'];?></td>
    <td><?php echo $row['gender'];?></td>
    <td><?php echo $row['pstatus'];?></td>
    <a class="update" href="update.php"><button>Update</button></a>
    
  </tr>
  <?php $cnt=$cnt+1;} ?>



<!DOCTYPE html>
<html>
<head>
	<title>product</title>
</head>
<body>
	<div>
	<a class="add_but" href="addproduct.php"><button>Add More Product</button></a></div>

</body>
</html>