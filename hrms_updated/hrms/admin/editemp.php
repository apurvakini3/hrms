<?php
session_start();
if ($_SESSION["role"]=='admin')  
{ 
?> 
<!DOCTYPE html>
<html>
<head>
	<title>Edit Employee Info</title>
	<?php include "headerFiles.php"; ?>
</head>
<body>
	<div class="container-fluid" style="padding-left: 0px;">
		<div class="rows">
			<?php include "navpillsadmin.php"; ?>
			<div class="col-sm-9">
				<div class="row">
					<div class="col-md-12">
					<?php
					$url= $_SERVER['REQUEST_URI'];	
					$eid=$_GET['eid'];

					echo $eid;
				if(isset($eid)) {
					echo "hii";
				$parts = parse_url($url);
				parse_str($parts['query'], $query);
					}
					else{
						echo "string";
					}
	include "config.php"; 
	if ($eid)
	{
		$sql = "SELECT ename, qualification, designation,institute,experience,email,pwd,address,deptid FROM empinfo where id='".$query['eid']."'";
		$emp_info = $conn->query($sql);
	}

	else
	{
		$sql="SELECT * from empinfo";
		$emp_info=$conn->query($sql);
	}

	if ($emp_info->num_rows > 0) {
			if ($eid) {
					echo"<form class='form-group' action='updateemp.php?eid=".$query["eid"]."' method='post'><h2 style='text-align: center; margin-top:80px;'>Edit Employee</h2>";
						}	
			else
			{
				echo"<form class='form-group' action='insertemp.php' method='post'><h2 style='text-align: center; margin-top:80px;'>Insert Employee</h2>";
			}
	
	$row1 = $emp_info->fetch_assoc();
    echo"<label>Employee Name:</label>";
	echo"<input type='text' name='ename'  class='form-control' placeholder='Employee Name' id='ename'";

	if ($eid)
		{
		 echo"value='".$row1['ename']."'>";
		}

		else
		{
			echo "value=''>";
		}
		echo"<label> Qualification:</label>
			<input type='text' name='Qualification' placeholder='B.E./B.Tech/M.E./MCA/M.Tech.etc.' class='form-control' id='qual'";
			if ($eid)
			{
		 echo"value='".$row1['qualification']."'>";
		}

		else
		{
			echo "value=''>";
		}

				echo"<label>Designation:</label>
				<input type='text' name='Designation' placeholder='Intern/Trainee/Developer/Markting Head/Content Writer etc.' class='form-control' id='des'"; 
				if ($eid)
			{
		 echo"value='".$row1['designation']."'>";
		}

		else
		{
			echo "value=''>";
		}
	echo"<label>Institute:</label>
		<input type='text' name='Institute' placeholder='Institute Name' class='form-control' id='inst'";

if ($eid){
		 echo"value='".$row1['institute']."'>";
		}

		else
		{
			echo "value=''>";
		}


	echo"<label>Experience:</label>
		<input type='number' name='Experience' class='form-control' placeholder='Eperience in years' id='exp'";

if ($eid)
			{
		 echo"value='".$row1['experience']."'>";
		}

		else
		{
			echo "value=''>";
		}
echo"<label>Email: </label>
	<input type='email' name='email' class='form-control' id='email' placeholder='Email Address'";
if ($eid)
			{
		 echo"value='".$row1['email']."'>";
		}

		else
		{
			echo "value=''>";
		}						

echo"<label>Password: </label>
	<input type='Password' name='pwd' class='form-control' id='pwd' placeholder='Must be of more than 6 characters' ";

if ($eid){
		 echo"value='".$row1['pwd']."'>";
		}

		else
		{
			echo "value=''>";
		}

echo"<label for='comment'>Address:</label>
  	<textarea class='form-control' rows='5'  id='add' name='add' ";
if ($eid){
		 echo"placeholder='".$row1['address']."'>";
		}

		else
		{
			echo "placeholder='Complete Address'>";
		}
		echo"</textarea>
		<label for='s1'>Department</label>";
      			if($eid)
      			{
      				echo"<select class='form-control' id='dept' name='dept' >"; 


				$sql = "SELECT id,deptname FROM dept
						";
				$result = $conn->query($sql);
				
				if ($result->num_rows > 0) {
    			
    			while($row = $result->fetch_assoc()) {
    				if ($row['id']) {
    					echo "<option value='". $row["deptid"]. "' selected>".$row["deptname"]."</option>";
    				}
    				else{
    					echo "<option value='". $row["deptid"]. "' >".$row["deptname"]."</option>";
    				}
  				
    			}
    		}
  else {
    echo "0 results";
		}
	}


	else
	{


echo "<select class='form-control' id='dept' name='dept' required>";
  		
			 	include "config.php";
				$sql = "SELECT id,deptname FROM dept";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
    				while($row = $result->fetch_assoc()) {
						echo "<option value='". $row["id"]. "'>".$row["deptname"]."</option>";
					}
				} 			
				else {
    				echo "0 results";
					  }
}
}
$conn->close();
?> 

</select>
</div>
	<div class="col-md-12">  
		<input type="submit" class="btn btn-info" style="margin-left: 45%" name="submit" value="Submit">
		


	</div>



</form>
</div>		
</div>



</body>


</html>

<?php
}
 else {
header('location: http://localhost/hrms/index.php'); }

?>