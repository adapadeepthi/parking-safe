<?php
$host='localhost';
	$user='root';
	$password='';
	$db='googlemaps';
	$connect=mysqli_connect($host,$user,$password,$db);
	//id	name	address	landmark	area	phone	lat	lng	amt_space	show_available cost_per_hour email
	//echo "connected successfully";
	$name=$_POST['name'];
	$address=$_POST['address'];
	$landmark=$_POST['landmark'];
	$area=$_POST['area'];
	$phone=$_POST['phn'];
	$lat=$_POST['lat'];
	$lng=$_POST['long'];
	$amt_space=$_POST['space'];	
	//$show_available=$_POST['']	
	$cost_per_hour=$_POST['cost'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	try {
		$que1="select * from allcustomers where Email='$email'";
		$answer1=mysqli_Query($connect,$que1);
		if(mysqli_num_rows($answer1)==1){
			$temp=mysqli_fetch_array($answer1);
	$id=$temp['id'];
				$query2="insert into landlord(cid,name,address,landmark,area,phone,lat,lng,amt_space,cost_per_hour,email)
		values('$id','$name','$address','$landmark','$area','$phone','$lat','$lng','$amt_space','$cost_per_hour','$email')";
				$result2=mysqli_Query($connect,$query2);
				echo "\nsuccessfully registered";
				
		}
		else{
	$query1="insert into allcustomers(Email,password,phonenum) values('$email','$password',$phone)";
	$result1=mysqli_Query($connect,$query1);
	$que="select * from allcustomers where Email='$email'";
	$answer2=mysqli_Query($connect,$que);
	$temp=mysqli_fetch_array($answer2);
	$id=$temp['id'];
	$query2="insert into landlord(cid,name,address,landmark,area,phone,lat,lng,amt_space,cost_per_hour,email)
		values('$id','$name','$address','$landmark','$area','$phone','$lat','$lng','$amt_space','$cost_per_hour','$email')";
		$result2=mysqli_Query($connect,$query2);
				echo "\nsuccessfully registered";

		}
	}
	catch(Exception $e)
	{
		echo $e;
	}
	
?>