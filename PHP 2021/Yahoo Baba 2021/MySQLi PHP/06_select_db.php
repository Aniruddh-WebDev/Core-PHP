<table border="2">
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Number</th>
		<th>Email</th>
	</tr>
<?php
$con=mysqli_connect("localhost","root","","anidb");
$i=mysqli_query($con,"select * from student");
while($data=mysqli_fetch_array($i))
{
	echo "<tr><td>".$data['id']."</td>";
	echo "<td>".$data['name']."</td>";
	echo "<td>".$data['mobile']."</td>";
	echo "<td>".$data['email']."</td></tr>";
}
?>	
</table>