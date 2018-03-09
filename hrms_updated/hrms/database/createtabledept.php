<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hrms";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "CREATE TABLE IF NOT EXISTS dept (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				deptname VARCHAR(50) NOT NULL
				
			);";

if ($conn->query($sql) === TRUE) {
    echo "Table  created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>