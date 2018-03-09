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
    // echo "<div class='row'>";
    include "navpillsadmin.php";
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hrms";

    $conn = new mysqli($servername, $username, $password, $dbname);

      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
            } 
             $sql = "SELECT * FROM leavetype";
              $result = $conn->query($sql);
              echo"<div class='col-md-9'>
              <h1>View Leave Types</h1>";

      if(isset($_SESSION["message"]))
           {
                echo"<div class='alert alert-success alert-dismissable' style='text-align:center; '>
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
                echo "
                <div style='overflow-x:auto;'>
                <table class='table table-hover table-responsive table-striped table-bordered'>
                <tr>
                <th>ID</th>
                <th>Leave Type</th>
                <th>Description</th>
                <th>Update</th>
                <th>Delete</th>
                </tr>";
    
         while($row = $result->fetch_assoc()) {

                echo "<tr>
                      <td>" . $row["id"]. "</td>  
                      <td>" . $row["leavetype"]. "</td>
                      <td>" . $row["description"]. "</td>";

                 echo"<td>
                        <a href='editleavetype1.php?id=".$row["id"]."' name='editemp'><button class='btn btn-info'  id='editemp'>Update</button></a>
                     </td>";

                  echo"<td> 
                          <a href='deleteleavetype.php?id=".$row["id"]."' name='editemp'><button class='btn btn-danger'  id='editemp'>Delete</button></a>
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
