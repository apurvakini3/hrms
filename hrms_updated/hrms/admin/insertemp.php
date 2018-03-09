<?php 
session_start();
function log_new()
{
	//$msg = new \Plasticbrain\FlashMessages\FlashMessages();

	$p=md5($_POST['pwd']);
	print_r($_POST);
	if(isset($_POST['submit']))
	{
	
		include "config.php";


		$sql = "INSERT INTO empinfo(ename,qualification,designation,institute,experience,email,pwd,address,deptid)
		VALUES ('".$_POST['ename']."','".$_POST['Qualification']."','".$_POST['Designation']."','".$_POST['Institute']."','".$_POST['Experience']."','".$_POST['email']."','".$p."','".$_POST['add']."','".$_POST['dept']."') ;";

		echo $sql;
		echo "<br><br>";

		if ($conn->query($sql) === TRUE) {
			$_SESSION["message"]="Successfully Inserted The Data!";

			header('location:http://localhost/hrms/admin/tableemp.php?eid=');
		    
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();

	}
}
log_new();
?>