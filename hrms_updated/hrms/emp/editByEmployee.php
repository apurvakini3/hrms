<?php
session_start();
if(isset($_SESSION['role']))
{
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Employee Info</title>
	<?php include "headerFiles.php"; ?>
</head>
<body>
<div class="rows ">
  	<?php include "navpillsemp.php"; ?>
  		
		<div class="col-sm-9">
			<h1 class="text-center">Edit Information</h1>
			<?php
				include "config.php";
				$sql = "SELECT ename,qualification,designation,institute,experience,email,pwd,address,deptid FROM empinfo where id='".$_SESSION['id']."'";
				$emp_info = $conn->query($sql);

				if ($emp_info->num_rows > 0) 
				{
					$row1 = $emp_info->fetch_assoc();
					
							echo"<div class='emp_form_div center-block'>";
    							echo"<form class='form-group center-block' action='updatebyemp.php' method='post'>";
        					echo"<label>Employee Name:</label>";

							echo"<input type='text' name='ename'  class='form-control' value='".$row1['ename']."' required>";
							echo"<label> Qualification:</label>
								<input type='text' name='Qualification' placeholder='B.E./B.Tech/M.E./MCA/M.Tech.etc.' value='".$row1['qualification']."' class='form-control' required>
								<label>Designation:</label>
								<input type='text' name='Designation' placeholder='Intern/Trainee/Developer/Markting Head/Content Writer etc.' class='form-control' value='".$row1['designation']."' required>
								<label>Institute:</label>
								<input type='text' name='Institute' placeholder='Institute Name' class='form-control' value='".$row1['institute']."' required>
								<label>Experience:</label>
								<input type='number' name='Experience' class='form-control' placeholder='Eperience in years' value='".$row1['experience']."' required>
								<label>Email: </label>
								<input type='email' name='email' class='form-control' placeholder='Email Address' value='".$row1['email']."' required>
								
								<label for='comment'>Address:</label>
  								<textarea class='form-control' rows='5' id='comment' name='add' placeholder='".$row1['address']."' required></textarea>
								<label for='s1'>Department</label>
      							<select class='form-control' id='dept' name='dept'>"; 

						$sql = "SELECT id,deptname FROM dept";
						$result = $conn->query($sql);
				
				  if ($result->num_rows > 0)
					{
    					while($row = $result->fetch_assoc()) 
    					{
    							if ($row['id']==$row1['deptid']) 
    							{
    								echo "<option value='". $row["deptid"]. "' selected>".$row["deptname"]."</option>";
    							}
    							else
    							{
    								echo "<option value='". $row["deptid"]. "' >".$row["deptname"]."</option>";
  								}
  				
    					}
    				}

  	else {
    	echo "0 results";
		}
}
					$conn->close();
					?> 

</select>

	
	
	<div class="form-btn">
		<input type="submit" class="btn btn-info "  name="submit" value="Submit">
	</div>

			<?php		
					if(isset($_SESSION["message1"]))
			   		 {
			       		echo"<div class='alert alert-success alert-dismissable' 
			       				style='text-align:center; margin-top:10px;'>
			         			<a href='#' class='close' data-dismiss='alert' aria-label='close'>×</a>
			 					 <strong>Successfully Updated Data!</strong>
							</div>";

			        unset($_SESSION["message1"]);
			   		 }

			?>


				</form>
			</div>
		</div>

			</div>		
		</div>
	</body>
</html>
<?php
}
else
{
header('location: http://localhost/hrms/emp/index.php'); 
}
?>