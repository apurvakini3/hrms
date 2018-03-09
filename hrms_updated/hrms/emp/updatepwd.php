<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hrms";
$conn = new mysqli($servername, $username, $password, $dbname);
$pwd=md5($_POST['npwd']);
$opwd=md5($_POST['opwd']);


$sql1 = "SELECT pwd FROM empinfo where pwd='$opwd'";
 $result1 = $conn->query($sql1);

 if ($result1->num_rows > 0) {
     // output data of each row
    $row1 = $result1->fetch_assoc();

           

        	$sql = "UPDATE empinfo SET pwd='$pwd' WHERE id='".$_SESSION['id']."'";
        	if ($conn->query($sql) === TRUE) {
    			echo "Record updated successfully";
				 } 
			else {
   			 	echo "Failed to update";	 
			}
        }
        
else {
    echo "0 results";
}

$conn->close();

?>




