<?php
include "config.php";
$sql="SELECT leavetype.leavetype, empleave.posting_date,empleave.from_date,empleave.to_date,empleave.description 
FROM leavetype
INNER JOIN empleave ON leavetype.id=empleave.lid";

$result=$conn->query($sql);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        echo "leavetype: " . $row["leavetype"]. " Posting Date: " . $row["posting_date"]. "from date: " . $row["from_date"].
        	"to date: " . $row["to_date"]."Description" . $row["description"].
         "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
?>