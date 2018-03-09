<?php
session_start();
include "config.php"; 

$sql = "CREATE TABLE IF NOT EXISTS empleave (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				lid INT(6) NOT NULL,
				posting_date date NOT NULL,
				from_date date NOT NULL,
				to_date date NOT NULL,
				description varchar(255) NOT NULL,
				empid  INT(6) not null,			
	FOREIGN KEY (lid) REFERENCES leavetype(id)
			
			);";

if ($conn->query($sql) === TRUE) {
    echo "Table  created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>