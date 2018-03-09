<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Employee Login</title>
	   <meta charset="UTF-8">
	  	  <link rel="stylesheet" href="../Assets/css/style.css">
  <?php include "headerFiles.php"; ?>
</head>
<body>
	<div class="wrapper">
	<div class="container">
		<h1 class="center-text">Employee Login</h1>

		<form class='form-group' method='post' action='employeeLoggedin.php'>
			<div class="input-group center-block" >
				<input type="email" name="email" placeholder=" Enter User Name">
			</div>
			<div class="input-group center-block">
      			<input type="Password" name="pwd"  placeholder=" Enter Password">
			</div>
			<div class="input-group center-block">
				<button type="submit" >Login</button>
			</div>
			<h3 class="input-group center-block">
				<a href="forgotpwd.php">Forgot Password?</a>
			</h3>
				</form>
			</div>
			
		<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="../Assets/js/index.js"></script>




</body>
</html>
