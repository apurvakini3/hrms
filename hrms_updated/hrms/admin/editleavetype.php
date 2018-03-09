<?php
session_start();
if ($_SESSION["role"]=='admin')  
{ 
?> 
<!DOCTYPE html>
<html>
<head>
	<title>Edit Leave Type </title>
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
				$parts = parse_url($url);
				parse_str($parts['query'], $query);
				include "config.php";
				$sql = "SELECT leavetype,description FROM leavetype where id='".$query['id']."'";
				$emp_info = $conn->query($sql);
		if ($emp_info->num_rows > 0) {
		echo"<form class='form-group' action='updateleavetype.php?id=".$query["id"]."' method='post'>
				<h2 style='text-align: center;'>Update Leave Type</h2>";
   			$row1 = $emp_info->fetch_assoc();
        	echo"<label>Leave Type:</label>";
			echo"<input type='text' name='leavetype'  class='form-control' value='".$row1['leavetype']."'><br>";
			echo"<label>Description:</label>";
			echo"<input type='text' name='desc'  class='form-control' value='".$row1['description']."'>";
			}
	  else {
    		echo "0 results";
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
header('location: http://localhost/hrms/index.php'); 
}
?>