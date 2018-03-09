<?php
			 	include "config.php";
				$sql = "SELECT id,deptname FROM dept";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
    				while($row = $result->fetch_assoc()) {
						echo "<option value='". $row["id"]. "'>".$row["deptname"]."</option>";
					}
				} 			
				else {
    				echo "0 results";
					  }

$conn->close();
?>  
