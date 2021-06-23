<form action="" method="post">
	<input type="number" name="id" placeholder="Enter update Id"><br><hr>
	<input type="text" name="nm" placeholder="Enter name"><br><br>
	<input type="number" name="mo" placeholder="Enter number"><br><br>
	<input type="email" name="em" placeholder="Enter email id"><br><br>
	<input type="submit" name="sb" value="Update Data"><hr>
</form>
<?php
if(isset($_POST['sb']))
{
	$id=$_POST['id'];

	$nm=$_POST['nm'];
	$mo=$_POST['mo'];
	$em=$_POST['em'];

	$con=mysqli_connect("localhost","root","","anidb");
	mysqli_query($con,"update student set name='$nm',mobile='$mo',email='$em' where id='$id'");

	echo "Update Data";

}
?>