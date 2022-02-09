<?php
include_once ("dbconfig.php");

class product extends dbconfig{
	function __construct() {
     parent::__construct();
   }

	public function addProduct($pname,$pdescription,$gender,$pstatus){
		$query= "INSERT INTO producttab (pname, pdescription, gender, pstatus) VALUES ('$pname', '$pdescription', '$gender','$pstatus')"; 
		$result= mysqli_query($this->dbh,$query); 
		$data = array('status'=>'success', 'msg'=>"Added successfully.", 'result'=>$result);
		return $data;
		}	

	public function addSize($sname,$price,$pid){ 

		$result= mysqli_query($this->dbh,"INSERT INTO sizetab (sname, price,pid) VALUES ('$sname', '$price',(SELECT * FROM producttab WHERE pid=$pid))"); 
		$data = array('status'=>'success', 'msg'=>"Added successfully.", 'result'=>$result);
		return $data; 
		}

	public function addCategory($cname,$pid){
				
		$result= mysqli_query($this->dbh,"INSERT INTO cateorytab (cname, pid) VALUES ('$cname', (SELECT * FROM producttab WHERE pid=$pid))"); 
		$data = array('status'=>'success', 'msg'=>"Added successfully.", 'result'=>$result);
		return $data;
	}

	public function addImage($iname,$pid){
				
		$result= mysqli_query($this->dbh,"INSERT INTO imagetab (iname, pid) VALUES ('$iname', (SELECT * FROM producttab WHERE pid=$pid))"); 
		$data = array('status'=>'success', 'msg'=>"Added successfully.", 'result'=>$result);
		return $data;
	}

	public function getProductById($pid){
				
		$result= mysqli_query($this->dbh,"SELECT * FROM producttab Where pid = $pid");
			return $result;
		}

	public function updateProduct($pname,$pdescription,$gender,$pstatus){

		$result= mysqli_query($this->dbh, "UPDATE producttab SET pname='$pname',pdescription='$pdescription', gender='$gender', pstatus='$pstatus' Where pid='$pid'"); 
			return $result;	
			}	


	public function deleteProduct(){
		$result= mysqli_query($this->dbh, "DELETE FROM producttab Where pid='$pid'");
			return $result;	
		}
	}

?>
