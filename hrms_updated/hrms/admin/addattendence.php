<?php 

session_start();

$_SESSION['deptname']=$_POST['deptname'];
function log_new()
{
	
	if(isset($_POST['submit']))
	{
		include "config.php";

		$sql = "INSERT INTO empattendence(empid,OnDate)
		VALUES ('".$_POST['employee']."','".$_POST['fromdate']."')";

		if ($conn->query($sql) === TRUE) {

			$_SESSION["message"]="Successfully Inserted The Data!";

			header('location:http://localhost/hrms/admin/empattendence.php?eid=');
		    
			


		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();

	}
}
log_new();
?>