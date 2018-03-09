<?php 

session_start();

$_SESSION['leavetype']=$_POST['leavetype'];
function log_new()
{
	
	if(isset($_POST['submit']))
	{
	
		include "config.php";

		$sql = "INSERT INTO leavetype(leavetype,description)
		VALUES ('".$_POST['leavetype']."','".$_POST['leavedesc']."')";

		if ($conn->query($sql) === TRUE) {

			$_SESSION["message"]="Successfully Inserted The Data!";

			header('location:http://localhost/hrms/admin/tableleavetypes.php?eid=');

		    
			
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();

	}
}
log_new();
?>