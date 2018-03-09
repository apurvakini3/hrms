<?php
include "config.php";

$sql="SELECT email,pass_flag from empinfo";
$result=$conn->query($sql);
$a=$_POST['email'];

if($result->num_rows > 0)
{		


	while($row = $result->fetch_assoc())
	{
			if($row['email']==$a)

			{

				$pwd1=rand();
		$sql1="UPDATE empinfo SET pass_flag='1',pwd='".md5($pwd1)."' WHERE email='$a' ";


		if ($conn->query($sql1) === TRUE) {


    echo "new password is:" .$pwd1 ;
	} else {
    	echo "Error updating record: " . $conn->error;
			}
	}
		
	}


}

else
{
	echo "not registered email!";
}


	



$conn->close();
?>