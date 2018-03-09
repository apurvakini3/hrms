<?php
session_start();
$_SESSION['role']="admin";
include 'config.php';
$uname=$_POST['uname'];
$pwd=$_POST['pwd'];
$sql = "SELECT * FROM admin
		Where username='$uname' AND password='$pwd' ;";
		$result = $conn->query($sql);
		$row=$result->fetch_assoc();
		if ($result->num_rows > 0) {
			header('location: http://localhost/hrms/admin/adminHome.php'); }
		else {
     	header("location:http://localhost/hrms/adminLogin.php");}
?>