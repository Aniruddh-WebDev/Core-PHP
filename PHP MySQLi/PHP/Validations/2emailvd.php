<form action="" method="post">
	<input type="text" name="em" placeholder="Enter Email"><br><br>
	<input type="submit" name="sb" value="Email"><br><hr>
</form>
<?php
if(isset($_POST['sb']))
{
	$em=$_POST['em'];

	if(filter_var($em,FILTER_VALIDATE_EMAIL))
	{
		echo "<font color='green'>Email Address '$em' is valid thanks.</font>";
	}
	else
	{
		echo "<font color='red'>email is Not valid, Please Enter valid mail Address</font>";
	}
}
?>