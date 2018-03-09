<?php 

session_start();

$_SESSION['deptname']=$_POST['deptname'];
function log_new()
{
	
	if(isset($_POST['submit']))
	{
	echo "in log_new";
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "hrms";

		
		$conn = new mysqli($servername, $username, $password, $dbname);
		
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}

		$sql = "INSERT INTO dept(deptname)
		VALUES ('".$_POST['deptname']."')";

		if ($conn->query($sql) === TRUE) {

			$_SESSION["message"]="Successfully Inserted The Data!";

			header('location:http://localhost/hrms/admin/tabledept.php?eid=');
		    
			


		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();

	}
}
log_new();
?>