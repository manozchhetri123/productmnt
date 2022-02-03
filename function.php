<?php 

require_once("dbconfig.php");
class user extends dbconfig{
	
	function __construct() {
     parent::__construct();
   }


public function emailavail($email) {
$result = mysqli_query($this->dbh,"SELECT email FROM usertab WHERE email='$email'");
	return $result;
}

public function registration($uname,$email,$password)
{
$result= mysqli_query($this->dbh," INSERT Into usertab (uname,email,password) values('$uname','$email','$password')");
return $result;
}

public function signin($email,$password)
	{
	$result= mysqli_query($this->dbh,"SELECT email from usertab where email='$email' and password='$password'");
	return $result;
	}

public function run($sql) {
        $result = mysqli_query($this->dbh, $sql);
        while($row=mysqli_fetch_assoc($result)) {
        $resultset[] = $row;
        }
        if(!empty($resultset)){
        return $resultset;
        }
    }

     function numRows($sql) {
        $result  = mysqli_query($this->dbh, $sql);
        $rowcount = mysqli_num_rows($result);
        return $rowcount;
    }

    function execute($sql) {
        $result  = mysqli_query($this->dbh, $sql);
        return $result;
    }

    public function fetchdatapi()
 	{
 	$result= mysqli_query($this->dbh,"SELECT * from producttab");
 	return $result;
 	}

 	 public function fetchdatapc()
 	{
 	$result= mysqli_query($this->dbh,"SELECT * from categorytab");
 	return $result;
 	}

 	 public function fetchdatapm()
 	{
 	$result= mysqli_query($this->dbh,"SELECT * from imagetab");
 	return $result;
 	}

 	 public function fetchdataps()
 	{
 	$result= mysqli_query($this->dbh,"SELECT * from sizetab");
 	return $result;
 	}

}


?>

