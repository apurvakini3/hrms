<?php

include "config.php";

$sql="UPDATE empinfo SET pwd=md5(rand()) WHERE pass_flag='1'";
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

?>