<?php
	include "config.php";

	$url= $_SERVER['REQUEST_URI'];
	$parts = parse_url($url);
	parse_str($parts['query'], $query);
	$id= $query['id'];

	$sql="UPDATE empleave SET ApprovalStatus='1' where id='$id'";

	if ($conn->query($sql) === TRUE) {
    header('location:http://localhost/hrms/admin/tableleave.php');
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
