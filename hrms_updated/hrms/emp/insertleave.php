<?php 
session_start();
function log_new()
{
	
	
	if(isset($_POST['submit']))
	{
	
		include "config.php";

		$sql = "INSERT INTO empleave(lid,from_date,	to_date,	description,empid)
		VALUES ('".$_POST['leave']."','".$_POST['fromdate']."','".$_POST['todate']."','".$_POST['desc']."','".$_SESSION['id']."') ;";

		

		if ($conn->query($sql) === TRUE) {
		   $_SESSION["message"]="Successfully Inserted The Data!";

			header('location:http://localhost/hrms/emp/myLeaves.php?eid=');
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();

	}
}
log_new();
?>