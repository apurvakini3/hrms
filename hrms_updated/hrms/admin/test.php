<?php
$q = $_GET['id'];

	include "config.php";
	$sql="select * from empinfo where deptid =$q ";
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