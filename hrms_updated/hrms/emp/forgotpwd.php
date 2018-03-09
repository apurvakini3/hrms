<!DOCTYPE html>
<html>
<head>
	<title>Forgot Password</title>
	 <?php include "headerFiles.php"; ?>
</head>
<body>
	<h2 style="text-align: center;">Forgot Password?</h2>
			<div class='emp_form_div center-block'>	
				<form class="form-group center-block" method="post" action="setflag.php">
					<label> Enter Registered Email</label>
					<input type="email" name="email" class="form-control" placeholder=" Enter Email" required>
					
					<button type="submit" class="btn btn-danger" style ="margin-left:45%; margin-top: 5%;">Submit</button>
				</form>
			</div>
			
		
	


</body>
</html>