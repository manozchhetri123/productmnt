<?php
require_once("function.php");
 $m= new user();
?>

<!DOCTYPE html>
<html>
<head>
	<title>DASHBOARD</title>
</head>
<body>
	<div>
	<a class="add_button" href="addproduct.php"><button>Add More Product</button></a></div>
	<p><h3> List of products </h3></p>
  <table class="table table-striped table-hover">
  <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>                       
                        <th>Description</th>
                        <th>Gender</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody> 
                <?php

              $re = $m->fetchdatapi();
              $cnt=1;

                while($row=mysqli_fetch_array($re))
                {
                ?>   
                 <tr>
      <td height="25"><?php echo $cnt;?></td>
    <td><?php echo $row['pname'];?></td>
    <td><?php echo $row['pdescription'];?></td>
    <td><?php echo $row['gender'];?></td>
    <td><?php echo $row['pstatus'];?></td>
    <td>
    <a href="read.php?viewid=<?php echo htmlentities ($row['pid']);?>" class="view" title="View" >View</a>
  <a href="update.php?editid=<?php echo htmlentities ($row['pid']);?>" class="edit" title="Edit" >Edit</a>
  <a href="delete.php?deleteid=<?php echo htmlentities ($row['pid']);?>" class="delete" title="delete" >Delete</a>
   </td>
 </tr>
 <?php $cnt=$cnt+1;} ?>
    
               
  </tbody>
</table>

</body>
</html>


 
  

 


