<form action="" method="POST">
	<input type="text" name="pa" placeholder="Enter Password"><br>
	<input type="text" name="psw" placeholder="Enter Password Confirm"><br>
	<input type="submit" name="sb" value="Verify">
	<hr>
</form>
<?php
if(isset($_POST['sb']))
{
	$x=$_POST['pa'];
	$y=$_POST['psw'];

	if($x==$y)
	{
		echo "Password is Confirm";
	}
	else
	{
		echo "Password is not Confirm";
	}
}
?>