
<?php include '../menu.php';?>
<?php
include("../../A6/config/database_config.php");

$cid=$_SESSION['id'];
$mail=$_SESSION['name'];
$phn=$_SESSION['phone'];
$from=$_POST["from"];
$to=$_POST["to"];
$veh=$_POST['vehicle_num'];
$from_time=$_POST["from_time"];
$to_time=$_POST["to_time"];
echo $from_time;
echo $to_time;
$lid=$_POST['id'];
$id=1;
	$query="insert into booking(cid,email,phnno,from_area,to_area,vehicle_num,from_time,to_time,lid) 
	values('$cid','$mail','$phn','$from','$to','$veh','$from_time','$to_time','$lid')";
	//$result=mysqli_query($connect,$query);
	if (mysqli_query($connect, $query)) {
  echo "Your booking is done";
} else {
  echo "Error: " . $query . "<br>" . mysqli_error($connect);
}


?>