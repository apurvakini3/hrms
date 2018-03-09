<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hrms";
$conn = new mysqli($servername, $username, $password, $dbname);

$deptname=$_POST['deptname'];

$url= $_SERVER['REQUEST_URI'];
	$parts = parse_url($url);
	parse_str($parts['query'], $query);
	$id= $query['id'];

$sql = "UPDATE dept SET deptname='$deptname' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {

	
    $_SESSION["message1"]="Successfully Inserted The Data!";

			header('location:http://localhost/hrms/admin/tabledept.php?eid=');
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>