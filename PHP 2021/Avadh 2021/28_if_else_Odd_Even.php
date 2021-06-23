<form action="" method="post">
	<input type="number" name="no" placeholder="Enter Number"><br><br>
	<input type="submit" name="sb" value="Odd & Even"><hr>
</form>
<?php
if(isset($_POST['sb']))
{
	$n=$_POST['no'];

	if(($n%2)==0)
	{
		echo "$n is Even";
	}
	else
	{
		echo "$n is Odd";
	}
}
?>