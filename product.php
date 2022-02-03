<?php
include_once ("dbconfig.php");

class product extends dbconfig{
	function __construct() {
     parent::__construct();
   }

	public function addproduct(){
		$sql = "INSERT INTO producttab (pname, pdescription, gender, pstatus)
		VALUES ('pname', 'pdescription', 'gender','pstatus')"; 
		
		if ($con->query($sql) === TRUE) {
 		 echo "New record created successfully";
		} else {
		  echo "Error: " . $sql . "<br>" . $con->error;
		}

		$con->close();
	}

	public function addsize(){
		$sql = "INSERT INTO sizetab (sname, price, pid)
		VALUES ('sname', 'price', 'pid')";
		
		if ($con->query($sql) === TRUE) {
 		 echo "New record created successfully";
		} else {
		  echo "Error: " . $sql . "<br>" . $con->error;
		}

		$con->close();
	}

	public function addcategory(){
		$sql = "INSERT INTO cateorytab (cname, pid)
		VALUES ('cname', 'pid')";
		
		if ($con->query($sql) === TRUE) {
 		 echo "New record created successfully";
		} else {
		  echo "Error: " . $sql . "<br>" . $con->error;
		}

		$con->close();
	}

	public function addimage(){
		$sql = "INSERT INTO imagetab (iname, pid)
		VALUES ('iname', 'pid')";
		
		if ($con->query($sql) === TRUE) {
 		 echo "New record created successfully";
		} else {
		  echo "Error: " . $sql . "<br>" . $con->error;
		}

		$con->close();
	}

	public function getproductbyid(){
		$sql = "SELECT * FROM producttab Where pid ='pid'";
		
		if ($con->query($sql) === TRUE) {
 		 echo "Getting Result...";
		} else {
		  echo "Error: " . $sql . "<br>" . $con->error;
		}

		$con->close();

	}

	public function updateproduct(){
		$sql = "UPDATE producttab set pname='" . $_POST['pname'] . "',pdescription='" . $_POST['pdescription'] . "',gender='" . $_POST['gender'] . "'pstatus='" . $_POST['pstatus'] . "'";

		if ($con->query($sql) === TRUE) {
		  echo "Record updated successfully";
		} else {
		  echo "Error updating record: " . $con->error;
		}

		$con->close();
		}

	public function deleteproduct(){
		$sql = "DELETE FROM producttab WHERE productid='productid'";

		if ($con->query($sql) === TRUE) {
 		 echo "Deleting...";
		} else {
		  echo "Error: " . $sql . "<br>" . $con->error;
		}

		$con->close();
		}
}


?>
