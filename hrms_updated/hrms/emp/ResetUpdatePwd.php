<?php

session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hrms";
$conn = new mysqli($servername, $username, $password, $dbname);

$pwd=md5($_POST['npwd']);


$sql1 = "SELECT pwd,pass_flag FROM empinfo";
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
    // output data of each row
    $row1 = $result1->fetch_assoc();


        	$sql = "UPDATE empinfo SET pwd='$pwd',pass_flag='0' WHERE id='".$_SESSION['id']."'";
        	if ($conn->query($sql) === TRUE) {
    			$_SESSION["message2"]="Successfully Updated the password!";

            header('location:http://localhost/hrms/emp/setpwd.php?eid=');
				 } 
			else {
   			 	echo "Failed to update";	 
			}
        }
        else{
        	echo "0 result";
        }

		
$conn->close();

?>




