<html>
	<head>
	<title>previous details</title>
	<style>
	th {
  background-color: LightGreen;
}
	b{
		color:green;
		font-family:"Monotype Corsiva";
		}
		a:hover
	{
		color:green;
	}
		
		.button1
		{	
			cursor:pointer;
			background-color:green;
			color:white;
			font-size:16px;
		}
		.button2
		{	
			cursor:pointer;
			background-color:red;
			color:white;
			font-size:16px;
		}
		.table2
		{
			border:1px solid black;
		}
		.cities
		{
			z-index:1;
			position:absolute;
		}
		.cities
		{
			visibility:hidden;
		}
		.city:hover .cities
		{
				visibility:visible;
				color:green;
		}
		a
		{
			text-decoration:none;
			color:black;
		}
		
	</style>
	</head>
	<body>
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
		<?php
 $host='localhost';
	$dbuser='root';
	$dbpassword='';
	$db='googlemaps';
	$connect=mysqli_connect($host,$dbuser,$dbpassword,$db);
	$id=$_SESSION['id'];
	
//	l.name,b.phnno,l.email,b.to_area,b.from_time,b.to_time
	
$result = mysqli_query($connect,"SELECT b.email as name,b.phnno,b.vehicle_num,b.from_time,b.to_time FROM landlord ll inner join booking b on b.lid=ll.id and ll.cid=$id");
echo "<table border='0' cellspacing=20 cellpadding=30 align=center>
<tr>
<th style='color:blue'>customer email</th>
<th style='color:blue'>Phone number</th>
<th style='color:blue'>vehicle number</th>
<th style='color:blue'>from time</th>
<th style='color:blue'>to time</th>
</tr>";


while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td  style='background-color: PowderBlue;'>" . $row['name'] . "</td>";
echo "<td  style='background-color: PowderBlue;'>" . $row['phnno'] . "</td>";
echo "<td  style='background-color: PowderBlue;'>" . $row['vehicle_num'] . "</td>";
echo "<td  style='background-color: PowderBlue;'>" . $row['from_time'] . "</td>";
echo "<td  style='background-color: PowderBlue;'>" . $row['to_time'] . "</td>";
echo "</tr>";
}
echo "</table>";
if(mysqli_num_rows($result)==0)
	echo "<h2 align=center>Please register as landlord :-)</h2>";

mysqli_close($connect);
?>
		
		</table>
	
	<body>

</html>