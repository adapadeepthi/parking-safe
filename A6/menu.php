<html>
<head>
	<title>MainPage</title>
	<link rel="stylesheet" href="./MainStyle.css">
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
</body>
</html>