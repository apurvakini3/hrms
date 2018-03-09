<?php
session_start();
if (isset($_SESSION['role'])) {

	header("Location:./adminHome.php");
}

else
{
	header("Location:./admin/adminLogin.php");
}

?>

