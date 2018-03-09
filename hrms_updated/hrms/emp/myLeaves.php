<?php

session_start();
if ($_SESSION["role"]=='employee')  
{ 

?> 

<!DOCTYPE html>
<html>
<head>
  <title>Employee Table</title>

    <?php include "headerFiles.php"; ?>
<body>

<?php  echo "<div class='rows'>";
        include "navpillsemp.php";
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "hrms";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 

        $sql = "SELECT * FROM empleave where empid='".$_SESSION['id']."'";


        $result = $conn->query($sql);

         echo"<div class='col-md-9'>";

        if(isset($_SESSION["message"]))
             {
                 echo"<div class='alert alert-success alert-dismissable' style='text-align:center; margin-top:5px;'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>×</a>
                    <strong>Successfully Inserted Data!</strong>
            </div>";
              unset($_SESSION["message"]);
              }

        if ($result->num_rows > 0) {
            echo "<h2 class='text-center'>Employee Leave Table</h2>";
             echo "
                <div style='overflow-x:auto;'>
             <table class='table table-responsive table-hover table-striped table-bordered '>
             <tbody>
                <caption></caption>
                     <tr>
                       
                         <th>Posting Date</th>
                         <th>From Date</th>
                         <th>To Date</th>
                         <th>Description</th>
                         <th>Approval Status</th>
                     </tr>";
                
         while($row = $result->fetch_assoc()) {

             echo "<tr><td>" . $row["posting_date"]. "</td><td>".$row["from_date"]."</td><td>".$row["to_date"]."</td><td>".$row["description"]."</td>";


            if($row["ApprovalStatus"])
            {
             echo"<td style='color:green;'><i>Approved!</i></td>";
            }

            else
            {
               echo"<td style='color:red;'><i>Not Yet Approved!</i></td></tr>"; 
            }

          }
    echo "</tbody></table><div></div></div>";
    }
     else {
    echo "0 results";
}

$conn->close();
?> 

</body>
</html>


        <?php
         }
             else {
            header('location: http://localhost/hrms/emp/employeeLogin1.php'); 
                    }
          ?>
