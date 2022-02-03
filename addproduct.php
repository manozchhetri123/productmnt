<!DOCTYPE html>
<html>
<head>
	<title>ADD PRODUCT</title>
</head>
<body>
	<form action = "" method = "POST">

    <p><h3>ADD MORE PRODUCT</h3></p>  
         <div> Product Name: <input type = "text" name = "pname" /></div> <br>  
         <div> Description: <br><textarea for="pdescription" type="text" name="pdescription"> </textarea> </div><br> 
         <div> Gender: <input type = "text" name = "gender" /> <br>
         	<input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label><br>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label>
          </div><br>
        <div> Status:  <br>
        <input type="radio" id="active" name="sts" value="active">
            <label for="active">Active</label><br>
            <input type="radio" id="inactive" name="sts" value="inactive">
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
         <input type = "submit" value="Add" name="add" />  
      </form> 

</body>
</html>