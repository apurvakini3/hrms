<?php
session_start();
if($_SESSION["role"]=='employee')
{
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Employee Info</title>
	<?php include "headerFiles.php"; ?>
</head>
<body>
<div class="rows">
	<?php include "navpillsemp.php"; ?>
		<div class="col-sm-9">
			
				<div class='emp_form_div center-block'>
					<form class='form-group center-block' action="updatepwd.php" method='post'>
						<h2 style='text-align: center;'>Change Password</h2>
    					<label>Old Password</label>
						<input type='Password' name='opwd'  class='form-control' placeholder="Enter Old Password" required>
						<label> New Password</label>
						<input type='Password' name='npwd' placeholder='Enter New Password' class='form-control' id="txtPassword" required>
						<label> Re-enter Password</label>
						<input type='Password' name='cpwd' placeholder='Confirm Password' class='form-control' id="txtConfirmPassword" required>
				
				 <div class="form-btn">
				<input type="submit" class="btn btn-info" style="margin-left: 45%" name="submit" value="Submit" onclick="return Validate()"/>
				</div>
				</form>
		</div>
		<script type="text/javascript">
    		function Validate() {
        	var password = document.getElementById("txtPassword").value;
     		var confirmPassword = document.getElementById("txtConfirmPassword").value;
        	if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        	}
        return true;
   			 }
		</script>

		</div>		
	</div>
</body>
</html>
<?php
}
else
{
header('location: http://localhost/hrms/emp/index.php'); }
?>