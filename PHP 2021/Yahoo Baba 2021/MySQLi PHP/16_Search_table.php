<form action="" method="post">
	<input type="text" name="data" placeholder="Enter Search Data"><br><br>
	<input type="submit" name="sb"><hr>
</form>
<?php
if(isset($_POST['sb']))
{
	$data=$_POST['data'];
?>
<table border="2">
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Mobile</th>
		<th>Email</th>
	</tr>	



<?php
$c=mysqli_connect("localhost","root","","anidb");
$a=mysqli_query($c,"select * from student where name='$data'");
while($n=mysqli_fetch_array($a))
{
	echo "<tr><td>".$n['id']."</td>";
	echo "<td>".$n['name']."</td>";
	echo "<td>".$n['mobile']."</td>";
	echo "<td>".$n['email']."</td></tr>";
}
}
?>	
</table>