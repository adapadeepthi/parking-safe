<html>
<head>
	<title>MainPage</title>
	<link rel="stylesheet" type="text/css" href="./datetimepicker-master/jquery.datetimepicker.css"/>
<style type="text/css">

.custom-date-style {
	background-color: red !important;
}

.input{	
}
.input-wide{
	width: 500px;
}
.container {
			height: 500px;
    margin-left: 400px;
		}
		#map {
			width: 100%;
			height: 100%;
			border: 30px;
			
		}
		#data, #allData {
			display: none;
		}
#parking-space {
   position: fixed;
    left: 440px;
    top: 180px;
   }

</style>
	<link rel="stylesheet" href="MainStyle.css">
	
</head>
<body >
<p id="error" align=center></p>
<div id="parking-space">
	<img src="main_pic.gif" alt="Italian Trulli"/> 
</div>
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
<div id="booking">
	<form action="http://localhost:8090/GOOGLE_PROJECT/index.php"  method=post >
	<table cellspacing=4 cellpadding=4 class="table2">
		<tr >
		<td colspan=2><h2><u><i>book your space here</i></u></h2></td>
		</tr>
		<tr>
			<th>From : </th>
			<td><input type="text" required placeholder="from place" name="from"/></td>
		</tr>
		<tr>
			<th>To</th>
			<td><input type="text" required placeholder="to place" name="toaddress"/></td>
		</tr>
		<tr>
			<th>Arriving on time</th>
			<td><input type="text"  required name="fdate" class="some_class" value="" id="some_class_1"/></td>
		</tr>
		<tr>
			<th>Leaving on time</th>
			<td><input type="text"  required name="tdate" class="some_class" value="" id="some_class_2"/></td>
		</tr>
		<tr>
			<th>Vehicle number</th>
			<td><input type="text" required placeholder="Vehicle num" name="vehiclenum" /></td>
		</tr>
		<tr>
			<th>Type of Vehicle</th>
			<td><select id="vehicles" name="vehicle" required>
				<option value="car">Car</option>
				<option value="bike">Bike</option>
				</select></td>
		</tr>
		<tr>
			<th>Minutes</th>
			<td><input type="text" required name="minutes"  id="minutes"/></td>
		</tr>
		<tr>
			<th><input class=button1 type="submit" value="book now" id="booktoggle"/></th>
			<th><input class=button2 type="reset" value="reset"/></th>

		</tr>
	</table>
	</form>
	</div>
<script src="./datetimepicker-master/jquery.js"></script>
<script src="./datetimepicker-master/build/jquery.datetimepicker.full.js"></script>

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
const queryString = window.location.search;
console.log(queryString);
const urlParams = new URLSearchParams(queryString);
var message = urlParams.get('message');
console.log(message);
if(message!=null){
document.getElementById("error").innerHTML = message;
}

</script>

</body>
</html>

