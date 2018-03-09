<!DOCTYPE html>
<html>
<head>
	<title>Required Fields</title>
	<?php include "headerFiles.php"; ?>
<body>

	<?php
	$errename=$errq=$errd=$errinst=$errexp=$erremail=$errpwd=$erradd=$errdept="";
	$ename=$qualification=$designation=$institute=$experience=$email=$pwd=$add=$dept="";

	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		if(empty($_POST["ename"]))
		{
			$errename="name is required!<br>";
		}

		else
		{
			$ename=test_input($_POST["ename"]);

			if(!preg_match("/^[a-zA-Z]*$/", $ename))
			{
				$errename="Only Letters and whitespaces are allowed!<br>";
			}
		}

		if(empty($_POST["Qualification"]))
		{
			$errq="Qualification is required!<br>";
		}

		else
		{
			$qualification=test_input($_POST["Qualification"]);

		}

		if(empty($_POST["Designation"]))
		{
			$errd="Designation is required!<br>";
		}
		else
		{
			$designation=test_input($_POST["Designation"]);
		}

		if(empty($_POST["Institute"]))
		{
			$errinst="Institute is required!<br>";
		}
		else
		{
			$Institute=test_input($_POST["Institute"]);
		}
		if(empty($_POST["Experience"]))
		{
			$errexp="Experience is required!<br>";
		}
		else
		{
			$experiece=test_input($_POST["Experience"]);
		}

		if (empty($_POST["email"])) {
   			 $erremail = "Email is required<br>";
  		} 
  		else {
    		$email = test_input($_POST["email"]);
    			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
     			 $erremail = "Invalid email format<br>"; 
   				 }
 		}

 		if(empty($_POST["pwd"]))
		{
			$errepwd="Password is required!<br>";
		}

		else
		{
			$pwd=test_input($_POST["pwd"]);

			if(!preg_match("/[a-zA-Z][0-9]{6,}/", $pwd))
			{
				$errpwd="password length must be more than 6 characters!<br>";
			}
		}

		if(empty($_POST["add"]))
		{
			$erradd="Address is required!<br>";
		}
		else
		{
			$add=test_input($_POST["add"]);
		}

		if(empty($_POST["dept"]))
		{
			$errdept="Department is required!<br>";
		}
		else
		{
			$dept=test_input($_POST["dept"]);
		}

	}



function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>


<div class="container-fluid" style="padding-left: 0px;">
		<div class="rows">
			<div class="col-md-3">
				<ul class="nav nav-pills nav-stacked">
					<li class="active"><a href="employee.php">Home</a></li>
					<li class="dropdown">
						<a  class="dropdown-toggle" data-toggle="dropdown" href="#">Departments<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="adddept.php" id="adddept">Add Department</a></li>
							<li><a href=# id="editdept">Edit Departments</a></li>
						</ul>
					</li>

					<li class="dropdown">
						<a  class="dropdown-toggle" data-toggle="dropdown" href="#">Employee<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="addemp.php" id="addemp">Add Employee</a></li>
							<li><a href="editemp.php" id="editemp">Edit Employee Info.</a></li>
						</ul>
					</li>
					<li><a href="tableemp.php">View Employees</a></li>
				</ul>
			</div>
			
		</div>

		<div class="col-sm-9">

			<form class="form-group" action="insertemp.php" method="post">
				<h2 style="text-align: center;">Add New Employee</h2>
				
						<label>Employee Name:</label>
						<input type="text" name="ename" placeholder="Employee Name" class="form-control" value="<?php echo $ename;?>" required>
						<span class="error">* <?php echo $errename;?></span>

						<label> Qualification:</label>
						<input type="text" name="Qualification" placeholder="B.E./B.Tech/M.E./MCA/M.Tech.etc." class="form-control" value="<?php echo $qualification;?>">
						<span class="error">* <?php echo $errq;?></span>

						<label>Designation:</label>
						<input type="text" name="Designation" placeholder="Intern/Trainee/Developer/Markting Head/Content Writer etc." class="form-control" value="<?php echo $designation;?>">
						<span class="error">* <?php echo $errd;?></span>


						<label>Institute:</label>
						<input type="text" name="Institute" placeholder="Institute Name" class="form-control" value="<?php echo $institute;?>">
						<span class="error">* <?php echo $errinst;?></span>


					
						<label>Experience:</label>
						<input type="number" name="Experience" class="form-control" placeholder="Eperience in years" value="<?php echo $experiece;?>">

						<span class="error">* <?php echo $errexp;?></span>

						<label>Email: </label>
						<input type="email" name="email" class="form-control" placeholder="Email Address" value="<?php echo $email;?>">
						<span class="error">* <?php echo $erremail;?></span>

						<label>Password </label>
						<input type="Password" name="pwd" class="form-control" placeholder="must be of more than 6 characters" value="<?php echo $pwd;?>">

						<span class="error">* <?php echo $errpwd;?></span>


						<label for="comment">Address:</label>
  <textarea class="form-control" rows="5" id="comment" name="add">
  	<?php echo $ename;?>
  </textarea>
  <span class="error">* <?php echo $erradd;?></span>

		<label for='s1'>Department</label>
      	<select class='form-control' id='dept' name='dept'>
  		
      	<?php


      		$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "hrms";


			$conn = new mysqli($servername, $username, $password, $dbname);

			if ($conn->connect_error) {
    			die("Connection failed: " . $conn->connect_error);
					} 

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

$conn->close();
?> 
<span class="error">* <?php echo $errdept;?></span>
</select>

        
		<input type="submit" class="btn btn-info" style="margin-top: 30px; margin-left: 50%;" name="submit" value="Submit">

      
				
			</form>

		

	</div>




</body>
</html>