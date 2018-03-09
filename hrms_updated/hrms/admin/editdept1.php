<?php
session_start();
$url= $_SERVER['REQUEST_URI'];
				$parts = parse_url($url);
				parse_str($parts['query'], $query);

				$_SESSION['editid']=$query['id'];
				$_SESSION['editflag']=1;
				
include "adddept.php";
?>