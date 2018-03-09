<?php
if (!isset($_SESSION)) {
session_start();
}

if ($_SESSION["role"]=='admin')  
{ 

?> 
 <!DOCTYPE html>
<html>
<head>
<title>Leave Type</title>
<?php include "headerFiles.php"; ?>
</head>
<body>
	<div >
		<div class="rows">
			<?php include "navpillsadmin.php"; ?>
			<div class="col-md-9" >

				<?php	
				if(isset($_SESSION['leaveflag']) && $_SESSION['leaveflag']==1)
				{
					echo "<h2 style='text-align: center;'>Edit Leave Type</h2>";
					echo "<div class='emp_form_div center-block'>";	
				
				echo "<form class='form-group center-block' action='updateleavetype.php?id=".$_SESSION["leaveid"]."' method='post'>
					";
				}

				else
				{	
					echo "<h2 style='text-align: center;'>Insert Leave Type</h2>";
					echo"<div class='emp_form_div center-block'>";
					echo "<form class='form-group center-block' action='insertleave.php' method='post'>
					";	
				}


				if(isset($_SESSION['leaveflag']) && $_SESSION['leaveflag']==1)
				{

					include "config.php";
				$sql="SELECT leavetype,description FROM leavetype where id='".$_SESSION['leaveid']."'";

				$emp_info = $conn->query($sql);
				$row = $emp_info->fetch_assoc();


			}

				echo"<input type='text' name='leavetype' class='form-control' placeholder='Enter Leave Type' ";

				if(isset($_SESSION['leaveflag']) && $_SESSION['leaveflag']==1)	
				{
					echo "value='".$row['leavetype']."' required><br><br>";
				}

				else
				{
					echo "value='' required><br><br>";
				}
				echo"<input type='text' name='leavedesc' class='form-control' placeholder='Description'";
					
					if(isset($_SESSION['leaveflag']) && $_SESSION['leaveflag']==1)	
				{
					echo "value='".$row['description']."' required><br><br>";
				}

				else
				{
					echo "value='' required><br><br>";
				}



				unset($_SESSION['leaveflag']);
				unset($_SESSION['leaveid']);
					
?>
					<input type="submit" name="submit" class="btn btn-info" value="submit" onclick="show()">

					<div class='alert alert-success' style="display: none;" id="success"><strong>Successfully</strong> added new department!.
					</div>
				</form>
			</div>
			</div>
			</div>
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