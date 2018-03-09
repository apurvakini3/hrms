<?php
session_start();
if($_SESSION['role'])
{
?>
<!DOCTYPE html>
<html>
<head>
	   <title>date</title>
	  
  	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
  <!--   <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /> -->

<!-- Bootstrap Date-Picker Plugin -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
    <link rel="stylesheet" type="text/css" href="../Assets/css/login.css">
</head>

<body>
    
<div class="rows">
		<?php include "navpillsemp.php"; ?>
      <div class="col-sm-9">
        <div class='emp_form_div center-block'>
				 <form class="form-group center-block" action="insertleave.php" method="post">
					<h1 style="text-align: center;">Leave Request</h1>				
					<label for='s1'>Leave Type:</label>
      				<select class='form-control' id='leave' name='leave' required>
  		
              <?php
        			 	include "config.php";
        				$sql = "SELECT id,leavetype FROM leavetype";
        				$result = $conn->query($sql);
        				if ($result->num_rows > 0)
                 {
            				while($row = $result->fetch_assoc()) {
        						echo "<option value='". $row["id"]. "'>".$row["leavetype"]."</option>";
        					}
        				} 			
        				else {
            				echo "0 results";
        					  }

                  $conn->close();
                ?> 

          </select>
          <br>
            <label>From Date:</label>
              <div class='input-group date' id='datetimepicker10'>
                  <span class="input-group-addon">
                     <span class="glyphicon glyphicon-calendar"></span>
                 </span>

                <input type="text" class="form-control" id="date" name="fromdate" placeholder="DD/MM/YYYY" type="text" required />
              </div>
          <br>

             <label>To Date:</label>
               <div class='input-group date' id='datetimepicker10'>
                  <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                  </span>
          
                    <input type="text" class="form-control" id="date" name="todate" placeholder="DD/MM/YYYY" type="text" required/>
               </div>
          <br>
         
          <label>Description:</label>
            <textarea class="form-control" rows="5" id="comment" name="desc" id="desc" placeholder=" Please Describe...." required ></textarea>
              <br>
               <div class="form-btn">
                     <input type="submit" class="btn btn-info" name="submit" value="Submit">
               </div>
      </form>
    </div>
 </div>

          <script>
              $(document).ready(function(){
                var date_input=$('input[name="fromdate"]'); //our date input has the name "date"
                var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
                var options={
                  format: 'dd/mm/yyyy',
                  container: container,
                  todayHighlight: true,
                  autoclose: true,
                };
                date_input.datepicker(options);
              })
          </script>

          <script>
              $(document).ready(function(){
                var date_input=$('input[name="todate"]'); //our date input has the name "date"
                var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
                var options={
                  format: 'dd/mm/yyyy',
                  container: container,
                  todayHighlight: true,
                  autoclose: true,
                };
                date_input.datepicker(options);
              })
          </script>


</body>
</html>

        <?php
        }
        else
        {
          header("location:./empLogin1.php");
        }
        ?>
