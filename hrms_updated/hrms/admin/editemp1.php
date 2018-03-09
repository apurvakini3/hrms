<?php
session_start();
$url= $_SERVER['REQUEST_URI'];
				$parts = parse_url($url);
				parse_str($parts['query'], $query);

				$_SESSION['editempid']=$query['eid'];
				$_SESSION['editempflag']=1;
				
include "addEmp.php";
?>