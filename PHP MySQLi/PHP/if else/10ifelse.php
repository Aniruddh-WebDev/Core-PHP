<form action="" method="post">
	<input type="text" name="ag" placeholder="Enter Age">&nbsp;&nbsp;
	<input type="submit" name="sb" value="Next">
</form>
<?php
if(isset($_POST['sb']))
{
	$a=$_POST['ag'];

	if(18>$a)
	{
		echo header("location://allpcworld.com");
	}
	else
	{
		echo header("location://getintopc.com");
	}
}
?>