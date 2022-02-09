<?php

require_once("dbconfig.php");
$con = mysqli_connect(host,username,password,database);
$m= new dbconfig();
?>

<!DOCTYPE html>
<html>
<head>
  <title>read</title>
</head>
<body>
  <?php

$vid=$_GET['viewid'];
$ret= mysqli_query($con,"SELECT * FROM producttab Where pid = '$vid'");

$cnt=1;
while ($row= mysqli_fetch_array($ret)) {
 
?>
 <tr>
    <th>Product Name</th>
    <td><?php  echo $row['pname'];?></td>
    <th>Description</th>
    <td><?php  echo $row['pdescription'];?></td>
  
  
    <th>Gender</th>
    <td><?php  echo $row['gender'];?></td>
    <th>status</th>
    <td><?php  echo $row['pstatus'];?></td>
  </tr>
  
<?php 
$cnt=$cnt+1;
}?>
                 
</tbody>
</table>

</body>
</html>
<tbody>
