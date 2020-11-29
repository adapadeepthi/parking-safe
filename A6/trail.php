<?php
 $host='localhost';
	$dbuser='root';
	$dbpassword='';
	$db='googlemaps';
	$connect=mysqli_connect($host,$dbuser,$dbpassword,$db);
$result = mysqli_query($connect,"SELECT * FROM traildisplay");

echo "<table border='1' cellspacing=40 cellpadding=30>
<tr>
<th style='color:blue'>Email</th>
<th style='color:blue'>Phone number</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['phonenum'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($connect);
?>