<?php
session_start();
$_SESSION['role']="employee";
include 'config.php';
$email=$_POST['email'];
$pwd=$_POST['pwd'];

$p=md5($pwd);

		
	 	$sql = "SELECT * FROM empinfo
	 	Where email='$email' AND pwd='$p'";
	 	echo $sql;
	 	$result = $conn->query($sql);
	 	$row = $result->fetch_assoc();
	 	

		if ($result->num_rows > 0) {

				
			$_SESSION["id"]=$row["id"];	
			$_SESSION["email"]=$_POST["email"];
			$_SESSION["pwd"]=$_POST["pwd"];
			$_SESSION["ename"]=$row["ename"];
			$_SESSION["designation"]=$row["designation"];
			$_SESSION["address"]=$row["address"];


			if($row['pass_flag']=='1')
			{
				header("Location:http://localhost/hrms/emp/setpwd.php");
			}
			else
			{

      			header("Location:http://localhost/hrms/emp/employeeLoggedin1.php");
      		}
	}


		else {
     	header("Location:http://localhost/hrms/emp/employeeLogin1.php");
     	}

     ?>


     