<?php

session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hrms";
$conn = new mysqli($servername, $username, $password, $dbname);

$ename=$_POST['ename'];
$qualification=$_POST['Qualification'];
$designation=$_POST['Designation'];
$institute=$_POST['Institute'];
$experience=$_POST['Experience'];
$email=$_POST['email'];
$pwd=$_POST['pwd'];
$address=$_POST['add'];
$deptid=$_POST['dept'];



$sql = "UPDATE empinfo SET ename='$ename',qualification='$qualification',designation='$designation',institute='$institute',experience='$experience',email='$email',address='$address' WHERE id='".$_SESSION['id']."'";

if ($conn->query($sql) === TRUE) {
    $_SESSION["message1"]="Successfully Updated The Data!";

			header('location:http://localhost/hrms/emp/editByEmployee.php?eid=');
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>