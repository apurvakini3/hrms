<?php
session_start();
$url= $_SERVER['REQUEST_URI'];
				$parts = parse_url($url);
				parse_str($parts['query'], $query);

				$_SESSION['leaveid']=$query['id'];
				$_SESSION['leaveflag']=1;
				
include "addLeaveType.php";
?>