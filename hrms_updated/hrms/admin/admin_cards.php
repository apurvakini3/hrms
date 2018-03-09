<!DOCTYPE html>
<html>
<head>
	<title>Employees profile cards</title>
	 <meta charset="UTF-8">
	  <?php include "headerFiles.php"; ?>
</head>
<body>
	<div class="rows">
		<?php include 'navpillsadmin.php'; ?>
<div class="col-md-9">
<?php 
	include "config.php";

	$sql = "SELECT * FROM empinfo";

	$result = $conn->query($sql);

if ($result->num_rows > 0) {

while($row = $result->fetch_assoc())
{
	echo "<div class='adm_card_space adm_cards'>";
			echo "<div class='card'>
				<img src='../Assets/images/profile.jpg'  class='img-circle' alt='John' style='padding:15px;width:60%';'>";
				  	echo "<hr class='center-block'>";
						echo "<div class='card_space'>
								<p><span><i class='fa fa-user' ></i></span> 
									" . $row["ename"]. "
								</p>
								<p><span><i class='fa fa-envelope-o'></i></i></span>
								 	".$row["email"]."
								</p>
								<p><span><i class='fa fa-phone ' ></i></span> +91-7709678362</p>
								<p><span><i class='fa fa-map-marker '></i></span> 
									".$row["address"]."
								</p>
							</div>";
				 	echo "<p><button><a style='color: white' href='tableemp.php'> View Details</a></button></p>
				 	</div>
				</div>";

	}
}
else {
	echo "No Employees";
}
?>
					
			</div>
		</div>
	
</body>
</html>