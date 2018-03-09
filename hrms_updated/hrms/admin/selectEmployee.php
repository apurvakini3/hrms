<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Select Employee</title>
	<?php include "headerFiles.php";
	 ?>

</head>
<body>


	<h2>The XMLHttpRequest Object</h2>

	<?php include "navpillsadmin.php" ?>

<form action=""> 

	<button onclick="showCustomer()" >click me</button>
<select style="width:20%; height:30px; " name="employee">
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

	

</form>

<div id="txtHint">Employee Info</div>


<script>
function showCustomer() {
  var xhttp;    
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = PHP.parse(this.responseText);
    }
  };
  xhttp.open("GET", "getEmployee.php", true);
  xhttp.send();
}
</script>

</body>
</html>