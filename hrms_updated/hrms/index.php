<?php
session_start();
if (isset($_SESSION['role'])) {

	header("Location:./admin/adminHome.php");
}

else
{
	header("Location:./admin/adminLogin.php");
}

?>

