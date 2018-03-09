<?php
session_start();
if ($_SESSION["role"]=='employee')  { 
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
			<?php include "navpillsemp.php"; ?>

			<div class="col-sm-10">

				<form class="form-group" action="insertleave.php" method="post">
					<h1 style="text-align: center;">Leave Request</h1>				
					<label for='s1'>Leave Type:</label>
      				<select class='form-control' id='leave' name='leave' required>
  		
<?php
			 	include "config.php";
				$sql = "SELECT id,leavetype FROM leavetype";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
    				while($row = $result->fetch_assoc()) {
						echo "<option value='". $row["id"]. "'>".$row["leavetype"]."</option>";
					}
				} 			
				else {
    				echo "0 results";
					  }

$conn->close();
?> 

</select>
<br>
<label>From Date:</label>

<?php include "datetimepicker.php"; ?>

<label>To Date:</label>

<?php include "datetimepicker1.php"; ?>

<br>
<label>Description:</label>

<textarea class="form-control" rows="5" id="comment" name="desc" id="desc" required></textarea>
<br>

<input type="submit" class="btn btn-info" style="margin-top: 30px; margin-left: 45%;" name="submit" value="Submit">
</form>
</div>
</body>
</html>

<?php
}
 else {
	header('location: http://localhost/hrms/emp/index.php'); 
		}

?>