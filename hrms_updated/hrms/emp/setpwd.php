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
	<?php include "navpillsemp.php"; ?>

		<div class="col-sm-9">
			<div class="row">
				<h2 style='text-align: center;'>Reset Password</h2>
	<div class='emp_form_div center-block'>
	<form class='form-group center-block' action="ResetUpdatePwd.php" method='post'>
				
    <label> New Password</label>
			<input type='Password' name='npwd' placeholder='Enter New Password' class='form-control' id="txtPassword" required>

			<label> Re-enter Password</label>
			<input type='Password' name='cpwd' placeholder='Confirm Password' class='form-control' id="txtConfirmPassword" required>

	<div class="form-btn">
		<input type="submit" class="btn btn-info" style="margin-left: 45%" name="submit" value="Submit" onclick="return Validate()"/>
	</div>
	<?php	if(isset($_SESSION["message2"]))
    {
        echo"<div class='alert alert-success alert-dismissable' style='text-align:center; margin-top:15px;'>
         <a href='#' class='close' data-dismiss='alert' aria-label='close'>×</a>
  <strong>Successfully Updated Password!</strong>
</div>";
        unset($_SESSION["message2"]);
    }
    ?>

	</form>
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
header('location: http://localhost/hrms/employeelogin.php'); 
}

?>