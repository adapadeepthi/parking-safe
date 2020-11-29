<?php
	include("../../A6/config/database_config.php");
	$email=$_POST['email'];
	$password=$_POST['password'];
	$phnnum=$_POST['phnnum'];
	try{
	$query="insert into allcustomers(Email,password,phonenum) values('$email','$password','$phnnum')";
	$result=mysqli_query($connect,$query);
	}
	catch(Exception $e)
	{
		echo "it is not inserting";
	}
	echo "\nsuccessfully registered";

?>