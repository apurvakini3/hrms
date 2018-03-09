<?php

session_start();

?>
<!DOCTYPE html>
<html>
<head>
  <title>Employee Table</title>

	<?php include "headerFiles.php"; ?>
<body>

<?php
include "navpillsadmin.php";

include "config.php";

  $url= $_SERVER['REQUEST_URI'];
  $parts = parse_url($url);
  parse_str($parts['query'], $query);
  //$id= $query['q'];


$sql = "SELECT * FROM empinfo";
echo $sql;

$result = $conn->query($sql);
echo"<div class='rows'><div class='col-md-10'><h1 style='text-align:center; margin-top:80px;'>EDIT DATA</h1>";


if ($result->num_rows > 0) {
    echo "<table class='table table-hover'><tr><th>ID</th><th>Employee Name</th><th>Qualification</th><th>Designation</th><th>Institute</th><th>Experience</th><th>Email</th><th>Password</th><th>Address</th><th>Department<th>Edit Data</th><th>Delete Data</th></tr>";
    
    while($row = $result->fetch_assoc()) {

        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["ename"]. "</td><td>" . $row["qualification"]. "</td><td>".$row["designation"]."</td><td>".$row["institute"]."</td><td>".$row["experience"]."</td><td>".$row["email"]."</td><td>".$row["pwd"]."</td><td>".$row["address"]."</td><td>".$row["deptid"]."</td>";
        echo"<td><a href='editemp1.php?eid=".$row["id"]."' name='editemp'><button class='btn btn-info'  id='editemp'>Edit</button></a></td>";
        echo"<td><a href='deleteemp.php?eid=".$row["id"]."' name='editemp'><button class='btn btn-danger'  id='editemp'>Delete</button></a></td></tr>";
    }
    echo "</table></div></div>";

    ;
} else {
    echo "0 results";
}

$conn->close();
?> 

</body>
</html>


