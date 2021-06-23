<form action="" method="post">
	<input type="text" name="e" placeholder="Enter Your Email Id"><br><br>
	<input type="submit" name="sb" value="Login"><hr>
</form><h1>
<?php
if(isset($_POST['sb']))
{
	$e=$_POST['e'];
	if(filter_var($e,FILTER_VALIDATE_EMAIL))
	{
		echo "<font color=green>Email address '$e' is valid Thanks.....</font>";
	}
	else
	{
		echo "<font color=red>Email is Not valid, Please Enter Valid mail Address</font>";
	}
}
?>
</h1>