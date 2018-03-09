<!DOCTYPE html>
<html>
<head>
		
</head>
<body>


<div class="card_space">
	<div class="card">
		  	<img src="../Assets/images/profile.jpg"  class="img-circle" alt="John" style="padding:15px;width:60%">
		  	<hr class="center-block">
			
	<div class="card_space">
	<p><span><i class="fa fa-user " ></i></span> <?php echo $_SESSION['designation'] ?></p>
	<p><span><i class="fa fa-envelope-o"></i></i></span> <?php echo $_SESSION['email'] ?></p>
	<p><span><i class="fa fa-phone " ></i></span> +91-7709678362</p>
	<p><span><i class="fa fa-map-marker "></i></span> <?php echo $_SESSION['address'] ?></p>
	</div>
		 <p><button><a style="color: white" href="editByemployee.php"> View Details</a></button></p>
		</div>
</div>

</body>
</html>