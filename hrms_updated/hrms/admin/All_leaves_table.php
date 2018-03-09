<!DOCTYPE html>
<html>
<head>
	<title></title>
		<?php include "headerFiles.php"; ?>
<body>
</head>
<body>

<?php

$p= $_GET['eid'];

include "config.php";

$sql="SELECT leavetype.leavetype,empleave.id,empleave.posting_date,empleave.from_date,empleave.to_date,empleave.description,empleave.empid,empleave.ApprovalStatus,empinfo.ename
FROM ((empleave
INNER JOIN leavetype ON empleave.lid=leavetype.id)
INNER JOIN empinfo ON empleave.empid=empinfo.id)
WHERE empinfo.id = $p
;";


$result = $conn->query($sql);

            echo"
                <h1 style='text-align:center; '>Employee Leave Table</h1>
                <br>";
        if ($result->num_rows > 0) {
          echo "
            <div style='overflow-x:auto;'>
            <table class='table table-hover table-responsive table-striped table-bordered'>
                    <tr>
                        <th>ID</th>
                        <th>Leave Name</th>
                        <th>Posting Date</th>
                        <th>From Date</th>
                        <th>To Date</th>
                        <th>Description</th>
                        <th>Employee Name</th>
                        <th>Approve Leave</th>
                        <th>Disapprove Leave</th>
                    </tr>";
    
    while($row = $result->fetch_assoc()) {

        echo "<tr>
                <td>" . $row["id"]. "</td>
                <td>" . $row["leavetype"]. "</td>
                <td>" . $row["posting_date"]. "</td>
                <td>".$row["from_date"]."</td>
                <td>".$row["to_date"]."</td>
                <td>".$row["description"]."</td>
                <td>".$row["ename"]."</td>";


            if($row["ApprovalStatus"])
            {
              echo"<td>
                     <a href='approveLeave.php?id=".$row["id"]."' name='deleteemp'><button class='btn btn-success'  id='deletetemp'>Approved!</button></a>
              </td>";
            }

            else
            {
               echo"<td>
                    <a href='approveLeave.php?id=".$row["id"]."' name='deleteemp'><button class='btn btn-success'  id='deletetemp'>Approve</button></a>
                    </td>"; 
            }

             echo"<td>
                    <a href='deleteleave.php?id=".$row["id"]."' name='approveemp'><button class='btn btn-danger'  id='approveemp'>Disapprove</button></a>
                </td>
        </tr>";            


    }
    echo "</table><div>";

    ;
} else {
    echo "<h3>No leaves Yet</h3>";
}

$conn->close();
?> 
</body>
</html>