<?php
	include "config.php";

					$url= $_SERVER['REQUEST_URI'];	
					$eid=$_GET['eid'];
				
				$parts = parse_url($url);
				parse_str($parts['query'], $query);
	
	
		$sql = "DELETE  FROM empinfo where id='".$query['eid']."'";
		$emp_info = $conn->query($sql);

		header('location:./tableemp.php');
	?>