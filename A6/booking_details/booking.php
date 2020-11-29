<html>
<head>
	<title>booking</title>
	<link rel="stylesheet" type="text/css" href="../../GOOGLE_PROJECT/datetimepicker-master/jquery.datetimepicker.css"/>
	<link rel="stylesheet" href="../MainStyle.css">
<style type="text/css">

.custom-date-style {
	background-color: red !important;
}

.input{	
}
.input-wide{
	width: 500px;
}
</style>
</head>
<body >
	
<div class=menu>
	<b style="font-size:50px">Safe And Easy Vehicle Parking</b>
		<table align=center cellspacing=30 class="table1">
			<tr>
				<td><h3><a href="http://localhost:8090/GOOGLE_PROJECT/main.php">Home</a> </h3></td>
				<td><h3><a href="http://localhost:8090/A6/rentspace/rentspace.html">Help</a> </h3></td>
				<td class=city><h3><a href="">Cities</a></h3>
				<table class=cities cellpadding=5 cellspacing=4>
					<tr>
						<td>Gudivada</td>
						<td>Vijayawada</td>
					</tr>
					<tr>
						<td>Machilipatnam</td>
						<td>Junction</td>
					</tr>
				</table>
				<?php
				session_start();
		
				if(isset($_SESSION['logged'])){
				if($_SESSION['logged']==true){
					echo '<td><h3><a href="http://localhost:8090/A6/checking_details/cust_check.php">HistoryCustomer</a>';
					echo '<td><h3><a href="http://localhost:8090/A6/checking_details/landlord_check.php">HistoryLandlord</a>';
					$urldata= '<td><h3><a href="http://localhost:8090/GOOGLE_PROJECT/logout.php">Logout </a>';
					$lu=$_SESSION["name"];
					$combine = $urldata.$lu; 
					echo $combine.' </h3></td>';
					
				}
				}
				else{
					echo '<td><h3><a href="http://localhost:8090/A6/login/login.html">Login</a> </h3></td>';
					echo '<td><h3><a href="http://localhost:8090/A6/decide_cust_lord/ask_cust_land.html">SignUp</a></h3></td>';
				}
				?>
			</tr>	
		</table>
</div>
<div>
	
	<form method=post action="http://localhost:8090/GOOGLE_PROJECT/main.php">
	<table cellspacing=4 cellpadding=4 class="table2">
		<tr >
		<td colspan=2><h2><u><i>book your space here</i></u></h2></td>
		</tr>
		<tr>
			<th>From : </th>
			<td><input type="text" placeholder="from place" name="from"/></td>
		</tr>
		<tr>
			<th>To</th>
			<td><input type="text" placeholder="to place" name="toaddress"/></td>
		</tr>
		<tr>
			<th>Arriving on time</th>
			<td><input type="text"  name="fdate" class="some_class" value="" id="some_class_1"/></td>
		</tr>
		<tr>
			<th>Leaving on time</th>
			<td><input type="text"  name="tdate" class="some_class" value="" id="some_class_2"/></td>
		</tr>
		<tr>
			<th>Vehicle number</th>
			<td><input type="text" placeholder="Vehicle num" name="vehiclenum" /></td>
		</tr>
		<tr>
			<th>Type of Vehicle</th>
			<td><select id="vehicles" name="vehicle">
				<option value="car">Car</option>
				<option value="bike">Bike</option>
				</select></td>
		</tr>
		<tr>
			<th>Minutes</th>
			<td><input type="text"  name="minutes"  id="minutes"/></td>
		</tr>
		<tr>
			<th><input class=button1 type="button"  value="book now"/></th>
			<th><input class=button2 type="reset" value="reset"/></th>

		</tr>
	</table>
	</form>
	<?php 
	
	landInfo();
	?>
</div>

<?php
$row;
$time=$_GET["time"];
	$to=$_GET['to'];
	$from=$_GET['from'];
	$from_time=$_GET['from_time'];
	$to_time=$_GET['to_time'];
	$vehicle_num=$_GET['vehicle_num'];
function landInfo(){
 
 global $time;
$id = $_GET["id"];
$host='localhost';
	$dbuser='root';
	$dbpassword='';
	$db='googlemaps';
$connect=mysqli_connect($host,$dbuser,$dbpassword,$db);
$result = mysqli_query($connect,"SELECT * FROM landlord where id=$id");
global $row;
 $row = mysqli_fetch_array($result);
mysqli_close($connect);

}
function totalCost($cperhr,$time)
{	
	$cost=($cperhr*$time)/60;
	return $cost;
}


?>
<div id="booking">
<div id="data">

<form name='booking' action="http://localhost:8090/A6/booking_details/booking_action.php" method="post">
<table border='0' cellspacing=15 cellpadding=15 align=center>
<tr>
<th><u><h1>Land details</h1></u></th>
<th></th>
</tr>
<tr>
<th> Landlord Name : </th>
<td><?php echo $row['name'];?></td>
<input type="hidden" value=<?php echo $row['name'];?> name="name"></input>
<input type="hidden" value=<?php echo $row['id'];?> name="id"></input>
</tr>
<tr>
<th> Landlord Email : </th>
<td><?php echo $row['email'];?></td>
<input type="hidden" value=<?php echo $row['email'];?> name="email"></input>
</tr>
<tr>
<th> Phone number : </th>
<td><?php echo $row['phone'];?></td>
<input type="hidden" value=<?php echo $row['phone'];?> name="phone"></input>
</tr>

<tr>
<th> Cost per hour : </th>
<td><?php echo $row['cost_per_hr'];?></td>
<input type="hidden" value=<?php echo $row['cost_per_hr'];?> name="cost_per_hr"></input>
</tr>
<tr>
<th> total cost : </th>
<td><?php echo totalCost($row['cost_per_hr'],$time);?></td>
<input type="hidden" value=<?php echo totalCost($row['cost_per_hr'],$time);?> name="total_cost"></input>
</tr>
<tr>
<th>From area</th>
<td><?php echo $from;?></td>
<input type="hidden" value=<?php echo $from;?> name="from"></input>
</tr>
<tr>
<th>To area</th>
<td><?php echo $to;?></td>
<input type="hidden" value=<?php echo $to;?> name="to"></input>

<input type="hidden" value="<?php echo $from_time;?>" name="from_time"></input>
<input type="hidden" value="<?php echo $to_time;?>" name="to_time"></input>
<input type="hidden" value=<?php echo $vehicle_num;?> name="vehicle_num"></input>
</tr>
<th><input type=submit style='background-color:green;text-align:center;' value='Book now'/></th>
</tr>
</table>
</form>
</div>
</div>
<script src="../../GOOGLE_PROJECT/datetimepicker-master/jquery.js"></script>
<script src="../../GOOGLE_PROJECT/datetimepicker-master/build/jquery.datetimepicker.full.js"></script>

<script>

//$('.some_class').datetimepicker({theme:'dark' ,minDate: 0 , dateFormat: 'dd/mm/yy'});
$('.some_class').datetimepicker({minDate:0});

$(document).ready(function(){
$('#some_class_2').change(function(){

var start_actual_time = $("#some_class_1").val();
var end_actual_time = $("#some_class_2").val();

start_actual_time = new Date(start_actual_time);
end_actual_time = new Date(end_actual_time);

var diff = (end_actual_time.getTime() - start_actual_time.getTime());
var res = Math.round(diff / 60000);
console.log(res);
$("#minutes").val(res);
});
});
// $('#datetimepicker_dark').datetimepicker({theme:'dark'})

</script>
<style>
#booking #data {
	    margin-top: -400px;
}
</style>