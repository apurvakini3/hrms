<?php
	include "config.php";
	$url= $_SERVER['REQUEST_URI'];	
	$id=$_GET['id'];
	$parts = parse_url($url);
	parse_str($parts['query'], $query);
	echo $query['id'];
	
	$sql = "DELETE FROM dept where id='".$query['id']."'";
		
	if ($conn->query($sql) === TRUE) {
	header('location:./tabledept.php');
		}
	  else {
    		echo "0 results";
		   }

		$conn->close();
	?>