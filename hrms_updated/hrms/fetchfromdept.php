<?php
	session_start();
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="signupdata1";


	$conn=new mysqli($servername,$username,$password,$dbname);
	if($conn->connect_error)
		{
			die("connection failed!".$conn->connect_error);
		}	
		
		$sql="SELECT * from dept";
		
		$result=$conn->query($sql);
		
	if($result->num_rows>0)
		{
		$row=$result->fetch_assoc();
?>