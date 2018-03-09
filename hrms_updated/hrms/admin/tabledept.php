<?php
 
session_start();
if ($_SESSION["role"]=='admin')  
{ 

?> 
<!DOCTYPE html>
<html>
<head>
<title>Dept Table</title>
  <?php include "headerFiles.php"; ?>
<body>
<div class="rows">
    <?php include "navpillsadmin.php"; ?>
    <?php
        include "config.php"; 
        $sql = "SELECT * FROM  dept";
        $result = $conn->query($sql);

    if(isset($_SESSION["message"]))
       {
          echo"<div class='alert alert-success alert-dismissable' style='text-align:center; 
                margin-top:5px;'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>×</a>
                <strong>Successfully Inserted Data!</strong>
              </div>";
        unset($_SESSION["message"]);
      }
      echo"<div class='col-md-9'><h1 style='text-align:center; padding:20px;'>EDIT DEPARTMENTS</h1>";

      if(isset($_SESSION["message1"]))
        {
            echo"<div class='alert alert-success alert-dismissable' style='text-align:center; margin-top:20px;'>
               <a href='#' class='close' data-dismiss='alert' aria-label='close'>×</a>
              <strong>Successfully Updated Data!</strong>
            </div>";
              unset($_SESSION["message1"]);
        }
      if ($result->num_rows > 0)
       {
          echo "
          <div style='overflow-x:auto;'>
            <table class='table table-hover table-responsive table-striped table-bordered'>
              <tr>
                <th>ID</th>
                <th>Department Name</th>
                <th>Edit Dept</th>
                <th>Delete Dept</th>
              </tr>";
    
            while($row = $result->fetch_assoc()) {

            echo "<tr>
                <td>" . $row["id"]. "</td>
                <td>" . $row["deptname"]. "</td>";
                echo"<td><a href='editdept1.php?id=".$row["id"]."'>
                <button class='btn btn-info' style='margin-right:0px;'>Edit</button></a>
                </td>";
                echo"<td><a href='deletedept.php?id=".$row["id"]."'><button class='btn btn-danger' style='margin-right:0px;'>Delete</button></a></td>
            </tr>";
        }
         echo "</table>
        <div>
         </div>
         </div>";
          ;
        } else
         {
          echo "0 results";
          }
        $conn->close();
      ?> 
</body>
</html>


<?php
}
 else {

header('location: http://localhost/hrms/adminLogin.php'); 
}

?>
