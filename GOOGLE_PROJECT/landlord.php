<?php
	$lat=$_GET['lat'];
	$connection=mysqli_connect('localhost','root','','googlemaps');
	$query="select * from colleges where lat='$this->lat'";
	$result=mysqli_query($conn,$query);
	while($temp=mysqli_fetch_array($result))
	{
		echo "name of the owner : "+$temp['name'];
		echo ""
	}
?>