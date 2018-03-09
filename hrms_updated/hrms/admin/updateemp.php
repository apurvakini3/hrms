<?php
session_start();
include "config.php";


$ename=$_POST['ename'];
$qualification=$_POST['Qualification'];
$designation=$_POST['Designation'];
$institute=$_POST['Institute'];
$experience=$_POST['Experience'];
$email=$_POST['email'];
$pwd=md5($_POST['pwd']);
$address=$_POST['add'];
$deptid=$_POST['dept1'];

print_r($_POST);

$sql="SELECT id,deptname from dept";

$emp_info = $conn->query($sql);
$row = $emp_info->fetch_assoc();	

$did=$row['id'];

$url= $_SERVER['REQUEST_URI'];
	$parts = parse_url($url);
	parse_str($parts['query'], $query);
	$id= $query['eid'];

	

$sql = "UPDATE empinfo SET ename='$ename',qualification='$qualification',designation='$designation',institute='$institute',experience='$experience',email='$email',pwd='$pwd',address='$address',deptid='$deptid' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    
$_SESSION["message1"]="Successfully Updated The Data!";

			 header('location:http://localhost/hrms/admin/tableemp.php?eid=');


} else {
    echo "Error updating record: " . $conn->error;
}



$conn->close();
?>