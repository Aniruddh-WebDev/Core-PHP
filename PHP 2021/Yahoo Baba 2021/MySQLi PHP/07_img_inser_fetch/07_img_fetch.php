<table border="2">
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Img</th>
		<th>Detail</th>
	</tr>
<?php
$con=mysqli_connect("localhost","root","","anidb");
$f=mysqli_query($con,"select * from product");
while($i=mysqli_fetch_array($f))
{
	echo "<tr><td>".$i['id']."</td>";
	echo "<td>".$i['pnm']."</td>"; ?>
	<td><img src="<?php echo $i['pimg']?>" width="50" height="50"></td>
<?php	echo "<td>".$i['detail']."</td></tr>";
}
?>	
</table>