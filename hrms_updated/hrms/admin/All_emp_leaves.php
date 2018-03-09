<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>All employees leaves </title>
</head>
<body>
	<?php include "headerFiles.php"; ?>

<div class="rows">
<?php include "navpillsadmin.php" ?>

	<div class="col-md-9">
			<div class="form-inline"; >
				<label style="padding: 20px;">Select Department:</label>
				 <select class='form-control' style="width: 25%;" id="dept" form="carform">
						<?php  
							include "config.php";
							$sql="select * from dept";
							$result=$conn->query($sql);

							if($result->num_rows > 0)
								{
									while($row=$result->fetch_assoc())
									{
										echo "<option value=";
								echo $row['id'];
								echo">";
								echo $row['deptname'];
								echo"</option>";
									echo "string";
									}
								}
							else{echo "empty Department";}
						?>
				</select>
			
				<label style="padding: 20px">Select Employee:  </label>
				<select class='form-control' style="width: 25%;" id="emp" >
				</select>

				<div id="tbl"></div>
				</div>	
	</div>
</div>



<script type="text/javascript">
	$(document).ready(function()
	  {

    			$("#dept").change(function(){ 
    				var selecteddept = $(" #dept option:selected").val();
			    			 $.ajax({  
			   						 type: 'GET',  
									 url: 'test.php?id='+selecteddept, 
			    					 success: function(response) {
			        				 $("#emp").html(response);
								   								 }
									});
    					});




    			$("#emp").change(function(){ 
    				var selectedemp = $(" #emp option:selected").val();
			    			 $.ajax({  
			   						 type: 'GET',  
									 url: 'All_leaves_table.php?eid='+selectedemp, 
			    					 success: function(result) {
			        				$("#tbl").html(result);
								   								 }
									});
    					});
		});
</script>


</body>
</html>
