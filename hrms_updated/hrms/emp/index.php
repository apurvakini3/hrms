<?php
session_start();


if(isset($_SESSION['role']))
{
	header('location:http://localhost/hrms/emp/employeeLoggedin1.php');

}
else
{
header('location:http://localhost/hrms/emp/employeeLogin1.php');
}	

?>


