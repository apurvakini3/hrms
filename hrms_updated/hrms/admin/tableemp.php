<?php

session_start();
if ($_SESSION["role"]=='admin')  
{ 

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

$sql = "SELECT * FROM empinfo";


$result = $conn->query($sql);
echo"<div class='rows'><div class='col-md-9'><h1 class='text-center'>Employees Info</h1>";


    if(isset($_SESSION["message"]))
    {
        echo"<div class='alert alert-success alert-dismissable' style='text-align:center;   
            margin-top:5px;'>
               <a href='#' class='close' data-dismiss='alert' aria-label='close'>×</a>
               <strong>Successfully Inserted Data!</strong>
            </div>";
        unset($_SESSION["message"]);
    }


if(isset($_SESSION["message1"]))
    {
        echo"<div class='alert alert-success alert-dismissable' style='text-align:center; margin-top:5px;'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>×</a>
                <strong>Successfully Updated Data!</strong>
          </div>";
        unset($_SESSION["message1"]);
    }    

if ($result->num_rows > 0) {
    echo "<div style='overflow-x:auto;'><table class='table table-responsive table-hover leave_table table-striped table-bordered' style='overflow-x:auto;'>
            <tr>
                <th>ID</th>
                <th>Employee Name</th>
                
                <th>Designation</th>
                
                <th>Email</th>
               
                <th>Contact</th>
                <th>Department</th>
                <th>Edit Data</th>
                <th>Attendence</th>
                <th>Delete Data</th>
            </tr>";
    
    while($row = $result->fetch_assoc()) {

        echo "<tr>
                <td>" . $row["id"]. "</td>
                <td>" . $row["ename"]. "</td>
               
                <td>".$row["designation"]."</td>
               
                <td>".$row["email"]."</td>
                
                <td>".$row["address"]."</td>
                <td>".$row["deptid"]."</td>";
                echo"<td>
                      <a href='editemp1.php?eid=".$row["id"]."' name='editemp'><button class='btn btn-info'  id='editemp'>Edit</button></a>
                    </td>";
                 echo"<td>
                      <a href='basic-views.html?eid=".$row["id"]."' name='presentemp'><button class='btn btn-success'  id='editemp'>Attendence</button></a>
                      </td>";

                  echo"<td>
                      <a href='deleteemp.php?eid=".$row["id"]."' name='editemp'><button class='btn btn-danger'  id='editemp'>Delete</button></a>
                      </td>
            </tr>";
    }
    echo "</table>
    </div>
    </div>
  </div>";

    ;
} else {
    echo "0 results";
}

$conn->close();
?> 

</body>
</html>


<?php
}
 else {

header('location: http://localhost/hrms/admin/adminLogin.php'); 
}

?>
