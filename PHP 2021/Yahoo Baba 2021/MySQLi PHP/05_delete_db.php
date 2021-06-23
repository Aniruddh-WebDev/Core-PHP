<form action="" method="post">
	<input type="number" name="no" placeholder="Enter Delete Id"><br><br>
	<input type="submit" name="sb" value="Delete Data"><hr>
</form>
<?php
if(isset($_POST['sb']))
{
	$d=$_POST['no'];

	$con=mysqli_connect("localhost","root","","anidb");
	mysqli_query($con,"delete from student where id='$d'");

	echo "Data Delete.....";
}
?>