<form action="" method="post">
	<input type="text" name="nm" placeholder="Enter Drop Table"><br><br>
	<input type="submit" name="sb" value="Drop"><hr>
</form><font color="red"><h1>
<?php
if(isset($_POST['sb']))
{
	$d=$_POST['nm'];

	$c=mysqli_connect("localhost","root","","newdb");
	mysqli_query($c,"drop table $d");

	echo "Drop Table: ".$d;
}
?>
</h1></font>