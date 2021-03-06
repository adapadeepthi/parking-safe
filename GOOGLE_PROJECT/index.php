<!--DOCTYPE html-->
<html>
<head>
	<title>Access Google Maps API in PHP</title>
	<!--<link rel="stylesheet" href="css/bootstrap.min.css">
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>   -->
	<script type="text/javascript" src="js/googlemap.js"></script>
	<style type="text/css">
		.container
		{
			height:450px;
		}
		#map{
			width:100%;
			height:100%;
			border:1px solid blue;
		}
		#data,#allData{
			display:none;
		}
	</style>
</head>
<body>
	<div class="container">
		<center><h1></h1></center>
		<?php
			
			session_start();
			if(isset($_SESSION['logged'])){
				
			}else{
			header("location:../../GOOGLE_PROJECT/main.php?message=please login before booking");
			}
			$area=$_POST['toaddress'];
			$time_period=$_POST['minutes'];
			$vehicle_type=$_POST['vehicle'];
			$to=$_POST['from'];
			$from=$_POST['toaddress'];
			$vehicle_num=$_POST['vehiclenum'];
			$from_time=$_POST['fdate'];
			$to_time=$_POST['tdate'];
			echo '<table><tr><th>FROM</th><th>TO</th><th>vehicle num</th><th>vehicle type</th><th>FROM TIME</th><th>TO TIME</th><th>TIME</th></tr>';
			echo '<tr><td id="from">'.$from.'</td>';
			echo '<td id="to">'.$to.'</td>';
			echo '<td id="vehicle_num">'.$vehicle_num.'</td>';
			echo '<td id="veh_type">'.$vehicle_type.'</td>';
			echo '<td id="from_time">'.$from_time.'</td>';
			echo '<td id="to_time">'.$to_time.'</td>';
			echo '<td id="time_period">'.$time_period.'</td>';
			echo '</tr></table>';

			require 'education.php';
			$edu = new education;
			$edu->location=$area;
			//$coll = $edu->getCollegesBlankLatLng();
			//$coll = json_encode($coll, true);
			//echo '<div id="data">' . $coll . '</div>';
			$allData = $edu->getAllLandlord();
			$allData = json_encode($allData, true);
			echo '<div id="allData">' . $allData . '</div>';			
		 ?>
		<div id="map"></div>
	</div>
</body>
<!--key=AIzaSyCl4s5AbjtwwfOLeMAy8V4GnicKRW6ve5U

key=AIzaSyCN6XubU-cMwvMc8RoyXD-HNVP6VM1YsDY

key=AIzaSyDd4luJ2Rms_RcZPFqpH5G1XtbV13UvjAo

AIzaSyAplGGYH6ymAvq6_m73aE-P-EAyk7GCDvw


-->



<!--
<script 
    async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCl4s5AbjtwwfOLeMAy8V4GnicKRW6ve5U&callback=loadMap">
</script>
-->
<script 
     src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDd4luJ2Rms_RcZPFqpH5G1XtbV13UvjAo&callback=loadMap">
</script>
</html>