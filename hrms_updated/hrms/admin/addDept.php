<?php

if (!isset($_SESSION)) {
session_start();
}

//echo $_SESSION['editflag'];

if ($_SESSION["role"]=='admin')  
{ 

?> 
 <!DOCTYPE html>
<html>
<head>
<title>Login</title>
<?php include "headerFiles.php"; ?>
</head>
<body>
	<div class="rows">
	<?php include "navpillsadmin.php"; ?>
		<div class="col-md-9">

			<?php	
			if(isset($_SESSION['editflag']) && $_SESSION['editflag']==1)
				{
				echo "<div class='emp_form_div center-block'>";	
					echo"<form class='form-group center-block' action='updatedept.php?id=".$_SESSION["editid"]."' method='post'>
					";
				}
				else
				{	echo "<h2 style='text-align: center;'> Add New Department</h2>";
					echo"<div class='emp_form_div center-block'>";
					echo"<form class='form-group center-block' action='insertdept.php' method='post'>
					";	
				}
				if(isset($_SESSION['editflag']) && $_SESSION['editflag']==1)
				{
					include "config.php";
					$sql="SELECT deptname FROM dept where id='".$_SESSION['editid']."'";
					$emp_info = $conn->query($sql);
					$row = $emp_info->fetch_assoc();
				}
				echo "<label>Enter Department Name:</label>
						<input type='text' name='deptname' class='form-control' placeholder='Department Name' style='border-top: hidden;border-left: hidden;border-right: hidden;box-shadow: none;'";

						if(isset($_SESSION['editflag']) && $_SESSION['editflag']==1)
						{
							echo "value='".$row['deptname']."' required>";
						}
						else
						{
							echo "value='' required>";
						}
						unset($_SESSION['editflag']);
						unset($_SESSION['editid']);
						
					?>

				<div class="form-btn center-block">
					<input type="submit" name="submit" class="btn btn-info" value="submit" onclick="show()">
				</div>

					<div class='alert alert-success' style="display: none;" id="success"><strong>Successfully</strong> added new department!.
					</div>
				</form>
			</div>
			</div>
			
		</div>
	</body>
</html>
<?php
}
 else {
header('location: http://localhost/hrms'); 
}
?>