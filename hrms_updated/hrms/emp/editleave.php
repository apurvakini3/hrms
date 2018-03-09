<?php
session_start();
$url= $_SERVER['REQUEST_URI'];
				$parts = parse_url($url);
				parse_str($parts['query'], $query);

				$_SESSION['editleaveid']=$query['id'];
				$_SESSION['editleaveflag']=1;
				
include "datetimepicker.php";
?>