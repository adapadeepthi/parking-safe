<?php
session_start();
	include("../../A6/config/database_config.php");
	$user=$_POST['email'];
	$password=$_POST['password'];
	$query="select * from allcustomers where Email='$user'";
	$result=mysqli_query($connect,$query);
	$k=-1;
	while($temp=mysqli_fetch_array($result))
	{
		if($temp['Email']==$user)
		{
			if($temp['password']==$password)
			{
						$_SESSION["id"] = $temp['id'];
				$_SESSION["name"] = $temp['Email'];
				$_SESSION["phone"] = $temp['phonenum'];
				$k=1;
				break;
			}
			else
			{
				$k=0;
			}
		}
		else
		{
			continue;
		}
	}
	if($k==1)
	{
	//	echo "you are logged in ";
	//	echo '<script>alert("you are logged in")</script>' ;
		$_SESSION['logged']=true;
	header("location:../../GOOGLE_PROJECT/main.php");
	}
	elseif($k==0)
	{
		
		header("location:../../A6/login/login.html?message=Your Login Name or Password is invalid");
	}
	elseif($k==-1)
	{	// echo 'invalid username or password';
		//header("location:login.html?message=invalid username or password");
	//	echo "not regesterd yet";
	//	echo '<script>alert("not regesterd yet")</script>' ;
	header("location:../../A6/login/login.html?message=Your Login Name or Password is invalid");
	}		
?>

			