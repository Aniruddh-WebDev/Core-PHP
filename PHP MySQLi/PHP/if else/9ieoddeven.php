<form action="" method="post">
	<input type="number" name="no" placeholder="Enter Number"><br><br>
	<input type="submit" name="sb"><br><br><hr>
</form>
<?php
if(isset($_POST['sb']))
{
	$n=$_POST['no'];

	if(($n%2)==0)
	{
		echo "Numer is Even";
	}
	else
	{
		echo "Number is Odd";
	}
}
?>