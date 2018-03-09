<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
<!-- <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /> -->

<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
 <link rel="stylesheet" type="text/css" href="../Assets/css/login.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../Assets/css/login.css">
<title>Employee Attendence</title>
</head>
<body>

	<div class="rows">
			<?php include "navpillsadmin.php" ?>
			<div class="col-md-9">
			<h1 style="text-align: center;">Add Attendence</h1>
			<div class='emp_form_div center-block'>
				<form class="form-group center-block" action="addattendence.php" method="post"  data-date-end-date="0d">	
				<label style="">Select Employee:</label>	
				<select class='form-control'  name="employee">
					<?php

					$url= $_SERVER['REQUEST_URI'];
					$parts = parse_url($url);
					parse_str($parts['query'], $query);
					$id= $query['q'];

					$_SESSION['sid']=$id;

					include "config.php";
					$sql="select * from empinfo";

					$result=$conn->query($sql);
					if($result->num_rows > 0)
						{
							while($row=$result->fetch_assoc())
							{
								echo "<option value=";
								echo $row['id'];
								echo">";
								echo $row['ename'];
								echo"</option>";
							}
						}
						?>
					</select>
						<label>Date:</label>
						<div class='input-group date' id='datetimepicker10'>
							<span class="input-group-addon">
                   				 <span class="glyphicon glyphicon-calendar"></span>
            			    </span>

							<input type="text" class="form-control" id="date" name="fromdate" placeholder="DD/MM/YYYY" type="text"  required />
					    </div>
					    <div class="form-btn">
					<input type="submit" name="submit" value="submit" class="btn btn-primary" style="margin-left:22%;">
				</div>
			</form>
		</div>
		</div>
	</div>
	</div>


<script>
    $(document).ready(function(){

    	var disable_dates=["2015-11-28","2015-11-14","2015-11-21"];
        var date_input=$('input[name="fromdate"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>100 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'dd/mm/yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
            
        })

        // return [ disabledDates.indexOf(string) == -1 ];
    })

    jQuery("fromdate").datepicker({ minDate: 0,maxDate:0 });
</script>



</body>
</html>