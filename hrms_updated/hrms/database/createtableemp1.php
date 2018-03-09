<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hrms";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "CREATE TABLE IF NOT EXISTS empinfo4 (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				ename VARCHAR(50) NOT NULL,
				qualification VARCHAR(30) NOT NULL,
				designation VARCHAR(30) NOT NULL,
				institute VARCHAR(30) NOT NULL,
				experience VARCHAR(30) not null,
				email  varchar(30) not null,
				pwd varchar(30) not null,
				address varchar(500) not null,
				deptid INT(6) not null
				
			);";

if ($conn->query($sql) === TRUE) {
    echo "Table  created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>