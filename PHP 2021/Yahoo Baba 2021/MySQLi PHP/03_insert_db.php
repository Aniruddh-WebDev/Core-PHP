<form action="" method="post">
	<input type="text" name="nm" placeholder="Enter name"><br><br>
	<input type="number" name="mo" placeholder="Enter number"><br><br>
	<input type="email" name="em" placeholder="Enter email id"><br><br>
	<input type="submit" name="sb" value="Inser Data"><hr>
</form>
<?php
if(isset($_POST['sb']))
{
	$nm=$_POST['nm'];
	$mo=$_POST['mo'];
	$em=$_POST['em'];

	$con=mysqli_connect("localhost","root","","anidb");
	mysqli_query($con,"insert into student(name,mobile,email)value('$nm','$mo','$em')");

	echo "<h1>Data Insert To DB.....</h1>";
}
?>