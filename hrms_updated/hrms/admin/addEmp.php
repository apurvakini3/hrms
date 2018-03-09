<?php

if (!isset($_SESSION)) {
session_start();
}

if ($_SESSION["role"]=='admin')  { 
?> 
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<?php include "headerFiles.php"; ?>
</head>
<body>
	<div class="container-fluid" style="padding-left: 0px;">
		<div class="rows">
			<?php include "navpillsadmin.php"; ?>

			<div class="col-sm-9">
				
				<?php	
				if(isset($_SESSION['editempflag']) && $_SESSION['editempflag']==1)
				{
					echo "<h2 class='text-center'>Edit Employee</h2>";
				echo"<div class='emp_form_div center-block'>";
				echo "<form class='form-group center-block' action='updateemp.php?eid=".$_SESSION["editempid"]."' method='post'>
					";

				}

				else
				{		echo "<h2 style='text-align: center;'>Add New Employee</h2>";
						echo"<div class='emp_form_div center-block'>";
						echo "<form class='form-group center-block' action='insertemp.php' method='post'>
					";

				}



				if(isset($_SESSION['editempflag']) && $_SESSION['editempflag']==1)
				{
					include "config.php";

				$sql = "SELECT ename, qualification, designation,institute,experience,email,pwd,address,deptid FROM empinfo where id='".$_SESSION['editempid']."'";
		$emp_info = $conn->query($sql);
		$row = $emp_info->fetch_assoc();	
				}


				echo "<label>Employee Name:</label>
					<input type='text' name='ename' placeholder='Employee Name' class='form-control' id='ename'";

					if(isset($_SESSION['editempflag']) && $_SESSION['editempflag']==1)
				{


					echo"value='".$row['ename']."' required>";
				}
				else
				{
					echo "value='' required>";
				}

				echo "<label> Qualification:</label>
					<input type='text' name='Qualification' placeholder='B.E./B.Tech/M.E./MCA/M.Tech.etc.' class='form-control' id='qual'";

					if(isset($_SESSION['editempflag']) && $_SESSION['editempflag']==1)
				{


					echo"value='".$row['qualification']."' required>";
				}
				else
				{
					echo "value='' required>";
				} 



					echo "<label>Designation:</label>
					<input type='text' name='Designation' placeholder='Intern/Trainee/Developer/Markting Head/Content Writer etc.' class='form-control' id='des'";

						if(isset($_SESSION['editempflag']) && $_SESSION['editempflag']==1)
				{


					echo"value='".$row['designation']."' required>";
				}
				else
				{
					echo "value='' required>";
				} 

					echo "<label>Institute:</label>
					<input type='text' name='Institute' placeholder='Institute Name' class='form-control' id='inst'";
					if(isset($_SESSION['editempflag']) && $_SESSION['editempflag']==1)
				{


					echo"value='".$row['institute']."' required>";
				}
				else
				{
					echo "value='' required>";
				} 						



					echo "<label>Experience:</label>
					<input type='number' name='Experience' class='form-control' id='inst' placeholder='Eperience in years'";
						if(isset($_SESSION['editempflag']) && $_SESSION['editempflag']==1)
				{


					echo"value='".$row['experience']."' required>";
				}
				else
				{
					echo "value='' required>";
				} 

					echo"<label>Email: </label>
					<input type='email' name='email' class='form-control' id='email' placeholder='Email Address'";

					if(isset($_SESSION['editempflag']) && $_SESSION['editempflag']==1)
				{


					echo"value='".$row['email']."' required>";
				}
				else
				{
					echo "value='' required>";

				// 	$email=$_POST['email'];

				// 	include "config.php";

				// 	$sql="SELECT email from empinfo";
				// 	$result=$conn->query($sql);

				// 	if($result->num_rows>0)
				// 	{
				// 		while($row=$result->fetch_assoc())
				// 		{
				// 			if ($row['email']==$email)
				// 			{
				// 				echo "exists";
				// 			}					}
				
				// }

				} 

					echo "<label>Password </label>
					<input type='Password' name='pwd' class='form-control' id='pwd' placeholder='must be of more than 6 characters'  pattern='{6,}' "; 

						if(isset($_SESSION['editempflag']) && $_SESSION['editempflag']==1)
				{


					echo"value='".$row['pwd']."' required>";
				}
				else
				{
					echo "value='' required>";
				} 


				echo"<label for='comment'>Address:</label>
  					<textarea class='form-control' rows='5' id='comment' name='add' id='add'"; 

  				if(isset($_SESSION['editempflag']) && $_SESSION['editempflag']==1)
				{


					echo"placeholder='".$row['address']."' required>";
				}
				else
				{
					echo "placeholder='' required>";
				} 


  					echo"</textarea>
  					<label for='s1'>Department</label>";


  					if(isset($_SESSION['editempflag']) && $_SESSION['editempflag']==1)


  					{

				echo"<select class='form-control' id='dept' name='dept1' required>"; 	
  							include "config.php";

				$sql = "SELECT id,deptname FROM dept
						";		
				$result = $conn->query($sql);

				$sql1="SELECT deptid from empinfo";
				$result1=$conn->query($sql1);
				$row1=$result1->fetch_assoc();
				
				if ($result->num_rows > 0) {
    			
    			while($row = $result->fetch_assoc()) {
    				if ($row['id']==$row1['deptid']) {
    					echo "<option value='". $row["id"]. "' selected>".$row["deptname"]."</option>";
    				}
    				else{
    					echo "<option  value='". $row["id"]. "' >".$row["deptname"]."</option>";
    				}
  				
    			}
    		}
  else {
    echo "0 results";
		}


		unset($_SESSION['editempflag']);
		unset($_SESSION['editempid']);
	}
  


else{


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



$conn->close();
?> 

</select>
<input type="submit" class="btn btn-info" style="margin-top: 30px; margin-left: 50%;" name="submit" value="Submit">
</form>
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