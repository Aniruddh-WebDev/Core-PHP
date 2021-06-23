<h1> negative & Positive Using IF ELSE IF </h1>
<form action="" method="post">
	<input type="number" name="no" placehoder="Enter number"><br><br>
	<input type="submit" name="sb">
	<br>
</form>
<?php
if(isset($_POST['no']))
{
	$n=$_POST['no'];

	if(0<$n)
	{
		echo "Positive";
	}
	else if(0>$n)
	{
		echo "Negative";
	} 
	else
	{
		echo "Enter number";
	}
}
?>