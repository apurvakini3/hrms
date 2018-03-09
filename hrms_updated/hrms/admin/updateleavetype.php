<?php

session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hrms";
$conn = new mysqli($servername, $username, $password, $dbname);

$leavetype=$_POST['leavetype'];
$desc=$_POST['leavedesc'];

$url= $_SERVER['REQUEST_URI'];
	$parts = parse_url($url);
	parse_str($parts['query'], $query);
	$id= $query['id'];

$sql = "UPDATE leavetype SET leavetype='$leavetype',description='$desc' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    $_SESSION["message1"]="Successfully Updated The Data!";

			header('location:http://localhost/Apurva/tutorials%20homework/Project%202/admin/tableleavetypes.php?eid=');
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>