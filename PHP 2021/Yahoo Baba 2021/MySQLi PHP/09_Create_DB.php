<form action="" method="post">
	<input type="text" name="db" placeholder="Enter Database Name"><br><br>
	<input type="submit" name="sb" value="Create DB"><hr>
</form><font color="red"><h1>
<?php
if(isset($_POST['sb']))
{
	$db=$_POST['db'];

	$con=mysqli_connect("localhost","root","");
	mysqli_query($con,"create database $db");

	echo "Database ".$db." Create.....";
}
?>
</h1></font>